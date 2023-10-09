<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="beki/Cart/stylecart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
   
        
        <!-- Tailwind CSS CDN -->
         <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">

        <!-- Fontawesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="{{asset('beki/Landing/stylehomee.css')}}">


        <script src="https://kit.fontawesome.com/0998aad7b4.js" crossorigin="anonymous"></script>

</head>
<body>
  <!-- header -->
  @include('home.header');
    <section class="h-100 h-custom" style="background-color:#0F2547;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Orders</h1>
                          
                        </div>
                        @if(session()->has('message'))
                            <div class="text-center text-danger">
                                {{session()->get('message')}}
                            </div>
                        @endif
                        @if(session()->has('mess'))
                            <div class="text-center text-success">
                                {{session()->get('mess')}}
                            </div>
                        @endif
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class=" col-sm-4 col-md-1 col-lg-3 col-xl-2">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: 10px;">Image</h6>
                          </div>
                          <div class=" col-sm-4 col-md-1 col-lg-3 col-xl-1">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -80px;">Product <br>Name</br></h6>
                          </div>
                          <div class=" col-sm-4 col-md-1 col-lg-3 col-xl-1">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -30px;">Quantity</h6>
                          </div>
                          <div class=" col-sm-4 col-md-1 col-lg-3 col-xl-1">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -30px;">Payment Status</h6>
                          </div>
                          <div class=" col-sm-4 col-md-1 col-lg-3 col-xl-2">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -30px;">Order Status</h6>
                          </div>
                          <div class=" col-sm-4 col-md-1 col-lg-3 col-xl-2 ">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -50px;">Total Price
                            (quantity*price)</h6>
                          </div>
                          <div class=" col-sm-4 col-md-1 col-lg-3 col-xl-2">
                            <h6 class="text-muted" style="margin-bottom: -20px; margin-left: -30px;"></h6>
                          </div>
                          
                        </div>
                        <hr class="my-4">
                        <?php  
                          $total_amount=0
                        ?>
                        <?php $total_product= 0 ?>
                        @foreach($order as $order)
                        <div>
                        <div class="row mb-4 d-flex justify-content-between align-items-start">
                        <div class="col-md-2 col-lg-2 col-xl-1">
                            <img src="products/{{$order->pro_image}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-12 col-sm-4 col-md-1 col-lg-3 col-xl-1">
                            
                            <h6 class="text-black mb-0">{{$order->pro_name}}</h6>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-1 ">
                            

                            <h6 class="text-black mb-0">{{$order->pro_quantity}}</h6>

                           
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 ">
                            

                            <h6 class="text-black mb-0">{{$order->payment_status}}</h6>

                           
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 ">
                            

                            <h6 class="text-black mb-0">{{$order->delivery_status}}</h6>

                           
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 ">

                          <?php 
                            $total_product=$order->pro_quantity * $order->pro_price;
                            ?>

                            <h6 class="mb-0">ETB {{$total_product}} </h6>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 ">

                            <?php
                            if ($order->delivery_status == 'delivered') {
                                echo '<div class="col-12">
                                        <button type="button" class="btn btn-success" disabled>Delivered</button>
                                    </div>';
                            } else {
                                echo '<div class="col-12">
                                        <a href="' . url('delete_order', $order->id) . '" class="text-muted delete-row" onclick="return confirm(\'Are You Sure to Cancel This Order\')">
                                        <button type="button" class="btn btn-danger" data-mdb-ripple-color="dark">Cancel Order</button>
                                        </a>
                                    </div>';
                            }
                        ?>
                        </div>
                      </div>
                        <hr class="my-4">
                          
                        </div>
                        <?php $total_amount = $total_amount + $total_product ?>
                        @endforeach
                        
          
      
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="{{url('link')}}" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                        </div>
                      </div>
                    </div>
                    <!-- summary -->
                    {{-- <div class="col-lg-4 bg-grey">
                      <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Order Summary</h3>
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-4">
                         <h5>Total Amount:</h5>
                          <h5>ETB {{$total_amount}}</h5>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <h5>Payment Status:</h5>
                            <h5>{{$order->payment_status}}</h5>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <h5>Order Status:</h5>
                            <h5>{{$order->delivery_status}}</h5>
                        </div>
      
                        <hr class="my-4">
       
                        <a href="{{url('delete_order',$order->id)}}" class="text-muted delete-row" onclick=" return confirm('Are You Sure to Cancel This Order')"> <button type="button" class="btn btn-dark btn-block btn-lg"
                          data-mdb-ripple-color="dark">Cancel Order</button></a>                       
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- footer -->

</body>
</html>