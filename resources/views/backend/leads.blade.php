@extends('backend.layout.app')
@section('content')

<style>
.large-content-cell div {
    max-width: 100%; /* Adjust the maximum width as needed */
    white-space: pre-line;
    word-wrap: break-word;
    text-align: left; /* Adjust alignment as needed */
    font-size: 16px; /* Adjust font size as needed */
    padding: 10px; /* Add padding as needed */
    margin: 0; /* Adjust margins as needed */
}
.filter-btn{
  border: 0px;
  background: #4B49AC;
  color: #fff;
  border-radius: 5px;
  padding-left: 10px;
  padding-right: 10px;
}
.select-style{
  border-radius: 5px;
}
.filter-input{
  border: 1px solid;
    border-radius: 5px;
}

/* POPUP CSS */

.popup-link{
  display:flex;
}


.popup-container {
    visibility: hidden;
    opacity: 0;
    transition: all 0.3s ease-in-out;
    transform: scale(1.3);
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(21, 17, 17, 0.61);
    display: flex;
    align-items: center;
}
.popup-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}
.popup-content p{
    font-size: 17px;
    padding: 10px;
    line-height: 20px;
}
.popup-content a.close{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    background: none;
    padding: 0;
    margin: 0;
    text-decoration:none;
}

.popup-content a.close:hover{
  color:#333;
}

.popup-content span:hover,
.popup-content span:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.popup-container:target{
  visibility: visible;
  opacity: 1;
  transform: scale(1);
}

.popup-container h3{
  margin:10px;
}
/*End popup styles*/

/* Additional styles */
.popup-style-2{
  transform: scale(0.3);
  
}

.popup-style-2:target{
  transform: scale(1);
}

 th{
  text-align: center;
 }
 .new-btn-info{
    color: #fff;
    background-color: #248AFD;
    border-color: #248AFD;
    border: 1px solid transparent;
    padding: 0.875rem 1.5rem;
 }

 .new-btn-light{
  color: #282f3a;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    border: 1px solid transparent;
    padding: 0.875rem 1.5rem;
 }


</style>
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form action="{{route('lead.filter')}}">
              @csrf
            <select name="filter" id="" class="select-style">
              <option value="all">All Leads</option>
              @foreach ($users as $data)
                  <option value="{{$data->id}}">{{$data->name}} Leads</option>
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
          <form action="{{route('lead.filter')}}">
            @csrf
            <input type="text" name="search" class="filter-input" placeholder="Name,Email,Suburb,Phone">
          <button type="submit" class="filter-btn">Search</button>
        </form>
        
        </div>
      </div>
  </div>
  </div>
<div class="row ">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card ">
          <div class="card-body">
            <h4 class="card-title">Leads</h4>
            <p class="card-description">
              All Leads
            </p>

            <div class="table-responsive ">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Suburb</th>
                    <th>Message</th>
                    <th>Assign To</th>
                    <th>Lead Status</th>
                    <th>Comment</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        
                    <tr> 
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}} {{$item->lname}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{$item->subject}}</td>
                      <td class="large-content-cell"> <div>{!!$item->message!!}</div></td>
                      <td>
                        <select name="assign_to" id="assign_to">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}" @if ($user->id == $item->assign_to)
                                    selected
                                @endif>{{$user->name}}</option>
                            @endforeach
                        </select>
                      </td>
                      <td style="display: none"><input type="hidden" name="" id="data-id" value="{{$item->id}}"></td>
                      <td>
                        <select name="lead_status" id="lead_status">
                            <option value="Not Contacted" @if ($item->lead_status == 'Not Contacted') selected @endif >Not Contacted</option>
                            <option value="Contacted" @if ($item->lead_status == 'Contacted') selected @endif >Contacted</option>
                            <option value="Converted to Client" @if ($item->lead_status == 'Converted to Client') selected @endif >Converted to Client</option>
                            <option value="Property Viewing Scheduled"@if ($item->lead_status == 'Property Viewing Scheduled') selected @endif>Property Viewing Scheduled</option>
                            <option value="Closed Sale" @if ($item->lead_status == 'Closed Sale') selected @endif>Closed Sale</option>
                            <option value="Closed Lost" @if ($item->lead_status == 'Closed Lost') selected @endif>Closed Lost</option> 
                            <option value="Qualified Lead" @if ($item->lead_status == 'Qualified Lead') selected @endif>Qualified Lead </option>
                            <option value="Disqualified" @if ($item->lead_status == 'Disqualified') selected @endif>Disqualified </option>
                            <option value="Not Interested" @if ($item->lead_status == 'Not Interested') selected @endif>Not Interested</option>
                            <option value="Follow-Up" @if ($item->lead_status == 'Follow-Up') selected @endif>Follow-Up</option>
                            <option value="On Hold" @if ($item->lead_status == 'On Hold') selected @endif>On Hold</option>
                        <option value="Unresponsive" @if ($item->lead_status == 'Unresponsive') selected @endif>Unresponsive</option>
                        </select>
                      </td>
                      <td>
                        {{-- <a href="#popup1" data-val="{{$item->id}}" class="badge badge-light">Add</a> --}}

                        <button type="button" data-val="{{$item->id}}" class="badge badge-primary" data-toggle="modal" data-target="#myModal">
                          Add
                        </button><button type="button" data-val="{{$item->id}}" class="badge badge-info" data-toggle="modal" data-target="#myModal2">
                          view
                        </button>
                        {{-- <a href="javascript:void(0)" data-val="{{$item->id}}" class="badge badge-info">View</a> --}}
                     </td>
                      <td>
                        <form method="POST" action="{{ route('lead.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="badge badge-danger">Delete </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
              {{$collection->links()}}
            </div>
          </div>
        </div>
      </div>
</div>


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Comment</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
          <form action="{{route('lead.comment')}}" method="post">
            @csrf
            <div class="form-group">
              <input type="hidden" name="lead_id" id="lead-id" value="">
              <textarea name="comment" id="comment" cols="30" rows="10" style="width: 100%;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
        
        {{-- <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
         --}}
      </div>
    </div>
  </div>

    <!-- The Modal @-->
    <div class="modal" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Lead Comments</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body ">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Comment</th>
                    <th>Date & Time</th>
                  </tr>
                </thead>
                <tbody class="comment-body">

                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </div>



<script>

$(document).ready(function () {
    //LEAD STATUS CHANGE

    $('select[name="lead_status"]').on('change', function () {
            var selectedValue = $(this).val();
            var row = $(this).closest('tr');
            var rowId = row.find('input[id="data-id"]').val();

            // Make an AJAX request to update the lead status based on the selected value
            $.ajax({
                url: "{{ route('lead.update') }}", // Replace with your route
                method: "get",
                data: {
                    id: rowId,
                    value: selectedValue
                },
                success: function (response) {
                    // Handle the response and update your page content
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        //ASSIGN TO AN AGENT

        $('select[name="assign_to"]').on('change', function () {
            var selectedValue = $(this).val();
            var row = $(this).closest('tr');
            var rowId = row.find('input[id="data-id"]').val();

            // Make an AJAX request to update the lead status based on the selected value
            $.ajax({
                url: "{{ route('lead.assign') }}", // Replace with your route
                method: "get",
                data: {
                    id: rowId,
                    value: selectedValue
                },
                success: function (response) {
                    // Handle the response and update your page content
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });


        $(document).ready(function() {
            $('button[data-val]').click(function() {

                var dataValue = $(this).data('val');
                $('#lead-id').val(dataValue);
                console.log("data-val attribute value: " + dataValue);
            });
        });

        $(document).ready(function() {
            $('button[data-val]').click(function() {

                var dataValue = $(this).data('val');
                $.ajax({
                    url: "{{ route('lead.comments') }}", 
                    method: "get",
                    data: {
                      leadid: dataValue
                    },
                    success: function (data, textStatus, xhr) {
                      
                      console.log('data  >>>>>>>',data);
                      var x = 1 ;
                      $('.comment-body tr').remove();
                      $.each(data, function (index, item) {
                        $('.comment-body').append('<tr><td>'+ x++ +'</td><td>'+item.comment +'</td><td>'+item.date_time+'</td> </tr>')
                          console.log(item); // You can replace this with your processing logic
                      });
                    },
                    error: function (xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });

                console.log("data-val attribute value: " + dataValue);
            });
        });



    });

</script>

@endsection