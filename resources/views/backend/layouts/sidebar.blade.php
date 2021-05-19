@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- @if(Auth::user()->usertype=='Admin')-->
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item has-treeview ">
            
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('view_user')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User list</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('add_user')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add user</p>
                </a>
              </li>
              <!--@endif-->
        </ul>


      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}} ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active':''}} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Password
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profiles.password.view')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change password</p>
                </a>
              </li>
          </ul>
        </ul>
          </ul>
        </ul>
        
       <!-- @if(Auth::user()->usertype=='Admin')
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Slider
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sliders.view')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p>
                </a>
              </li>
          </ul>
        </ul>
        @endif
    -->

   

        

      </ul>
      </nav>
      <!-- /.sidebar-menu -->