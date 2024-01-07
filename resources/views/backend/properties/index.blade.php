@extends('backend.layout.app')
@section('content')
<style>
     .a p{ width: 300px; 
  word-wrap: break-word;
  overflow: auto;
     }
     .filter-btn{
  border: 0px;
  background: #4B49AC;
  color: #fff;
  border-radius: 5px;
  padding-left: 10px;
  padding-right: 10px;
}
</style>
<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form action="{{route('property.propertyfilter')}}">
            @csrf
          <select name="filter" id="" class="select-style">
            <option value="all">All Properties</option>
            @foreach ($data as $dat)
                <option value="{{$dat->id}}">{{$dat->name}}</option>
            @endforeach
          </select>
          <button type="submit" class="filter-btn">Apply</button>
        </form>
        
        </div>
      </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <form action="{{route('property.propertyfilter')}}">
          @csrf
          <input type="text" name="search" class="filter-input" placeholder="Title,Location,P   rice">
        <button type="submit" class="filter-btn">Search</button>
      </form>
      
      </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Properties</h4>
            <p class="card-description">
              All Properties
            </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($collection as $item)
                        
                    <tr> 
                      <td>{{$item->id}}</td>
                      <td>{{$item->typename}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{$item->minprice}}-{{$item->maxprice}}</td>
                      <td>{{$item->location}}</td>
                    <td>
                        <form method="POST" action="{{ url('property/destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            {{-- <a href="{{route('property.images',$item->id)}}" class="badge badge-info">View images</a> --}}
                            {{-- <a href="{{route('property.edit',$item->id)}}" class="badge badge-info">Edit</a> --}}
                            <a href="{{route('property.detail',$item->id)}}" class="badge badge-info">detail</a>
                            @if ($item->type_id ==1)
                            {{-- <a href="{{route('property.config',$item->id)}}" class="badge badge-info">Apartment config</a> --}}
                            @endif
                            <button type="submit" class="badge badge-danger">Delete </button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                   
                </tbody>
              </table>
              @if ($collection->isEmpty())
              <h5 style="text-align: center">Data Not Found!</h5>
              @endif
              {{ $collection->links() }} 
            </div>
          </div>
        </div>
      </div>
</div>
@endsection