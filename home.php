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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script
    src="https://kit.fontawesome.com/fce38b1700.js"
    crossorigin="anonymous"></script>
  <title>Homepage</title>
</head>

<body>
  <!--NAV SECTION-->
  <nav class="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Portfolio</a>
      <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#aboutMe">ABOUT ME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">PROJECTS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section id="hero" class="section hero py-5 vh-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
          <h1 class="display-4 fw-bold">Hello.</h1>
          <h1 class="display-5">I'm <span class="text-primary">Alex</span>.</h1>
          <p class="lead">Fullstack Open Source Developer</p>
          <p>I am currently studying the Fullstack Open Source program to become a full-time developer.</p>
          <div class="d-flex gap-3 mt-3">
            <i class="fa-brands fa-js fs-1"></i>
            <i class="fa-brands fa-php fs-1"></i>
            <i class="fa-brands fa-html5 fs-1"></i>
            <i class="fa-brands fa-sass fs-1"></i>
            <i class="fa-brands fa-css fs-1"></i>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img src="/img/profile-pic.png" alt="Profile Photo" class="img-fluid rounded-circle" id="profilePhoto">
        </div>
      </div>
    </div>
  </section>

  <!--About me Section-->
  <section id="aboutMe" class="py-10 mt-8 vh-100">
    <div class="container text-center text-light">
      <h1 class="mb-4 text-light">About Me</h1>
      <div class="row gx-5 justify-content-center">

        <!--biography card-->
        <div class="card w-50 bg-dark">
          <div class="card-body">
            <h5 class="card-title text-light">Biography</h5>
            <p class="card-text text-light">With experience as a delivery driver and supervisor, I have developed strong leadership and teamwork skills. I am currently studying IT and frequently work on group projects, which has taught me to manage multiple tasks simultaneously and prioritize effectively. As a class representative, I take responsibility and drive solutions, enhancing my ability to work in a structured manner under pressure. I am passionate about delivering high-quality service and contributing to the success of the team.</p>
            <a href="#" class="btn btn-primary">CV</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- PROJECT SECTION -->
  <section id="project" class="py-5 vh-100">
    <div class="container text-center">
      <h1 class="mb-4 text-light">Projects.</h1>
      <p class="mb-5 text-light">Check out the projects I have done</p>

      <div class="row gx-5 justify-content-center ">
        <!-- First Card -->
        <div class="col-md-6">
          <div class="card bg-dark p-4 text-start text-light">
            <h2>Movies to Watch</h2>
            <p>Movies To Watch is a simple yet effective tool for tracking movies and series.</p>
            <div class="d-flex">
              <a href="https://github.com/chas-academy/MoviesToWatch-elfarfar" class="btn btn-primary">GitHub</a>
              <a href="#" class="btn btn-secondary ms-2">Live Demo</a>
            </div>
          </div>
        </div>

        <!-- Second Card -->
        <div class="col-md-6 ">
          <div class="card bg-dark p-4 text-start text-light">
            <h2>MovieScout</h2>
            <p>MovieScout lets users explore, rate, and review movies.</p>
            <div class="d-flex">
              <a href="https://github.com/chas-academy/u04-imdb-klon-grupp4" class="btn btn-primary">GitHub</a>
              <a href="#" class="btn btn-secondary ms-2">Live Demo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-5">
    <div class="container text-center text-light">
      <h1>CONTACT</h1>
      <p>Have a question or want to collaborate? Feel free to reach out!</p>
      <a href="mailto:alex.ohlin96@gmail.com" class="btn btn-primary">Email me</a>
      <div class="mt-4">
        <a href="https://github.com/elFarfar" class="me-3"><i class="fa-brands fa-github fs-1"></i></a>
        <a href="https://se.linkedin.com/in/alex-%C3%B6hlin-58476b2ab"><i class="fa-brands fa-linkedin fs-1"></i></a>
      </div>
    </div>
  </section>
  <!--FOOTER SECTION -->
  <!--TODO// Fullfill THIS-->
  <section id="footer">
    <div class="footer-container">
      <div class="footer-workholder">
        <!--About me link -->

      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>