
<!-- new -->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="sintu/login/login.css">
  
</head>
<body>

<div class="wrapper">
  <div class="title-text">
    <div class="title login">Register</div>
  </div>
  <div class="form-container">
  <x-validation-errors class="gaz" />
    <div class="form-inner">
    
    <form method="POST" action="{{ route('register') }}"class="signup">
        @csrf
        <div class="field">
            <input type="text" placeholder="Name" name="name" :value="old('name')" required>
          </div>
        <div class="field">
          <input type="text" placeholder="Email" name="email" :value="old('email')" required>
        </div>
        <div class="field">
            <input type="text" placeholder="Phone number" name="phone" :value="old('phone')" required>
          </div>
        <div class="field">
            <input type="text" placeholder="Address" name="address" :value="old('email')"  required>
        </div>
        <div class="field">
            <input type="password" placeholder="Password" name="password" required autocomplete="new-password" >
          </div>
          <div class="field">
            <input type="password" placeholder="Confirm Password"  name="password_confirmation" required autocomplete="new-password" >
          </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value=" {{ __('Register') }}">
        </div>
        <div class="link">
                <p>Already have an account <a href="{{route ('login')}}">Login</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
<style>
    .gaz{
        color: red;
        text-align: center;
    }
</style>
</body>
</html>
