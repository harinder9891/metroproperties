@extends('backend.layout.app')
@section('content')
    
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Location Tags</h4>
          <p class="card-description">
           Edit Location Tag Name
          </p>
          <form class="forms-sample" action="{{route('tag.update',$data->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputUsername1">Tag Name</label>
              <input type="text" class="form-control" id="exampleInputUsername1" name="tag" value="{{$data->tag}}">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection