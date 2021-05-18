
@extends('frontend.ledgermodel.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage ledger</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ledger</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
   <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-desktop"></i>
                  User list
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      
                    </li>
                    <li class="nav-item">
                      
                    </li>
                  </ul>
                </div>
              </div>


               <div class="card-header">
                <h3>ledger list
                  
                  <a class="btn btn-primary float-right" href="{{route('ledgermodel.add')}}"><i class="fa fa-plus-circle"></i>Add ledger </a>
                  
                </h3>
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  
                   <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                      
                        <th>Asset  =</th>
                        <th>Liabilities+owner's equity</th>
                        
                       
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                       
                        
                        <td> {{$sum}} </td>
                        <td> {{$sum}} </td>
                        

                        

                        
                      </tr>
                     
                    </tbody>
                    </table>                  
               
              </div><!-- /.card-body -->


              
            </div>
            <!-- /.card -->

            

            

            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection