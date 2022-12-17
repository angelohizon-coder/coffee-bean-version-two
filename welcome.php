<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Coffee Bean</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="icon" href="images/favicon/favicon.ico">

  <script src="https://kit.fontawesome.com/cc321742bc.js" crossorigin="anonymous"></script>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="css/styles-index.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">
        Coffee Bean
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Logout</a>
          </li>
        </ul>
        <!-- <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/1.jpg">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Lorem ipsum</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien arcu. </p>
              <p><a class="btn btn-secondary btn-lg" href="#">View details</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/2.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lorem ipsum</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien arcu. </p>
              <p><a class="btn btn-secondary btn-lg" href="#">Lorem ipsum</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/3.jpg">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Lorem ipsum</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien arcu. </p>
              <p><a class="btn btn-secondary btn-lg" href="#">Lorem ipsum</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div id="features" class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <i class="fas fa-check-circle features-images"></i>
          <h2>Lorem ipsum</h2>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien arcu. Etiam nec blandit ex, id egestas neque. Etiam quis lorem laoreet, tincidunt eros eget, tincidunt erat.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <i class="fas fa-truck features-images"></i>
          <h2>Lorem ipsum</h2>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien arcu. Etiam nec blandit ex, id egestas neque. Etiam quis lorem laoreet, tincidunt eros eget, tincidunt erat.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <i class="fas fa-coffee features-images"></i>
          <h2>Lorem ipsum</h2>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget sapien arcu. Etiam nec blandit ex, id egestas neque. Etiam quis lorem laoreet, tincidunt eros eget, tincidunt erat.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div>

    <div id="about" class="features container">
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Lorem ipsum dolor sit amet, <span class="text-muted">consectetur adipiscing elit</span></h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed consectetur nibh. Quisque eu sollicitudin risus, nec eleifend lectus. Vivamus pellentesque, nisl ac consectetur suscipit,</p>
        </div>
        <div class="col-md-5">
          <img src="images/cropped-1.jpg" alt="" class="features-image">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Lorem ipsum dolor sit amet, <span class="text-muted">consectetur adipiscing elit</span></h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed consectetur nibh. Quisque eu sollicitudin risus, nec eleifend lectus. Vivamus pellentesque, nisl ac consectetur suscipit,</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="images/cropped-2.jpg" alt="" class="features-image">

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Lorem ipsum dolor sit amet, <span class="text-muted">consectetur adipiscing elit</span></h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed consectetur nibh. Quisque eu sollicitudin risus, nec eleifend lectus. Vivamus pellentesque, nisl ac consectetur suscipit,</p>
        </div>
        <div class="col-md-5">
          <img src="images/cropped-3.jpg" alt="" class="features-image">

        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
    </div>
    <!-- /.container -->

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>

</html>
