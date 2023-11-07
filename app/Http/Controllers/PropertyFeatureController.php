<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyFeature;

class PropertyFeatureController extends Controller
{
    public function Index(){
        $collection = PropertyFeature::all();
        return view('backend.propertyfeature.index',compact('collection'));

    }

    public function Create(Request $request){

        return view('backend.propertyfeature.create');
    }

    public function Store(Request $request){

       $data= $request->validate([
            'name'=>'required'
        ]);

        PropertyFeature::create($data);
        return redirect()->route('property-feature.index');

    }

    public function Edit($id){
        $data = PropertyFeature::find($id);
        return view('backend.propertyfeature.edit',compact('data'));
    }

    public function Update($id,Request $request){

        $data= PropertyFeature::find($id);
        $data->name = $request->name ;
        $data->save();
        return redirect()->route('property-feature.index');

    }

    public function Destroy($id){

        PropertyFeature::find($id)->delete();
        return redirect()->route('property-feature.index');


    }
}
