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
          <li id="addToCart"><a href="/">Add to Basket</a></li>
          @if (Route::has('login'))
                
                    @auth
                      <li id = "logOut"><x-app-layout> </x-app-layout></li>
                    @else
                        <li id = "login"><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                          <li id = "signup">  <a href="{{ route('register') }}" >Sign-up</a></li>
                        @endif
                    @endauth
                
            @endif
        </ul>
      </div>