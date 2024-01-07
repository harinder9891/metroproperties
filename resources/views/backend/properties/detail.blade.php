@extends('backend.layout.app')
@section('content')
<div class="row">
    <div class="col">
      <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="{{route('property.index')}}">Properties</a></li>
          {{-- <li class="breadcrumb-item"><a href="#">User</a></li> --}}
          <li class="breadcrumb-item active" aria-current="page">Property Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4">
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="{{asset('backend/images/default-house.jpg')}}" alt="avatar"
            class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3">{{$detail->title}}</h5>
          <p class="text-muted mb-1">{{$detail->location}}</p>
          <div class="d-flex justify-content-center mb-2">

            <a href="{{route('property.edit',$detail->id)}}" class="btn btn-primary">Edit Details</a>
            {{-- <button type="button" class="btn btn-primary">Follow</button>
            <button type="button" class="btn btn-outline-primary ms-1">Message</button> --}}
          </div>
        </div>
      </div>
      
        {{-- <div class="card mb-4">
          <div class="card-body">
            <p class="mb-4"><span class="text-primary font-italic me-1">Property</span> Statuses</p>
              <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Development Status</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$detail->property_status}}</p>
                  </div>
                </div>
                <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Completion Timeframe</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$detail->completion_timeframe}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Upload By</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$detail->agentname}}</p>
                </div>
              </div>
          </div>
        </div> --}}
    
    
      <div class="card mb-4 mb-lg-0 ">

      <div class="card-body p-3 ">
          <p class="mb-4"><span class="text-primary font-italic me-1">Property</span> Statuses</p>
        <ul class="list-group list-group-flush rounded-3">
            
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
            <span>Development Status :</span> <p class="text-muted mb-0">{{$detail->property_status}}</p>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
            <span>Completion Timeframe :</span> <p class="text-muted mb-0">{{$detail->completion_timeframe}}</p>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center p-3">
            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
           <span>Upload By :</span> <p class="text-muted mb-0">{{$detail->agentname}}</p>
          </li>
        </ul>
    </div>
</div>
      <div class="card mb-4 mt-4 mb-lg-0">
        
        <div class="card-body p-3">
            <p class="mb-4"><span class="text-primary font-italic me-1">Property</span> Images</p>
          
          <div class="row">
            @php 
            $j=1;
            @endphp
            @if ($detail->images->isNotEmpty())
                
            @foreach($detail->images as $img)  
          <div class="column">
              <img class="fs-gal mb-2 mx-2" src="{{asset('property_images')}}/{{$img->image}}" alt="Image {{$j++}}" data-url="{{asset('property_images')}}/{{$img->image}}" style="width:100px;height:100px;">
          </div>
          @endforeach
            @else
            <p class="mt-4 mb-1" style="font-size: .77rem;">Images Not Found!</p>
            @endif
      </div>
      <a href="{{route('property.images',$detail->id)}}" class="btn btn-primary">Edit Images</a>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Type</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$detail->typename}}</p>
                </div>
              </div>
              <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Title</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$detail->title}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Location</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$detail->location}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Description</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{!!$detail->description!!}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Price</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$detail->minprice}}-{{$detail->maxprice}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Bedrooms & Bathrooms</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$detail->bedrooms}}Beds & {{$detail->bathrooms}}Baths</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Area Sqm</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$detail->area_sqft}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Features</p>
            </div>
            @php
                $featuresData = explode(',', $detail->features_data);
                
            @endphp
            <div class="col-sm-9">
              <p class="text-muted mb-0">
                @foreach ($featuresData as $feature)
                @php
                     $featureArray = explode(':', $feature);
                    $featureName = isset($featureArray[0]) ? $featureArray[0] : null;
                    $icon = isset($featureArray[1]) ? $featureArray[1] : null;
                    @endphp
                @if ($featureName)
                , {{ $featureName }}
                @endif
        
            @endforeach
              </p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">NearBy Locations</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$detail->nearby}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @if ($detail->apartmentconfiguration->isNotEmpty())
        
        <div class="col-md-12">
          <div class="card mb-4 mb-md-0">
            <div class="card-body">
              <p class="mb-4"><span class="text-primary font-italic me-1">Apartment</span> Configuration</p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Bedrooms</th>
                      <th>Bathrooms</th>
                      <th>Car Parking</th>
                      <th>Price</th>
                      <th>Internal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($detail->apartmentconfiguration as $item)
                          
                      <tr> 
                        <td>{{$item->beds}}</td>
                        <td>{{$item->baths}}</td>
                        <td>{{$item->cars}}</td>
                        <td>{{$item->a_minprice}}-{{$item->a_maxprice}}</td>
                        <td>{{$item->internal}}</td>
                      <td>
                          <form method="POST" action="{{ route('property.removeconfig', $item->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="badge badge-danger">Remove </button>
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
        @endif
        {{-- <div class="col-md-6">
          <div class="card mb-4 mb-md-0">
            <div class="card-body">
              <p class="mb-4"><span class="text-primary font-italic me-1">Property</span> Images
              </p>
              <div class="row">
                @php 
                $j=1;
                @endphp
                @if ($detail->images->isNotEmpty())
                    
                @foreach($detail->images as $img)  
              <div class="column">
                  <img class="fs-gal mb-2 mx-2" src="{{asset('property_images')}}/{{$img->image}}" alt="Image {{$j++}}" data-url="{{asset('property_images')}}/{{$img->image}}" style="width:100px;height:100px;">
              </div>
              @endforeach
                @else
                <p class="mt-4 mb-1" style="font-size: .77rem;">Images Not Found!</p>
                @endif
          </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <div class="fs-gal-view">
    <h1></h1>
    <img class="fs-gal-prev fs-gal-nav" src="{{asset('backend/images/prev.svg')}}" alt="Previous picture" title="Previous picture" />
    <img class="fs-gal-next fs-gal-nav" src="{{asset('backend/images/next.svg')}}" alt="Next picture" title="Next picture" />
    <img class="fs-gal-close" src="{{asset('backend/images/close.svg')}}" alt="Close gallery" title="Close gallery" />
    <img class="fs-gal-main" src="" alt="" />
</div>  
  @endsection