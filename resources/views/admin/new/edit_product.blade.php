<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <base href="/public/" >
  <link rel="stylesheet" href="/editproduct.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
    <a href="{{ url('show_product')}}" class="back_btn" >BACK</a>
<div class="wrapper">
         
          
  <div class="title-text">
    <div class="title login">Edit Product</div>
  </div>
  <div class="field">
  @if(session()->has('message'))
                <div class="text-success text-center">
                    {{session()->get('message')}}
                </div>
         @endif
  </div>
  <div class="form-container">
    <div class="form-inner">
      <form action="{{ url('/update_product',$product->id)}}" method="POST" enctype="multipart/form-data" class="signup">
        @csrf
        
        <div class="field">
            <label for="Product-Name">Product Name</label>
          <input type="text" placeholder="product name" name="pname" value="{{$product->pro_name}}" required>
        </div>
        <div class="field">
                <label for="product-category">Product Category</label>
                <select id="product-category" name="pcatagory">

                    <option value="{{$product->pro_catagory}}" selected="">{{$product->pro_catagory}}</option>

                    @foreach($catagory as $catagory)
                    
                    <option value="{{$catagory->catagories_title}}">{{$catagory->catagories_title}}</option>
            
                    @endforeach

                </select>
        </div>
        <div class="field">
          <label for="product-Description">Product Description</label>
            <input type="text" placeholder="Description" name="pdesc" value="{{$product->pro_desc}}"required>
          </div>
        
          <div class="field">
             <label for="product-category">Product Quantity</label>
              <input type="number" placeholder="quantity" name="pquantity" value="{{$product->pro_quantity}}" required>
            </div>

          <div class="field">
            <label for="product-price">Product Price</label>
            <input type="number" placeholder="Price" name="pprice" value="{{$product->pro_price}}" required>
          </div>
          
          <div class="field">
            <label for="product-image">Old Image</label>
              <img width="70" height="70" src="/products/{{$product->pro_image}}" alt="product-image">
          </div> 
          <div class="field">
          <label for="product-image">New Image</label>
            <input type="file" name="pro_image" accept="image/*" required>
          </div>
        
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Update">
        </div>
        
      </form>
    </div>
  </div>
</div>
</body>
</html>
