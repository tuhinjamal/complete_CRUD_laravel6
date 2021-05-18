

@extends('frontend.ledgermodel.master')
@section('content')



          
@extends('frontend.ledgermodel.viewer-ledgermoder')
@yield('content')
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


              
    
            <!-- /.card -->

            

            

            
      

  <!-- /.content-wrapper -->

  @endsection