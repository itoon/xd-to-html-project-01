<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./main.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.js"></script>
  <script src="./main.js"></script>
  <title>The Future Project</title>
</head>
<body>
  <header id="mobile-header" class="d-block d-lg-none active">
    <div class="container"> 
      <div class="row">
        <div class="col-4">
          <img src="./assets/imgs/logo@2x.png" alt="">
        </div>
        <div class="col-8 text-right">
          <button class="toggle-menu btn">          
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </div>
  </header>  
  <nav id="mobile-nav-menu" class="d-lg-none">
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    <ul>
  </nav>
  <header id="desktop-header" class="d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div id="logo" class="position-absolute">
            <img src="./assets/imgs/logo@2x.png" alt="">
          </div>
        </div>
        <div class="col-lg-10">
          <nav>
            <ul>
              <li><a class="active" href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li>
                <a href="#">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                  </svg>
                </a>
              </li>
              <li>
                <a class="btn btn-tel btn-f-primary position-absolute" id="header-btn-tel" href="tel:0846549189">0846549189</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>