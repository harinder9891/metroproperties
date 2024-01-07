@extends('backend.layout.app')
@section('content')
    <style>
              [role="textbox"] {
        height: 25vh;
      }
    </style>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Leads</h4>
          <p class="card-description">
           Create New Lead
          </p>
          <form class="forms-sample" action="{{route('lead.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">First Name</label>
              <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername2">Last Name</label>
                <input type="text" class="form-control" id="exampleInputUsername2" name="lname" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername3">Email</label>
                <input type="text" class="form-control" id="exampleInputUsername3" name="email" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername4">Phone</label>
                <input type="text" class="form-control" id="exampleInputUsername4" name="phone" placeholder="Enter Phone Number">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername5">Suburb</label>
                <input type="text" class="form-control" id="exampleInputUsername5" name="subject" placeholder="Enter Suburb">
              </div>
              <div class="form-group">
                <label for="prop-description">Message</label>
                <textarea id="editor" name="message" style="width:100%;"></textarea>
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

</script>
@endsection