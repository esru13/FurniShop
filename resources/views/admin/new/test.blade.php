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
    <a href="{{url('view_catagory')}}" class="back_btn" >BACK</a>
<div class="wrapper">

  <div class="title-text">
    <div class="title login">Edit Catagory</div>
  </div>
  <div class="field">
  @if(session()->has('message'))
                <div class="text-success text-center">
                    {{session()->get('message')}}
                </div>
         @endif

  <div class="form-container">
    <div class="form-inner">
      <form action="{{ url('/update_catagory',$data->id)}}" method="POST" enctype="multipart/form-data" class="signup">
        @csrf
        
        <div class="field">
            <label for="Product-Name">Product Catagory</label>
          <input type="text" placeholder="product name" name="pcatagory" value="{{$data->catagories_title}}"required>
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
