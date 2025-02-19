<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100..900;1,100..900&family=PT+Serif+Caption:ital@0;1&display=swap"
    rel="stylesheet" />
  <script
    src="https://kit.fontawesome.com/fce38b1700.js"
    crossorigin="anonymous"></script>
  <title>Welcome-Page</title>
</head>

<body>
  <section id="Welcome">
    <div class="flip-container">
      <video autoplay muted loop id="background-video" width="700">
        <source src="videos/Particles.mp4" type="video/mp4" />
        Your browser does not support video.
      </video>
      <div class="front__page">
        <div class="front__container">
          <div class="front__content">
            <h1>WELCOME TO ALEX'S PORTFOLIO</h1>
            <div class="icons__container">
              <i class="fa-brands fa-github github-icon" style="color: pink"></i>
              <i class="fa-brands fa-linkedin linkedin-icon" style="color: blue"></i>
            </div>
          </div>

          <div class="button--function">
            <buttononclick="window.location.href='home.php'" id="flipButton">WELCOME</button>
          </div>
        </div>
      </div>
  </section>

  <script src="script.js"></script>
</body>

</html>