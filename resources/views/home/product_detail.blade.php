<!DOCTYPE html> 
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{asset('sintu/product-detail.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Tailwind CSS CDN -->
         <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">

        <!-- Fontawesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="{{asset('beki/Landing/stylehomee.css')}}">
        
          </head>

    <body >

        
            <!-- header section strats -->
             @include('home.header');
            <!-- end header section -->

   <!---------------single product details---------------->
<div class=" container">

    <div class="box">
    <h4>Product Detail</h4>
        @if(session()->has('message'))
    <div class="message">
            {{session()->get('message')}}
    </div>
         @endif
        <img src="{{ asset('products/'.$product->pro_image) }}" id="productimg">
         <div class="text">
         <form action="{{url('add_cart',$product->id)}}" method="POST">
                @csrf
            <h4>Product Name: {{$product->pro_name}}</h4>
            <h4>Single Product Price: {{$product->pro_price}} ETB</h4>
            
            <h4>Quantity:<input type="number" value="{{$product->pro_quantity}}" min="1" name="quantity">
            </h4>
            <h4>Product Description: {{$product->pro_desc}}</h4>
         
            <!-- add to cart -->
            
            <input type="submit" value="Add To cart" class="btn">

            </form>

        </div>
        </a>
    </div>
</div>
    <!-- Footer -->
    @include('home.footer')  
</body>
</html>