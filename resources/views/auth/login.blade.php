

<!-- new -->
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FurniShop</title>
  <link rel="stylesheet" href="sintu/login/login.css">

</head>
<body>

<div class="wrapper">
    @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
  <div class="title-text">
    <div class="title login">Login</div>
  </div>
  <div class="form-container">
  <x-validation-errors class="gaza" />
    <div class="form-inner">
      <form method="POST" action="{{ route('login') }}">
                @csrf
        <div class="field">
          <input type="text" placeholder="Email" name="email" :value="old('email')" required>
        </div>
        <div class="field">
            <input type="password" placeholder="Password" name="password" required >
        </div>
        <div class="form-check">
      <input class="form-check-input" type="checkbox" name="remember" id="remember">
      <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
        </div>
        <div class="link">
                <a href="{{url ('forgot-password') }}"> forget-password</a>
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="{{ __('Log in') }}">
        </div>
        <div class="link">
                <p>Don't have an account <a href="{{url('register') }}"> Register</a></p>
        </div>
        
      </form>
    </div>
  </div>
</div>
</body>
</html>
<style>
  .gaza{
    color: red;
    text-align: center;
  }
</style>