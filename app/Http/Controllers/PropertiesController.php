<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;

class PropertiesController extends Controller
{
    public function Index(){
        $collection = Properties::all();
        return view('backend.properties.index',compact('collection'));

    }

    public function Create(Request $request){

        return view('backend.properties.create');
    }

    public function Store(Request $request){

       $data= $request->validate([
            'name'=>'required'
        ]);

        Properties::create($data);
        return redirect()->route('property.index');

    }

    public function Edit($id){
        $data = Properties::find($id);
        return view('backend.properties.edit',compact('data'));
    }

    public function Update($id,Request $request){

        $data= Properties::find($id);
        $data->name = $request->name ;
        $data->save();
        return redirect()->route('property.index');

    }

    public function Destroy($id){

        Properties::find($id)->delete();
        return redirect()->route('property.index');


    }
}
