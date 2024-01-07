<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @if (Auth::user()->role =='superadmin')
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Property Types</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('property-type/create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('property-type.index')}}">List</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Property Features</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('property-feature/create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('property-feature.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Properties</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('property.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('property.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tags" aria-expanded="false" aria-controls="tags">
          <i class="icon-contract menu-icon"></i>
          <span class="menu-title">Location Tags</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tags">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('tag.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('tag.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#leads" aria-expanded="false" aria-controls="leads">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Leads</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="leads">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('lead.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('lead.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Agents</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('agent.create')}}"> Create </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('agent.index')}}"> List </a></li>
          </ul>
        </div>
      </li>
      @elseif(Auth::user()->role =='admin')
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Property Types</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('property-type/create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('property-type.index')}}">List</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Property Features</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('property-feature/create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('property-feature.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Properties</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('property.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('property.index')}}">List</a></li>
          </ul>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tags" aria-expanded="false" aria-controls="tags">
          <i class="icon-contract menu-icon"></i>
          <span class="menu-title">Location Tags</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tags">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('tag.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('tag.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#leads" aria-expanded="false" aria-controls="leads">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Leads</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="leads">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('lead.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('lead.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Properties</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('property.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('property.index')}}">List</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('lead.index')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Leads</span>
        </a>
      </li>
      @endif
    </ul>
  </nav>
  