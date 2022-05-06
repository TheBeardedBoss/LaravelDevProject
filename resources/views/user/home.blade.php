<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
  </head>
  <body class="homePageStyle">
    <!-- Creating the desktop Nav -->
    <header>
      @include('user.navbar')
      <!-- Creating the mobile nav! after the desktop nav / I believe this is old code -->
      <div id="mobileNav">
        <div class="bar"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile">
          <li><a href="/">Home</a></li>
          <li><a href="/">Our-Foods</a></li>
          <li><a href="/">Menu</a></li>
          <li><a href="/">Contact-Us</a></li>
          <li><a href="/">About</a></li>
          <li id="login"><a href="/">Login</a></li>
          <li id="signup"><a href="/">Sign-up</a></li>
        </ul>
      </div>
    </header>

    <!-- Main Area Code! -->
    <main id="bigText">
      <h1>My Food Store!</h1>
      <p>Here you can find the tastiest foods!.</p>
      <a href="/menu" class="button">Start Exploring!</a>
    </main>
    <script>
      src = "scripts.js";
    </script>
  </body>
</html>
