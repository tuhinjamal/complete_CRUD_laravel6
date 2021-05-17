
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
                <h3>Add ledger
                
                	<a class="btn btn-primary float-right" href="  "><i class="fa fa-user-circle"></i>  ledger list</a>

                </h3>
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{ route('ledgermodel.store') }}" id="myform" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
							             <div class="form-group col-md-6">

                        		<label for="cash">cash</label>
                        		<input type="text" name="cash" class="form-control" id="cash">

                        	 </div>
                           <div class="form-group col-md-6">

                            <label for="receivable">receivable</label>
                            <input type="text" name="receivable" class="form-control" id="receivable">

                           </div>
                           <div class="form-group col-md-6">

                            <label for="equipment">equipment</label>
                            <input type="text" name="equipment" class="form-control" id="equipment">

                           </div>
                           <div class="form-group col-md-6">

                            <label for="note_payble">note payble</label>
                            <input type="text" name="note_payble" class="form-control" id="note_payble">

                           </div>
                           <div class="form-group col-md-6">

                            <label for="account_payble">account payble</label>
                            <input type="text" name="account_payble" class="form-control" id="account_payble">

                           </div>
                           <div class="form-group col-md-6">

                            <label for="capital">capital</label>
                            <input type="text" name="capital" class="form-control" id="capital">

                           </div>
                           <div class="form-group col-md-6">

                            <label for="drawing">drawing</label>
                            <input type="text" name="drawing" class="form-control" id="drawing">

                           </div>
                           <div class="form-group col-md-6">

                            <label for="revenue">revenue</label>
                            <input type="text" name="revenue" class="form-control" id="revenue">

                           </div>
                           <div class="form-group col-md-6">

                            <label for="expense">expense</label>
                            <input type="text" name="expense" class="form-control" id="expense">

                           </div>




                            <div class="form-group col-md-6" style="padding-top: 30px;">

	                        		<input  type="submit" value="submit" class="btn btn-primary">
                                  
	                        </div>
	                            

                            

                               </div>
                            </form>
                          </div>
                        </div>
                    </div>
                  </section>
                </div>
              </div>
          </section>
        </div>
  <!-- /.content-wrapper -->
		

  @endsection