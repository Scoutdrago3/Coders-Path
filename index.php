
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CodersPath - Learn Code</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-kVo/Eh0sv7ZdiwZK32nRsp1FrDT3sLRLx3zVpSSTI9UdO5H02LJNLBg5F1gwvKg0" crossorigin="anonymous">
    <link href="carousel.css" rel="stylesheet">
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
      padding: 29px 32px;

  }
  .button{
    padding-right: 250px;
  }
  </style>

</head>

<body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Coder's Path</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <ul class="nav navbar-nav navbar-right">
                  <a type="button" class="btn btn-default navbar-btn" href="signin.php">Sign in</a>
                  <a type="button" class="btn btn-default navbar-btn" href="register.php">Register</a>
                </ul>
              </ul>

            </div>

          </div>
        </nav>

      </div>


    <!-- Carousel
    ================================================== -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Coders_Path.jpg" alt="">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item">
        <img src="example_1.jpg" alt="...">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item">
        <img src="launch_3.jpg" alt="...">
        <div class="carousel-caption">

        </div>
      </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="icon_1.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Need to find a class?</h2>
          <p>Learning programming is one of the best investements of your time.  In the current digital age, any programming expertise is incredibly valuable as the unique skill set provides for nearly infinite applications.</p>
          <p><a class="btn btn-default" href="#" role="button">Click Here!&raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="icon_4.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Looking for a Hackathon?</h2>
          <p>Hackathons are a great way to start your project.  Hackathons also get you to learn more programming and jumpstart your evergrowing knowledge. This website itself was started at a HackBCA3 by only 3 high school students!</p>
          <p><a class="btn btn-default" href="#" role="button">Click Here! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="icon_3.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Have a class or hackathon to advertise?</h2>
          <p>We are constantly looking to add more classes and hackathons to ever growing list!  All it takes is a simple form and you immediately get your name out!</p>
          <p><a class="btn btn-default" href="event_registration.php" role="button">Click here to register your event! &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Finding a programming workshop <span class="text-muted">has never been easier.</span></h2>
          <p class="lead">The 21st century is the digital age and programming has never been more important.  Using our site we can help you find the perfect workshop that is just right for your level and language you want to learn. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="find.jpeg" alt="">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, <span class="text-muted">we can even help you find a hackathon</span></h2>
          <p class="lead">The hackathons we locate for you will provide a competitive feel. The list we provide you is easy to follow with all the neccessary information to keep you informed.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="" alt="">
        </div>
      </div>


      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Coder's Path &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
