<?php

namespace App\Http\Controllers;
use App\Models\NearByTags;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function Index(){
        $collection = NearByTags::all();
        return view('backend.tags.index',compact('collection'));

    }

    public function Create(Request $request){

        return view('backend.tags.create');
    }

    public function Store(Request $request){

       $data= $request->validate([
            'tag'=>'required'
        ]);

        NearByTags::create($data);
        return redirect()->route('tag.index');

    }

    public function Edit($id){
        $data = NearByTags::find($id);
        return view('backend.tags.edit',compact('data'));
    }

    public function Update($id,Request $request){

        $data= NearByTags::find($id);
        $data->tag = $request->tag ;
        $data->save();
        return redirect()->route('tag.index');

    }

    public function Destroy($id){

        NearByTags::find($id)->delete();
        return redirect()->route('tag.index');


    }
}
