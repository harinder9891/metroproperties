@extends('backend.layout.app')
@section('content')
    
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Properties</h4>
          <p class="card-description">
           Edit Property image
          </p>
          <form class="forms-sample" action="{{ route('property.updateimage', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <img src="{{ asset('property_images').'/'.$data->image }}" width="100px" height="100px" alt="" class="mb-5">
            
            <div class="form-group">
                <label>Upload New Image</label>
                <input type="file" name="image" class="form-control file-upload-info" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
        
        </div>
      </div>
    </div>
</div>
@endsection