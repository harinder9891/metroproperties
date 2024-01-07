@extends('backend.layout.app')
@section('content')
    <style>
      .variations-hide{
        display: none;
      }
      .variations-show{
        display: block;
      }

      [role="textbox"] {
        height: 25vh;
      }

      .cl-custom-check {
  display: none;
}
.cl-custom-check + .cl-custom-check-label {
  /* Unchecked style  */
  background-color: #ccc;
  color: #fff;
  padding: 5px 10px;
  font-family: sans-serif;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border-radius: 4px;
  display: inline-block;
  margin: 0 10px 10px 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transition: all 0.6s ease;
}
.cl-custom-check:checked + .cl-custom-check-label {
  /* Checked style  */
  background-color: #4B49AC;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transform: rotateY(360deg);
}

    </style>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Properties</h4>
          <p class="card-description">
           Edit Property
          </p>
          <form class="forms-sample" action="{{route('property.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="propertytype">Property Type</label>
                <select name="type_id" id="propertytype" class="form-control" disabled>
                    <option value="" selected disabled>--Select Property Type--</option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}" @if ($type->id == $data->type_id)selected
                            
                        @endif>{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="prop-title">Title</label>
                <input type="text" class="form-control" id="prop-title" value="{{$data->title}}" name="title" placeholder="Property Title">
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" id="location" value="{{$data->location}}" name="location" placeholder="Property Location">
            </div>
            @if ($tags->isNotEmpty())
                
            <div class="form-group">
              <label for="location"> NearBy Locations</label>
            </div>
            <div class="form-group">
              @foreach ($tags as $tag)
                  
              <input class="cl-custom-check form-control" id="marking_{{$tag->id}}" value="{{$tag->tag}}" name="nearby[]" type="checkbox" @if (str_contains( $data->nearby, $tag->tag))checked
                  
              @endif>
              <label class="cl-custom-check-label" for="marking_{{$tag->id}}" title="Click for select/unselect">{{$tag->tag}}</label>
              @endforeach
              
            </div>
            @endif
            <div class="form-group">
              <label for="prop-price">Price</label>
              <div class="range-slider">
                <span class="rangeValues">{{$data->minprice}}-{{$data->maxprice}}</span>
                <input id="minSlider" class="priceSlider" value="1000" min="1000" max="5000000" step="5000" type="range">
                <input id="maxSlider" class="priceSlider" value="5000000" min="1000" max="5000000" step="5000" type="range">
                <input type="hidden" id="minprice" class="minprice" value="{{$data->minprice}}" name="minprice">
                <input type="hidden" id="maxprice" class="maxprice" value="{{$data->maxprice}}" name="maxprice">
              </div>
            </div>
            <div class="form-group">
                <label for="">Property Features</label>
            </div>
            @foreach ($features as $feature)
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="features[]" value="{{$feature->id}}" class="form-check-input" @if (str_contains($data->features, $feature->id))checked
                            
                        @endif>
                        {{$feature->name}}
                    </label>
                </div>
            @endforeach
            <div class="form-group">
              <label for="prop-description">Description</label>
              <textarea id="editor" name="description" style="width:100%;">{!! $data->description !!}</textarea>
            </div>
            {{-- <div class="form-group">
              <label>Image upload</label>
              <input type="file" name="image[]" class="form-control file-upload-info" multiple accept="image/*">
              
            </div> --}}

            <div class="form-group">
              <label for="bedrooms">No. Of Bedrooms</label>
              <input type="text" class="form-control" id="bedrooms" name="bedrooms" placeholder="Number Of Bedrooms" value="{{$data->bedrooms}}">
            </div>
            <div class="form-group">
              <label for="bathrooms">No. Of Bathrooms</label>
              <input type="text" class="form-control" id="bathrooms" name="bathrooms" placeholder="Number Of Bathrooms" value="{{$data->bathrooms}}">
            </div>
            <div class="form-group">
              <label for="area_sqft">Area Sqm</label>
              <input type="text" class="form-control" id="area_sqft" name="area_sqft" placeholder="Property Area Sqft" value="{{$data->area_sqft}}">
            </div>
            <div class="form-group">
              <label for="property_status">Development Status</label>
                <select name="property_status" id="property_status" class="form-control" >
                  <option value="" disabled selected>--Choose Status--</option>
                  <option value="Off The Plan" @if ($data->property_status =='Off The Plan')selected @endif>Off The Plan</option>
                  <option value="Under Construction" @if ($data->property_status =='Under Construction')selected @endif>Under Construction</option>
                  <option value="Completed" @if ($data->property_status =='Completed')selected @endif>Completed</option>
                </select>
            </div>
            <div class="form-group">
              <label for="completion_timeframe">Completion Timeframe</label>
                <select name="completion_timeframe" id="completion_timeframe" class="form-control" >
                  <option value="" disabled selected>--Choose Timeframe--</option>
                  <option value="Less Than 6 Months" @if ($data->property_status =='Less Than 6 Months')selected @endif>Less Than 6 Months</option>
                  <option value="Less Than 12 Months" @if ($data->property_status =='Less Than 12 Months')selected @endif>Less Than 12 Months</option>
                  <option value="Less Than 18 Months" @if ($data->property_status =='Less Than 18 Months')selected @endif>Less Than 18 Months</option>
                  <option value="More Than 18 Months" @if ($data->property_status =='More Than 18 Months')selected @endif>More Than 18 Months</option>
                  
                </select>
            </div>
            @if ($data->apartmentconfiguration->isNotEmpty())
                

            <div id="variations" class="variations">
                @php
                    $yy=1 ;
                @endphp
                @foreach ($data->apartmentconfiguration as $item)
                    
                <div class="form-group " >
                    <label for="apertment_bedrooms"id="variationCount">Apertments Configurations: {{$yy++}}</label>
                    <input type="text" class="form-control mb-2" value="{{$item->beds}}" id="apertment_bedrooms" name="beds[]" placeholder="No. Of Bedrooms">
                    <input type="text" class="form-control mb-2" value="{{$item->baths}}" id="apertment_bathrooms" name="baths[]" placeholder="No. Of bathrooms">
                    <input type="text" class="form-control mb-2" value="{{$item->cars}}" id="apertment_cars" name="cars[]" placeholder="No. Of Car Parking">
                    <input type="text" class="form-control mb-2" value="{{$item->internal}}" id="apertment_internal" name="internal[]" placeholder="internal(m2)">
                    <label for="prop-price">Price</label>
                    <div class="range-slider">
                        <span class="rangeValues">{{$item->a_minprice}}-{{$item->a_maxprice}}</span>
                        <input id="minSlider" class="priceSlider" value="1000" min="1000" max="5000000" step="5000" type="range">
                        <input id="maxSlider" class="priceSlider" value="5000000" min="1000" max="5000000" step="5000" type="range">
                        <input type="hidden" id="minprice" class="minprice" value="{{$item->a_minprice}}" name="a_minprice[]">
                        <input type="hidden" id="maxprice" class="maxprice" value="{{$item->a_maxprice}}" name="a_maxprice[]">
                    </div>
                </div>
                
                @endforeach

            </div>
            {{-- <div class="form-group variations2 ">
                <button type="button" class="badge badge-info" onclick="addVariation()">Add Variation</button>
                
              </div>  --}}

          @endif
          {{-- <div class="form-group variations2 variations-hide">
            <button type="button" class="badge badge-info" onclick="addVariation()">Add Variation</button>
            
          </div> --}}
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin ">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Apertments Configuration</h4>
          <p class="card-description">
            Add New Apertments Configuration
          </p>
          <form class="forms-sample" action="{{route('property.newapartmentconfig')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$data->id}}" name="properties_id">
            <div class="form-group " >
              <label for="apertment_bedrooms"id="variationCount">Add Apertments Configurations</label>
              <input type="text" class="form-control mb-2" value="" id="apertment_bedrooms" name="beds" placeholder="No. Of Bedrooms">
              <input type="text" class="form-control mb-2" value="" id="apertment_bathrooms" name="baths" placeholder="No. Of bathrooms">
              <input type="text" class="form-control mb-2" value="" id="apertment_cars" name="cars" placeholder="No. Of Car Parking">
              <input type="text" class="form-control mb-2" value="" id="apertment_internal" name="internal" placeholder="internal(m2)">
              <label for="prop-price">Price</label>
              <div class="range-slider">
                  <span class="rangeValues">Any</span>
                  <input id="minSlider" class="priceSlider" value="1000" min="1000" max="5000000" step="5000" type="range">
                  <input id="maxSlider" class="priceSlider" value="5000000" min="1000" max="5000000" step="5000" type="range">
                  <input type="hidden" id="minprice" class="minprice" value="" name="a_minprice">
                  <input type="hidden" id="maxprice" class="maxprice" value="" name="a_maxprice">
              </div>
          </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>

<script>



    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );


    function getVals(){
    // Get slider values
    let parent = this.parentNode;
    let sliders = parent.getElementsByClassName("priceSlider");
    let minSliderValue = parseFloat(sliders[0].value);
    let maxSliderValue = parseFloat(sliders[1].value);

    // Format values in thousands or millions
    let formattedMinValue = formatCurrency(minSliderValue);
    let formattedMaxValue = formatCurrency(maxSliderValue);

    // Display formatted values
    let displayElement = parent.querySelector(".rangeValues");
    displayElement.innerHTML = "$" + formattedMinValue + " - $" + formattedMaxValue;

    // Update corresponding input values
    parent.querySelector(".minprice").value = "$" + formattedMinValue;
    parent.querySelector(".maxprice").value = "$" + formattedMaxValue;
}

function formatCurrency(value) {
    if (value >= 1000000) {
        return (value / 1000000).toFixed(1) + "M";
    } else if (value >= 1000) {
        return (value / 1000).toFixed(1) + "K";
    } else {
        return value.toFixed(0);
    }
}

window.onchange = function () {
    // Initialize Sliders
    let sliders = document.getElementsByClassName('priceSlider');
    for (let i = 0; i < sliders.length; i++) {
        sliders[i].oninput = getVals;
    }

    getVals.call(sliders[0]); 
}


let variationCount = 1;
  function addVariation() {
    variationCount++;
    var variationDiv = document.createElement('div');
    variationDiv.className = 'form-group'; // Add the 'form-control' class
    variationDiv.innerHTML = '<label for="apertment_bedrooms">Apertments Configurations </label><input type="text" class="form-control mb-2" id="apertment_bedrooms" name="beds[]" placeholder="No. Of Bedrooms"><input type="text" class="form-control mb-2" id="apertment_bathrooms" name="baths[]" placeholder="No. Of bathrooms"><input type="text" class="form-control mb-2" id="apertment_cars" name="cars[]" placeholder="No. Of Car Parking"><input type="text" class="form-control mb-2" id="apertment_internal" name="internal[]" placeholder="internal(m2)"><label for="prop-price">Price</label><div class="range-slider"><span class="rangeValues">Any</span><input id="minSlider" class="priceSlider" value="1000" min="1000" max="5000000" step="5000" type="range"><input id="maxSlider" class="priceSlider" value="5000000" min="1000" max="5000000" step="5000" type="range"><input type="hidden" id="minprice" class="minprice" value="" name="a_minprice[]"><input type="hidden" id="maxprice" class="maxprice" value="" name="a_maxprice"></div>';
    document.getElementById('variations').appendChild(variationDiv);

    document.getElementById('variationCount').innerText = ` Apertments Configurations: ${variationCount}`;

            // Initialize Sliders
            let sliders = document.getElementsByClassName('priceSlider');
        for (let i = 0; i < sliders.length; i++) {
            sliders[i].oninput = getVals;
        }

        getVals.call(sliders[0]); 

}

</script>
{{-- <script src="{{asset('backend/js/price_range.js')}}"></script> --}}

@endsection
