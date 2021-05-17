
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
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
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
                        <th>SL.</th>
                        <th>cash</th>
                        <th>receivable</th>
                        <th>equipment</th>
                        <th>note_payble</th>
                        <th>account_payble</th>
                        <th>capital</th>
                        <th>drawing</th>
                        <th>revenue</th>
                        <th>expense</th>
                        
                       
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($alldata as $key =>$ledger)
                      <tr>
                        <td>{{$key+1}}</td>
                        
                        <td> {{$ledger->cash}} </td>
                        <td> {{$ledger->receivable}} </td>
                        <td> {{$ledger->equipment}} </td>
                        <td> {{$ledger->note_payble}} </td>
                        <td> {{$ledger->account_payble}} </td>
                        <td> {{$ledger->capital}} </td>
                        <td> {{$ledger->drawing}} </td>
                        <td> {{$ledger->revenue}} </td>
                        

                        <td>
                          
                          <a title="edit" class="btn btn-primary" href="{{route('ledgermodel.edit',$ledger->id)}} "><i class="fa fa-edit"></i></a>
                          <a title="delete" id="delete" class="btn btn-danger" href=" {{route('ledgermodel.delete',$ledger->id)}} "><i class="fa fa-trash"></i></a>

                        </td>
                      </tr>
                      @endforeach
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