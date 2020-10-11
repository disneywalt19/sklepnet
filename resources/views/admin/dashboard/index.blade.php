@extends('admin.base')
@section('content2')
<!-- NUMBER OF USERS PIERWSZY -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ilość użytkowników</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count['users'] }}</div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- END OF NUMBER OF USERS PIERWSZY -->
           
            <!-- NUMBER OF PRODUCTS DRUGI-->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">ILOŚĆ PRODUKTÓW</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count['products'] }}</div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- END OF NUMBER OF PRODUCTS DRUGI -->

            <!-- NUMBER OF ORDERS TRZECI -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ilość ZAMÓWIEŃ</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count['orders'] }}</div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- END OF NUMBER OF ORDERS TRZECI -->
@endsection
          

              
              
       