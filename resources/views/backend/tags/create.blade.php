@extends('backend.layout.app')
@section('content')
    
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Location Tags</h4>
          <p class="card-description">
           Add Location Tag Name
          </p>
          <form class="forms-sample" action="{{route('tag.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Tag Name</label>
              <input type="text" class="form-control" id="exampleInputUsername1" name="tag" placeholder="Location Tag Name">
            </div>
            @error('tag')
            <div class="alert alert-danger">{{ $message }}</div>
           @enderror
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection