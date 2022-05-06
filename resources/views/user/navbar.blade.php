<div class="WrapDesktopNavbar">
  <div class="logo"><a href="/">MyCompany</a></div>
  <nav class="desktopNavBar">
    <ul>
      <li><a href="/">Home</a></li>
      <!-- <li><a href="#our-Foods">Our-Foods</a></li> -->
      <li><a href="menu">Menu</a></li>
      <li><a href="contact">Contact-Us</a></li>
      <li><a href="about">About</a></li>
    </ul>
  </nav>
  <div class="desktopNavButtons">
    <ul>
      <!-- <li id="login"><a href="/">Login</a></li>
          <li id="signup"><a href="/">Sign-up</a></li> -->
      <!-- If function is connected to laravel/Jetstream's login function and is implemented here, the if function determines waht button to show depending on whether a user is logged in or not. -->
      @if (Route::has('login')) @auth
      <li id="addToCart"><a href="checkout">Basket()</a></li>
      <li id="logOut"><x-app-layout> </x-app-layout></li>
      @else
      <li id="login"><a href="{{ route('login') }}">Log in</a></li>

      @if (Route::has('register'))
      <li id="signup"><a href="{{ route('register') }}">Sign-up</a></li>
      @endif @endauth @endif
    </ul>
  </div>
</div>

<nav class="mobileMenu">
  <a href="/" class="mobileLogo">MyFoodStore</a>
  <ul class="mobileMenuWrapper">
    <li class="navLinks">
      <a href="/" class="mobileMenu-Links">Home</a>
      <a href="/menu" class="mobileMenu-Links">Menu</a>
      <a href="/contact" class="mobileMenu-Links">Contact-Us</a>
      <a href="/about" class="mobileMenu-Links">About</a>

      @if (Route::has('login')) @auth
      <a href="" class="mobileMenu-Links">Basket()</a>
      <a href="#" class="mobileMenu-Links"><x-app-layout> </x-app-layout></a>

      @else
      <a href="{{ route('login') }}" class="mobileMenu-Links">Log-In</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="mobileMenu-Links">Sign-Up</a>
      @endif @endauth @endif
    </li>
  </ul>
  <!-- Simple and standard Hamburger Menu setup -->
  <div class="hamburger">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
</nav>

<script src="sscripts.js"></script>
