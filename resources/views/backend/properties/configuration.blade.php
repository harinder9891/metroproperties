@extends('backend.layout.app')
@section('content')
<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Apartment Configuration</h4>
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
                    <th>Bedrooms</th>
                    <th>Bathrooms</th>
                    <th>Car Parking</th>
                    <th>Price</th>
                    <th>Internal</th>
                    {{-- <th>Action</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection->apartmentconfiguration as $item)
                        
                    <tr> 
                      <td>{{$item->id}}</td>
                      <td>{{$item->beds}}</td>
                      <td>{{$item->baths}}</td>
                      <td>{{$item->cars}}</td>
                      <td>{{$item->a_minprice}}-{{$item->a_maxprice}}</td>
                      <td>{{$item->internal}}</td>
                    {{-- <td>
                        <form method="POST" action="{{ url('property-feature/destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('property-feature.edit',$item->id)}}" class="badge badge-info">Edit</a>
                            <button type="submit" class="badge badge-danger">Delete </button>
                        </form>
                    </td> --}}
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