<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sintu/product.css">
    <script src="js.js"></script>
    <script src="https://kit.fontawesome.com/0998aad7b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>product Description</title>
</head>
<body class="body">
    @include('admin/new.nav')
    <section class="main">
    <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="# ">
                        <span class="icon"><i class="ri-bar-chart-line"></i></span>
                        <div class="sidebar--item">Overview</div>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/show_product')}}" class="active">
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
                    <a href="{{ url('order')}}">
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
        <a href="{{ url('page_product')}}" class="add_btn" >ADD PRODUCT</a>
        <main class="table">
            <section class="table_header">
                <h1>Our Products</h1>
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
                          <th >id</th>
                          <th >Product Name</th>
                          <th >Catagory</th>
                          <th >Description</th>
                          <th >Price</th>
                          <th >Product Image</th>
                          <th >Entry Date</th>
                          <th >Edit</th>
                          <th >Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($product as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->pro_name}}</td>
                        <td>{{$product->pro_catagory}}</td>
                        <td>{{$product->pro_desc}}</td>
                        <td>{{$product->pro_price}}</td>
                        <td>
                            <img src="/products/{{$product->pro_image}}" alt="produc image" class="pro-image">
                        </td>
                        <td>{{$product->created_at}}</td>
                        <td><a class="edit" href="{{url ('/edit_product',$product->id)}}">Edit</a></td> 
                        <td> <a class="delete" href="{{url('/delete_product',$product->id)}}" 
                        onclick=" return confirm('Are You Sure to Delete This Product')">Delete</a>
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