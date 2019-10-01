<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sales Engine</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light black scrolling-navbar" style="color: white;">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://www.selvitate.com" target="_blank">
          <strong class="cyan-text">YOUR SALES ENGINE</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" style="color: white;" href="dashboard.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item" style="color: white;">
              <a class="nav-link waves-effect" href="https://www.selvitate.com" style="color: white;" target="_blank">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                target="_blank">Free
                download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free
                tutorials</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="btn  blue" style="padding: 10px" >LOGOUT
              
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed black">

      <a class="logo-wrapper waves-effect">
        <img src="img/sellogo.png" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush ">
        <a href="dashboard.html" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="stockprice.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fab fa-dropbox mr-3"></i>Stock & Price</a>
        <a href="fullfilment.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-truck mr-3"></i>Fullfillment</a>
        <a href="ordersreview.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-list-ul mr-3"></i>Orders Review</a>
        <a href="channels.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-exchange-alt mr-3"></i>Channels</a>
       
        <a href="report.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chart-line mr-3"></i>Reports</a>
            
      </div>

    </div>