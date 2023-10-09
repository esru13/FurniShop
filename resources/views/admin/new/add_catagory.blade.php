<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="sintu/addproduct.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <a href="{{ url ('view_catagory')}}" class="back_btn" >BACK</a>
<div class="wrapper">
  <div class="title-text">
    <div class="title login">Add category</div>
  </div>
  <div class="field">
            @if(session()->has('message'))
                <div class="text-center text-success">
                    {{session()->get('message')}}
                </div>
            @endif
            
  <div class="form-container">
    <div class="form-inner">
      <form action="{{ url('/add_catagory')}}" method="POST" class="signup">
            @csrf
            <div class="field">
                <input type="text" placeholder="Catagory Name" name="catagories"  required>
            </div>
            <div class="field"></div>
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