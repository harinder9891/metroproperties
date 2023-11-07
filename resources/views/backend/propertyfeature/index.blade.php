@extends('backend.layout.app')
@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Property Features</h4>
            <p class="card-description">
              All Property Feature
            </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        
                    <tr> 
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      {{-- <td><label class="badge badge-danger">Pending</label>
                        <label class="badge badge-info">Edit</label>
                    </td> --}}
                    <td>
                        <form method="POST" action="{{ url('property-feature/destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('property-feature.edit',$item->id)}}" class="badge badge-info">Edit</a>
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
</div>
@endsection