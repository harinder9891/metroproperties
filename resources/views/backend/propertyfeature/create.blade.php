@extends('backend.layout.app')
@section('content')
    
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Properties</h4>
          <p class="card-description">
           Add Property Feature
          </p>
          <form class="forms-sample" action="{{url('property-feature/store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Feature</label>
              <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Property Feature">
            </div>
            <div class="form-group">
              <label>icon upload</label>
              <input type="file" name="icon" class="form-control file-upload-info" accept="image/*">
              
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection