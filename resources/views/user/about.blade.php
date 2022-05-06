<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />

    <title>About</title>
  </head>
  <body class="aboutBackground">
    <header>
      @include('user.navbar')
    </header>
    <h1>For all your questions!</h1>
    <section class="allQuestions">
      <div class="topquestions">
        <div class="openquestions">
          <h3>Where did we start?</h3>
          <svg width="12" height="8" viewBox="0 0 40 23">
            <path d="M1 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
          </svg>
        </div>
        <div class="answer">
          <p>
            We started in 2022!
          </p>
        </div>
      </div>

      <div class="topquestions">
        <div class="openquestions">
          <h3>Whats the best burger?</h3>
          <svg width="12" height="8" viewBox="0 0 40 23">
            <path d="M1 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
          </svg>
        </div>
        <div class="answer">
          <p>
            A CheeseBurger
          </p>
        </div>
      </div>

      <div class="topquestions">
        <div class="openquestions">
          <h3>When will you open more stores?</h3>
          <svg width="12" height="8" viewBox="0 0 40 23">
            <path d="M1 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
          </svg>
        </div>
        <div class="answer">
          <p>
            We are hoping to open more stores in the future!
          </p>
        </div>
      </div>

      <div class="topquestions">
        <div class="openquestions">
          <h3>Pineapple on pizza?</h3>
          <svg width="12" height="8" viewBox="0 0 40 23">
            <path d="M1 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
          </svg>
        </div>
        <div class="answer">
          <p>
            Pineapple on pizza sounds good!
          </p>
        </div>
      </div>

      <div class="topquestions">
        <div class="openquestions">
          <h3>Will you start selling curries?</h3>
          <svg width="12" height="8" viewBox="0 0 40 23">
            <path d="M1 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
          </svg>
        </div>
        <div class="answer">
          <p>
            Maybe one day in the future!
          </p>
        </div>
      </div>
    </section>
    <script src="ssscripts.js"></script>
  </body>
</html>
