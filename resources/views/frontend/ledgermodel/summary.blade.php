
@extends('frontend.ledgermodel.master')
@extends('frontend.ledgermodel.viewer')
@section('content')



               <div class="card-header">
                <h3>ledger summary
                  
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
                        <td> {{$sum2}} </td>
                        

                        

                        
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