@extends('backend.layout.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Agents</h4>
            <p class="card-description">
              All users
            </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        
                    <tr> 
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                    <td>
                        <form method="POST" action="{{ route('agent.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('agent.edit',$item->id)}}" class="badge badge-info">Edit</a>
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