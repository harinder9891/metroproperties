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
                <label for="agentname">Assign Role</label>
                <select name="role" id="userrole" class="form-control">
                    <option value="" selected>--Select Role--</option>
                    <option value="superadmin">Super Admin</option>
                    <option value="admin">Admin</option>
                    <option value="agent">Agent</option>
                </select>
            </div>
            @error('role')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="agentname">Name</label>
              <input type="text" class="form-control" id="agentname" name="name" placeholder="Agent Name">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="agentemail">Email</label>
                <input type="text" class="form-control" id="agentemail" name="email" placeholder="Agent Email Address" autocomplete="off">
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="agentphone">Phone</label>
                <input type="text" class="form-control" id="agentphone" name="phone" placeholder="Agent Phone">
            </div>
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="agentpassword">Password</label>
                <input type="password" class="form-control" id="agentpassword" name="password" placeholder="">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection