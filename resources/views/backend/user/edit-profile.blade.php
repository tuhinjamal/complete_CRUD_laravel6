
@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
                <h3>Edit Profile

                	<a class="btn btn-primary float-right" href="{{route('profiles.view')}}"><i class="fa fa-user-circle"></i>  view profile</a>

                </h3>
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{ route('profiles.update') }}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                        <div class="form-row">
	                        <div class="form-group col-md-4">

	                        		<label for="name" >name</label>
	                        		<input id="name" type="text" name="name" value=" {{ $editData->name}}" class="form-control ">
	                        		<font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

	                        </div>

	                        <div class="form-group col-md-4">

	                        		<label for="email" >email</label>
	                        		<input id="email" type="email" name="email" value=" {{ $editData->email}}" class="form-control">
	                        		<font style="color: red"> {{($errors->has('email') )?($errors->first('email')):''}}</font>

	                        </div>
	                        <div class="form-group col-md-4">

	                        		<label for="mobile" >mobile no</label>
	                        		<input id="mobile" type="text" name="mobile" value=" {{ $editData->mobile}}" class="form-control">
	                        		<font style="color: red"> {{($errors->has('mobile') )?($errors->first('mobile')):''}}</font>

	                        </div>

	                           <div class="form-group col-md-4">

	                        		<label for="address" >Address</label>
	                        		<input id="address" type="text" name="address" value=" {{ $editData->address}}" class="form-control">
	                        		<font style="color: red"> {{($errors->has('address') )?($errors->first('address')):''}}</font>

	                        </div>


                        
                        	<div class="form-group col-md-4">
                        		<label for="gender" >Gender</label>
                            	<select name="gender"  id="gender" class="form-control ">
                            		
                            	<option value=""></option>
                            	<option value="male" {{($editData->gender=="male")?"selected":""}} >male</option>
                            	<option value="female"  {{($editData->gender=="female")?"selected":""}}>female</option>

                            	</select>
                        	</div>

                        	<div class="form-group col-md-4">

                        		<label for="image">Image</label>
                        		<input type="file" name="image" class="form-control" id="image">

                        	</div>
                        	<div class="form-group col-md-2">

                        		<img id="showimage" src="{{(!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_image.png')}}" style="width: 150px;height: 160px; border:1px solid #000;">

                        	</div>
	                        
                            <div class="form-group col-md-6" style="padding-top: 30px;">

	                        		<input  type="submit" value="update" class="btn btn-primary">
                                  
	                        </div>
	                            

                            

                         </div>
                            
                   
                       		
                    	</form>
                   
                   	                  
               
             		 </div>
                </div>


                       <!-- /.card-body -->
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