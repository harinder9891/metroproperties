@extends('backend.layout.app')
@section('content')
    
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Properties</h4>
          <p class="card-description">
           Edit Property Feature
          </p>
          <form class="forms-sample" action="{{route('property-feature.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputUsername1">Feature</label>
              <input type="text" class="form-control" id="exampleInputUsername1" name="name" value="{{$data->name}}">
            </div>
            <div class="form-group">
              <label>icon upload</label>
              <input type="file" name="icon" class="form-control file-upload-info mb-2" accept="image/*">
              <img src="{{asset('property_images').'/'.$data->icon}}" width="70px" height="70px" alt="">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection