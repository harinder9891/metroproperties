<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadsController extends Controller
{
    public function Index(){

        $collection = Lead::all();
        return view('backend.leads',compact('collection'));
    }

    public function Store(Request $request){

        $data = $request->all();

        Lead::create($data);

        return "success";

    }

    public function Update(Request $request){

        $lead= Lead::find($request->id);
        $lead->lead_status = $request->value ;
        $lead->save();
        return 'success';
        
    }

    public function Destroy($id){
        Lead::find($id)->delete();
        return redirect()->route('lead.index');
    }
}
