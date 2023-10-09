<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="sintu/addproduct.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <a href="{{ url('show_product')}}" class="back_btn" >BACK</a>
<div class="wrapper">
          @if(session()->has('message'))
                <div class="text-center text-success">
                    {{session()->get('message')}}
                </div>
            @endif
          
  <div class="title-text">
    <div class="title login">Add Product</div>
  </div>
  <div class="form-container">
    <div class="form-inner">
      <form action="{{ url('/add_product')}}" method="POST" enctype="multipart/form-data" class="signup">
        @csrf
        <div class="field">
          <input type="text" placeholder="product name" name="name"required>
        </div>
        <div class="field">
        <label for="product-category">Product Category</label>
            <select id="name" name="pro_catagory">
                    <option value="">Select a Catagory</option>
                    
                    @foreach($pro_catagory as $pro_catagory)
                    
                    <option value="{{$pro_catagory->catagories_title}}">{{$pro_catagory->catagories_title}}</option>
                    
                    @endforeach
                </select>
          </div>
          <div class="field">
            <input type="text" placeholder="Description" name="desc" required>
          </div>
          <div class="field">
              <input type="number" placeholder="quantity" name="quantity" required>
            </div>
          <div class="field">
            <input type="number" placeholder="Price" name="price" required>
          </div>
          
            <div class="field">
              <input type="file" placeholder="image" name="pro_image"accept="image/*" required>
            </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
