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
  <title>Homepage</title>
</head>

<body>
<!--NAV SECTION-->
<nav class="navbar">
  <div class="nav-container">
    <div class="nav-content">

      <i class="contact">CONTACTS</i>
      <a href="#project" class="no-underline">
        <i class="project">PROJECTS</i>
      </a>
    </div>
  </div>
</nav>
<!--HERO SECTION-->
  <section id="hello" class="section hero">
    <div class="container">
      <div class="hero-flex">
        <div class="hello-flex">
          <h1 class="heading-2">
            Hello.
            <br>
          </h1>
          <div class="my-name">
            <h1 class="heading-3">I'm</h1>
            <h1 class="heading-4">Alex.</h1>
          </div>
          <p class="paragraph">Fullstack Open Source Developer</p> 
          <p class="paragraph-2"> I am currently studying the Fullstack Open Source program to become a full-time developer.<br>
          During my studies, I have developed the following <strong>skills: </strong></p>
          <div class="hero-icons">
            <i class="fa-brands fa-js js-icon"></i>
            <i class="fa-brands fa-php php-icon"></i>
            <i class="fa-brands fa-html5 html5-icon"></i>
            <i class="fa-brands fa-sass sass-icon"></i>
            <i class="fa-brands fa-css css-icon"></i>
          </div>
        </div>
      </div>
      <div class="hero-image">
        <div class="myimage">
          <img src="/img/profile-pic.png" alt class="image-1" id="profilePhoto">
        </div>
      </div>
    </div>
  </section>
    <!--PROJECT SECTION-->
    <section id="project">
      <div class="project-container">
        <div class="projectwrapper">
          <h1 class="heading-5">Projects.</h1>
          <p class="paragraph-3">Check out the projects i have done</p>
          <p class="paragraph-4">Get to know me better</p>
        </div>
      </div>
      <div class="timeline">
  <div class="timeline-item left">
    <div class="timeline-content">
      <div class="timeline-bar"></div>
      <div class="timeline-text">
        <h1 class="heading-6" id="project-1">Movies to Watch</h1>
        <p class="paragraph-5">
          Movies To Watch is a simple yet effective tool 
          <br>designed for film enthusiasts who want to keep
           <br>track of the movies and series they plan to watch.
          </p>
        <div class="button-project">
          <button type="submit">SEE THIS PROJECT</button>
        </div>
      </div>
      <div class="project-1--image">
        <img src="/img/Movies to watch-1.png" alt class="image-2">
      </div>
    </div>
  </div>
</div>
    </section>


    <script src="script.js"></script>
</body>

</html>