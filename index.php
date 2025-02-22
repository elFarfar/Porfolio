<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script
    src="https://kit.fontawesome.com/fce38b1700.js"
    crossorigin="anonymous"></script>
  <title>Welcome-Page</title>
</head>

<body>
  <section id="Welcome">
    <div class="main">
      <video autoplay muted loop id="background-video">
        <source src="videos/Particles.mp4" type="video/mp4" />
        Your browser does not support video.
      </video>
      <div class="main__container">
        <div class="main__content">
          <h1>WELCOME</h1>
          <div class="icons__container">
            <a href="https://github.com/elFarfar">
            <i  class="fa-brands fa-github github-icon"></i>
            </a>
            <a href="https://se.linkedin.com/in/alex-%C3%B6hlin-58476b2ab"> 
            <i class="fa-brands fa-linkedin linkedin-icon"></i>
            </a>
          </div>
        </div>
        <div class="button--function">
          <form id="fadeForm" action="process.php" method="POST">
            <button type="submit" id="fadeButton">ENTER</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Fade Overlay (Hidden Initially) -->
    <div id="fade-overlay"></div>

  </section>

  <script src="script.js"></script>
</body>

</html>