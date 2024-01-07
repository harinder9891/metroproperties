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
        $image = $request->icon;
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                
                $image->move(public_path('property_images'), $imageName);

        PropertyFeature::create([
            'name'=>$request->name,
            'icon'=>$imageName
        ]);
        return redirect()->route('property-feature.index');

    }

    public function Edit($id){
        $data = PropertyFeature::find($id);
        return view('backend.propertyfeature.edit',compact('data'));
    }

    public function Update($id,Request $request){

        $image =$request->icon;
        if ($request->icon !=null) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                
            $image->move(public_path('property_images'), $imageName);

        }

        $data= PropertyFeature::find($id);
        $data->name = $request->name ;
        $data->icon = $imageName ?? $data->icon;
        $data->save();
        return redirect()->route('property-feature.index');

    }

    public function Destroy($id){

        PropertyFeature::find($id)->delete();
        return redirect()->route('property-feature.index');


    }
}
