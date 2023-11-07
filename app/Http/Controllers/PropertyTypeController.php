<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PropertyType;

class PropertyTypeController extends Controller
{
    public function Index(){
        $collection = PropertyType::all();
        return view('backend.propertytype.index',compact('collection'));

    }

    public function Create(Request $request){

        return view('backend.propertytype.create');
    }

    public function Store(Request $request){

       $data= $request->validate([
            'name'=>'required'
        ]);

        PropertyType::create($data);
        return redirect()->route('property-type.index');

    }

    public function Edit($id){
        $data = PropertyType::find($id);
        return view('backend.propertytype.edit',compact('data'));
    }

    public function Update($id,Request $request){

        $data= PropertyType::find($id);
        $data->name = $request->name ;
        $data->save();
        return redirect()->route('property-type.index');

    }

    public function Destroy($id){

        PropertyType::find($id)->delete();
        return redirect()->route('property-type.index');


    }
}
