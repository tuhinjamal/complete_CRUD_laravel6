

 <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          
          <li class="nav-item has-treeview ">
            
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                ledger Management
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('ledgermodel.viewer')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> view ledger </p>
                </a>
              </li>

              <li class="nav-item">
                <a href=" {{route('ledgermodel.add')}} " class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add ledger</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" {{route('ledgermodel.summary')}} " class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summary</p>
                </a>
              </li>
              
        </ul>
        </li>
      </ul>


</nav>
      <!-- /.sidebar-menu -->