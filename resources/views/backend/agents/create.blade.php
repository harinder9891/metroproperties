@extends('backend.layout.app')
@section('content')
    
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Agents</h4>
          <p class="card-description">
           Add Agent
          </p>
          <form class="forms-sample" action="{{route('agent.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="agentname">Name</label>
              <input type="text" class="form-control" id="agentname" name="name" placeholder="Agent Name">
            </div>
            <div class="form-group">
                <label for="agentemail">Email</label>
                <input type="text" class="form-control" id="agentemail" name="email" placeholder="Agent Email Address" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="agentphone">Phone</label>
                <input type="text" class="form-control" id="agentphone" name="phone" placeholder="Agent Phone">
            </div>
            <div class="form-group">
                <label for="agentpassword">Password</label>
                <input type="password" class="form-control" id="agentpassword" name="password" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection