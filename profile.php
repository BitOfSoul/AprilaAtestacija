<!--HTML-->
<html lang= "en">

<!--Head-->
  <head>
    <meta charset= "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href= "assets/css/bootstrap.css">
    <link rel= "stylesheet" href= "assets/css/css.css">
    <script src= "assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel= "stylesheet" href= "https://www.w3schools.com/w3css/4/w3.css">
    <title>J4F Profile</title>
  </head>

<!--Body-->
<body>

<!--Navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="profile.php">PROFILE<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
        </ul>
      </li>
      <li><a href="lol.php">LOL</a></li>
      <li><a href="wow.php">WOW</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <button class="btn btn-danger navbar-btn">LOGOUT</button>
    </ul>
  </div>
</nav>
<!--Top Background-->
    <header>
        <div class= "bg-profile">
          <div class= "caption">
            <span class= "border">PROFILE</span>
          </div>
        </div>
    </header>

<!--Navigation Bar bottom-->
  <div class="w3-bottom w3-hide-small">
    <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min">
      <a href="#home" class="w3-bar-item w3-button">Hello, User!</a>
    </div>
  </div>

<!--Container-->
<div class="container-fluid text-center">
    <div class="row content">
          <article>
            <br><br>
            <h1 class= "article-h1">  YOUR PROFILE</h1>
              <p class= "name">Name:</p>
                <p class= "lastname">Lastname:</p>
                  <p class= "username">Username:</p>
                      <p class= "email">E-mail:</p>
                        <p class= "registartion-date">Your reg. date:</p>
                      </div>
                  <br><br>
                </article>
              <div class="col-sm-2 sidenav"></div>
            <div class="col-sm-8 text-left">
          </div>
      <div class="col-sm-2 sidenav"></div>
    </div>
  </div>

<!--Footer-->
  <footer class="container-fluid text-center">
    <p>Powered by J4F Team</p>
  </footer>

<!--Footer going through bottom navigation bar-->
  <div class="w3-hide-small" style="margin-bottom:32px"> </div>

<!--End of body-->
  </body>

<!--End of HTML-->
</html>
