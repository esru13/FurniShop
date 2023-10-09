<header class="fixed top-0 left-0 w-full z-50 bg-gray-900 text-white py-4 px-8">
    <div class="flex justify-between items-center">
      <div class="text-3xl font-semibold">Furnishop</div>
      <nav>
        <ul class="hidden md:flex space-x-4">
          <li><a href="{{url('index')}}" class="hover:text-gray-400 text-2xl">Home</a></li>
          <li><a href="{{url('link')}}" class="hover:text-gray-400 text-2xl">Products</a></li>
          <li><a href="{{url('contact')}}" class="hover:text-gray-400 text-2xl">Contact</a></li>
          <li><a href="{{url('about')}}" class="hover:text-gray-400 text-2xl">About</a></li>
          <li><a href="{{url('/show_order')}}" class="hover:text-gray-400 text-2xl">Orders</a></li>
          <li><a href="{{url('/show_cart')}}" class="hover:text-gray-400 text-3xl"><i class='bx bxs-cart'></i></a></li>
          <li class="relative">
            <a href="#" class="hover:text-gray-400 text-3xl"><i class='bx bxs-user'></i></a>
            <ul class="absolute top-full right-0 hidden bg-gray-900 text-white py-4 px-6 space-y-2">
            @if (Route::has('login'))
              @auth
              <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-right-from-bracket">Logout</i>
                    </button>
                </form>
                @else
              <li><a href="{{ route('register') }}" class="block hover:text-gray-400 text-xl">Register</a></li>
              <li><a href="{{ route('login') }}" class="block hover:text-gray-400 text-xl">Login</a></li>
              @endauth
              @endif
            </ul>
          </li>
        </ul>
        <button id="menu-toggle" class="md:hidden text-2xl focus:outline-none">
          <i class="bx bx-menu"></i>
        </button>
      </nav>
    
    </div>
    <ul id="mobile-menu" class="hidden md:hidden bg-gray-900 text-white py-4 px-6 space-y-2">
      <li><a href="{{url('index')}}" class="block hover:text-gray-400 text-xl">Home</a></li>
      <li><a href="{{url('link')}}" class="block hover:text-gray-400 text-xl">Products</a></li>
      <li><a href="#" class="block hover:text-gray-400 text-xl">Contact</a></li>
      <li><a href="#" class="block hover:text-gray-400 text-xl">About</a></li>
      <li><a href="{{url('/show_cart')}}" class="block hover:text-gray-400 text-2xl"><i class='bx bxs-cart'></i></a></li>
      <li class="relative">
        <a href="#" class="block hover:text-gray-400 text-2xl"><i class='bx bxs-user'></i></a>
        <ul class="absolute top-full right-0 hidden bg-gray-900 text-white py-4 px-6 space-y-2">
          <li><a href="{{ route('register') }}" class="block hover:text-gray-400 text-xl">Register</a></li>
          <li><a href="{{ route('login') }}" class="block hover:text-gray-400 text-xl">Login</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
      var mobileMenu = document.getElementById("mobile-menu");
      if (mobileMenu.classList.contains("hidden")) {
        mobileMenu.classList.remove("hidden");
      } else {
        mobileMenu.classList.add("hidden");
      }
    });
  
    // Show/hide dropdown on user icon click
    document.querySelectorAll(".relative").forEach(function(item) {
      item.addEventListener("click", function(e) {
        e.stopPropagation();
        var dropdown = this.querySelector("ul");
        if (dropdown.classList.contains("hidden")) {
          dropdown.classList.remove("hidden");
        } else {
          dropdown.classList.add("hidden");
        }
      });
    });
  
    // Hide dropdown on outside click
    window.addEventListener("click", function(e) {
      document.querySelectorAll(".relative ul").forEach(function(dropdown) {
        if (!dropdown.classList.contains("hidden")) {
          dropdown.classList.add("hidden");
        }
      });
    });
  </script>
  
  <style>
    /* Adjust the positioning of the dropdown */
    .relative ul.absolute.right-0 {
      left: auto;
      right: 0;
    }
  </style>
  
  <style>
    /* Adjust the positioning of the dropdown */
    .relative ul.absolute.right-0 {
      left: auto;
      right: 0;
    }
  </style>