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
                    <div class="col-lg-11">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                          
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
                        <div class="table-responsive">
                       
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Payment Status</th>
                                    <th scope="col">Delivery Status</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                @foreach($order as $order)
                                <tbody>
                                <tr>
                                    <td>{{$order->pro_name}}</td>
                                    <td>{{$order->pro_quantity}}</td>
                                    <td>{{$order->pro_price}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>{{$order->delivery_status}}</td>
                                    <td><img src="products/{{$order->pro_image}}" alt="Product Image" width="70"></td>
                                    <td>
                                        @if($order->delivery_status=='processing')
                                            <a onclick="return confirm('Are You Sure to Cancel This Order?')" href="{{ url('delete_order', $order->id) }}">
                                            <button class="btn btn-danger">Cancel Order</button>
                                             </a>
                                         
                                        @else
                                            
                                            <button class="btn btn-danger disabled">Cancelled</button> 

                                        @endif 
                                                                      
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        
                     
                      </div>
                    </div>
                    <!-- summary -->
                    
                      </div>
                    </div>
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