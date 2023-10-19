<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sintu/product.css">
    <script src="js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>All Orders</title>
</head>
<body class="body">
    @include('admin/new.nav')
    <section class="main">
    <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="# " >
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/show_product')}}">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Product</div>
                    </a>
                </li>
                <li>
                    <a href="customer.html">
                        <span class="icon"><i class="ri-user-line"></i></span>
                        <div class="sidebar--item">Customers</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('order')}}" class="active">
                        <span class="icon"><i class="ri-booklet-line"></i></span>
                        <div class="sidebar--item">Orders</div>
                    </a>
                </li>
                <li>
                    <a href="{{url ('/view_catagory')}}">
                        <span class="icon"><i class="ri-handbag-line"></i></span>
                        <div class="sidebar--item">Category</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom--items">
                <li>
                    <a href="#">
                        <span class="icon"><i class="ri-question-line"></i></span>
                        <div class="sidebar--item">Help</div>
                    </a>
                </li>
                <li>
             <div class="li text-center"> 
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-right-from-bracket">Logout</i>
                    </button>
                </form>
                </li>
                
                </div>
            </ul>
            
        </div>

        <main class="table">
            <section class="table_header">
                <h1>All Orders</h1>
            </section>
            @if(session()->has('message'))
                <div class="text-center text-danger">
                    {{session()->get('message')}}
                </div>
            @endif
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                          <th >Name</th>
                          <th >Email</th>
                          <th >Address</th>
                          <th >Phone Number</th>
                          <th >product Name</th>
                          <th >product Image</th>
                          <th >Price</th>
                          <th >Quantity</th>
                          <th >Payment Status</th>
                          <th >Delivery Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                     @foreach($order as $order)
                      <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->pro_name}}</td>
                        <td>
                            <img src="/products/{{$order->pro_image}}" alt="produc image" class="pro-image">
                        </td>
                        <td>{{$order->pro_price}}</td>
                        <td>{{$order->pro_quantity}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                     
                        @if($order->delivery_status=='processing')
                        <td><a class="edit" href="{{url('delivered',$order->id)}}"
                        onclick="return confirm('Are You Sure this Product is Delivered!')">Action</a></td>
                        @else
                        <td>Delivered</td>

                       
                        @endif 
                        </td> 
                        @endforeach
                      
                      </tbody>
                    </table>
                  </table>
            </section>
        </main> 
        
    </section>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/sales.js"></script>
    <script src="assets/js/orders.js"></script>
    <script src="assets/js/products.js"></script>
    <script src="assets/js/customers.js"></script>
    <script src="assets/js/tarsale.js"></script>
</body>
</html>