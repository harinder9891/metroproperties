<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\User;
use App\Models\LeadFeedback;

class LeadsController extends Controller
{
    public function Index(Request $request){

        $collection = Lead::paginate(15);
        $users = User::all();
        return view('backend.leads',compact('collection','users'));
    }

    public function Filter(Request $request){
     
        $query = Lead::query();
        if(request('filter') !='all'){
            
            $query->where(function($query) {
              $query->where('assign_to', request('filter'));
        });

        }else {
            $collection = $query->paginate(15);
        }
        
        if(request('search')){
            $query->where(function($query) {
              $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('lname', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%')
            ->orWhere('subject', 'like', '%' . request('search') . '%')
            ->orWhere('phone', 'like', '%' . request('search') . '%');
        });
        }

      
       $collection = $query->paginate(15);

        $users = User::all();
        return view('backend.leads',compact('collection','users'));
        
    }

    public function Create(){
        return view('backend.createlead');
    }

    public function Store(Request $request){

        date_default_timezone_set('Australia/Sydney');
        $currentDateTime = date('Y-m-d H:i:s A');


        $data = $request->all();
        $data['assign_to']=1;
        $data['datetime']=$currentDateTime;
       $success = Lead::create($data);

       return redirect()->route('lead.index');

    }

    public function Update(Request $request){

        $lead= Lead::find($request->id);
        $lead->lead_status = $request->value ;
        $lead->save();
        return 'Lead status update successfully!';
        
    }

    public function LeadAssign(Request $request){

        $lead= Lead::find($request->id);
        $lead->assign_to = $request->value ;
        $lead->save();
        return 'Lead assigned to an agent successfully!';
    }

    public function AddLeadFeedback(Request $request){

        date_default_timezone_set('Australia/Sydney');
        $currentDateTime = date('Y-m-d H:i:s A');

        $model = new LeadFeedback();
        $model->lead_id =$request->lead_id;
        $model->comment =$request->comment;
        $model->date_time =$currentDateTime;
        $model->save();

        return redirect()->back() ;
    }

    public function GetLeadsFeedBacks(Request $request){

        $data = LeadFeedback::where('lead_id',$request->leadid)->get();
        return $data ;
    }

    public function Destroy($id){
        Lead::find($id)->delete();
        return redirect()->route('lead.index');
    }
}
