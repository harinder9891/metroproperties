<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\PropertyFeature;
use App\Models\PropertyType;
use App\Models\ApartmentConfiguration;
use App\Models\NearByTags;
use App\Models\PropertyImages;

class PropertiesController extends Controller
{
    public function Index(){
        // $collection = Properties::join('property_types','property_types.id','properties.type_id')->select('property_types.name as typename','properties.*')->get();
        $collection = Properties::join('property_types', 'property_types.id', 'properties.type_id')->join('users','users.id','properties.agent_id')
        ->select('property_types.name as typename','users.name as agentname' ,'properties.*')
        ->selectRaw('(SELECT GROUP_CONCAT(CONCAT(property_features.name, ":", property_features.icon)) FROM property_features WHERE FIND_IN_SET(property_features.id, properties.features) > 0) as features_data')
        ->paginate(10);
        $data = PropertyType::all();
        
        return view('backend.properties.index',compact('collection','data'));

    }

    public function Create(Request $request){
        $types=PropertyType::all();
        $features=PropertyFeature::all();
        $tags = NearByTags::all();
        return view('backend.properties.create',compact('types','features','tags'));
    }

    public function Store(Request $request){

        $checkboxValues = $request->input('features');

        if ($checkboxValues !=null) {

            $checkboxValuesString = implode(',', $checkboxValues);
        }

        $nearby = $request->input('nearby');

        if ($nearby !=null) {

            $nearbyvalues = implode(',', $nearby);
        }

        $data= $request->all();
        $data['features']=$checkboxValuesString ?? null;
        $data['nearby']=$nearbyvalues ?? null;
        $data['agent_id']= $request->user()->id;

      $property=   Properties::create($data);

      $images = $request->file('image');
        if ($images !=null) {
            
            foreach ($images as $image) {
                
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                
                $image->move(public_path('property_images'), $imageName);
                
                $property->images()->create([
                    'image' => $imageName,
                ]);
            }
            
        }


        for ($i = 0; $i < count($request->beds); $i++) {
            if (!is_null($request->beds[$i])) {
                ApartmentConfiguration::create([
                    'properties_id' => $property->id,
                    'beds' => $request->beds[$i],
                    'baths' => $request->baths[$i],
                    'cars' => $request->cars[$i],
                    'a_minprice' => $request->a_minprice[$i],
                    'a_maxprice' => $request->a_maxprice[$i],
                    'internal' => $request->internal[$i],
                ]);
            }
        }

        return redirect()->route('property.index');

    }

    public function Edit($id){
        $types=PropertyType::all();
        $features=PropertyFeature::all();
        $tags = NearByTags::all();

        $data = Properties::with('apartmentconfiguration')->where('properties.id',$id)->first();
        return view('backend.properties.edit',compact('data','features','types','tags'));
    }

    public function Update($id,Request $request){

        $checkboxValues = $request->input('features');

        if ($checkboxValues !=null) {

            $checkboxValuesString = implode(',', $checkboxValues);
        }

        $nearby = $request->input('nearby');

        if ($nearby !=null) {

            $nearbyvalues = implode(',', $nearby);
        }


        $data= Properties::with('apartmentconfiguration')->where('properties.id',$id)->first();

        $data->title = $request->title ?? $data->title;
        $data->description = $request->description ?? $data->description;
        $data->type_id = $request->type_id ?? $data->type_id;
        $data->location = $request->location ?? $data->location;
        $data->nearby = $nearbyvalues ?? $data->nearby;
        $data->bedrooms = $request->bedrooms ?? $data->bedrooms;
        $data->bathrooms = $request->bathrooms ?? $data->bathrooms;
        $data->area_sqft = $request->area_sqft ?? $data->area_sqft;
        $data->agent_id = $request->user()->id;
        $data->property_status = $request->property_status ?? $data->property_status;
        $data->features = $checkboxValuesString ?? $data->features;
        $data->minprice = $request->minprice ?? $data->minprice;
        $data->maxprice = $request->maxprice ?? $data->maxprice;
        $data->completion_timeframe = $request->completion_timeframe ?? $data->completion_timeframe;

        if ($request->beds !=null) {

            for ($i = 0; $i < count($request->beds); $i++) {
                if (!is_null($request->beds[$i])) {
                    ApartmentConfiguration::updateOrCreate(
                        [
                            'properties_id' => $id,
                            'id' => $data->apartmentconfiguration[$i]->id,
                        ],
                        [
                            'beds' => $request->beds[$i] ?? $data->apartmentconfiguration[$i]->beds,
                            'baths' => $request->baths[$i] ?? $data->apartmentconfiguration[$i]->baths,
                            'cars' => $request->cars[$i] ?? $data->apartmentconfiguration[$i]->cars,
                            'a_minprice' => $request->a_minprice[$i] ?? $data->apartmentconfiguration[$i]->a_minprice,
                            'a_maxprice' => $request->a_maxprice[$i] ?? $data->apartmentconfiguration[$i]->a_maxprice,
                            'internal' => $request->internal[$i] ?? $data->apartmentconfiguration[$i]->internal,
                        ]
                    );
            
                }
            }

        }

        $data->save();
        return redirect()->route('property.index');

    }

    public function Destroy($id){

        Properties::find($id)->delete();
        return redirect()->route('property.index');


    }

    public function Images($id){

        $collection = Properties::with('images')->where('properties.id',$id)->first();
        
        return view('backend.properties.images',compact('collection'));
    }

    
    public function ImageEdit($id){

        $data = PropertyImages::find($id);
        return view('backend.properties.editimage',compact('data'));
    }

    public function UpdateImage($id, Request $request)
    {
        $data = PropertyImages::find($id);

        $image = $request->file('image');
        
        if ($image !== null) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            
            $image->move(public_path('property_images'), $imageName);
            
            $data->image = $imageName;
            $data->save();
        }

        return redirect()->back();
    }

    public function AddNewImage(Request $request)
    {
        $data = new PropertyImages();

        $image = $request->file('image');
        
        if ($image !== null) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            
            $image->move(public_path('property_images'), $imageName);
            
            $data->properties_id = $request->properties_id;
            $data->image = $imageName;
            $data->save();
        }

        return redirect()->back();
    }
    
    public function DeleteImage($id){
        $image = PropertyImages::find($id)->delete();
        return redirect()->back();
    }

    public function Configurations($id){

        $collection = Properties::with('apartmentconfiguration')->where('properties.id',$id)->first();
        return view('backend.properties.configuration',compact('collection'));
    }

    public function PropertyFilter(Request $request){


        $query = Properties::query();

        
        $query->join('property_types', 'property_types.id', 'properties.type_id')->join('users','users.id','properties.agent_id')
        ->select('property_types.name as typename','users.name as agentname' ,'properties.*')
        ->selectRaw('(SELECT GROUP_CONCAT(CONCAT(property_features.name, ":", property_features.icon)) FROM property_features WHERE FIND_IN_SET(property_features.id, properties.features) > 0) as features_data');
       
        if(request('filter') !='all' && request('filter') !=null){
            $query->where(function($query) {
              $query->where('property_types.id', request('filter'));
            });
        }

        if(request('search')){
            $query->where(function($query) {
              $query->orwhere('properties.title', 'like', '%' . request('search') . '%');
              $query->orwhere('properties.location', 'like', '%' . request('search') . '%');
              $query->orwhere('properties.minprice', 'like', '%' . request('search') . '%');
              $query->orwhere('properties.maxprice', 'like', '%' . request('search') . '%');
            });
        }
    
      
       $collection = $query->paginate(15);
        // dd($collection);
        // dd($query->toSql());    
        $data = PropertyType::all();
        
        return view('backend.properties.index',compact('collection','data'));
    }

    public function AddNewApartmentConfig(Request $request){

        ApartmentConfiguration::create([
            'properties_id' => $request->properties_id,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'cars' => $request->cars,
            'a_minprice' => $request->a_minprice,
            'a_maxprice' => $request->a_maxprice,
            'internal' => $request->internal,
        ]);


        return redirect()->route('property.index');
    }

    public function PropertyDetail($id){

        // $detail = Properties::with(['images','apartmentconfiguration'])->where('properties.id',$id)->first();
        $detail = Properties::join('property_types', 'property_types.id', 'properties.type_id')->join('users','users.id','properties.agent_id')->with(['images','apartmentconfiguration'])->where('properties.id',$id)
        ->select('property_types.name as typename','users.name as agentname' ,'properties.*')
        ->selectRaw('(SELECT GROUP_CONCAT(CONCAT(property_features.name, ":", property_features.icon)) FROM property_features WHERE FIND_IN_SET(property_features.id, properties.features) > 0) as features_data')
        ->first();
        return view('backend.properties.detail',compact('detail'));
    }


    public function RemoveApartmentConfig($id){
        $config = ApartmentConfiguration::find($id)->delete();
        return redirect()->back();
    }

}