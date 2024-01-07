@extends('backend.layout.app')
@section('content')
<style>
  .tdimg img{
    width: 120px !important ;
    height: 120px !important ;
  }
</style>
<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Property Images</h4>
            <p class="card-description">
              {{$collection->title}}
            </p>
            <p class="card-description">
                {{$collection->location}}
              </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Images</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection->images as $item)
                        
                    <tr> 
                      <td>{{$item->id}}</td>
                      <td class="tdimg"><img src="{{asset('property_images').'/'.$item->image}}" alt=""></td>
                    <td>
                        <form method="POST" action="{{ route('property.destroyimage', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('property.editimage',$item->id)}}" class="badge badge-info">Edit</a>
                            <button type="submit" class="badge badge-danger">Delete </button>
                        </form>
                    </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  <div class="col-md-4 grid-margin ">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Property Image</h4>
        <p class="card-description">
         Add New Image
        </p>
        <form class="forms-sample" action="{{route('property.newimage')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control file-upload-info" accept="image/*">
            <input type="hidden" value="{{$collection->id}}" name="properties_id">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection