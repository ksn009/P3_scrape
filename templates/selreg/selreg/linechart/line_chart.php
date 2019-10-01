<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Tasks</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
  
  <!--Main Navigation-->
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
  <!--Main Navigation-->
  
<!--  line chart-->
  <div class="mt-5 mr-5 ml-5">
      <!-- Card deck -->
        <div class="card-deck">

  <!-- Card -->
  <div class="card">
    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Date Wise Sale</h4>
      <!--Chart-->
      <div style="width:650px;">
          <canvas class="mt-4" id="lineChart1"></canvas>
      </div> 

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card">
   
    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Date Wise Revenue</h4>
      <!--Chart-->
      <div style="width:650px;">
          <canvas class="mt-4" id="lineChart2"></canvas>
      </div> 
    </div>

  </div>
  <!-- Card -->

</div>
        <!-- Card deck -->
  </div>
<!--  line chart-->
 
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!--  chart javascript-->
  <script>//line
var ctxL = document.getElementById("lineChart1").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["2019/1", "2019/2", "2019/3", "2019/4", "2019/5", "2019/6", "2019/7", "2019/8", "2019/9", "2019/10", "2019/11", "2019/12"],
    datasets: [
      {
        label: "My First dataset",
        data: [28, 48, 40, 37, 58, 36, 50, 69, 59, 68, 42, 69],
        backgroundColor: [
          'rgba(0, 137, 132, .2)',
        ],
        borderColor: [
          'rgba(0, 10, 130, .7)',
        ],
        borderWidth: 2
      }
    ]
  },
  options: {
    responsive: true
  }
}); 
var ctxL = document.getElementById("lineChart2").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["2019/1", "2019/2", "2019/3", "2019/4", "2019/5", "2019/6", "2019/7", "2019/8", "2019/9", "2019/10", "2019/11", "2019/12"],
    datasets: [
{
        label: "My First dataset",
        data: [65, 59, 80, 81, 56, 55, 45, 43, 43, 53, 63,53],
        backgroundColor: [
          'rgba(105, 0, 132, .2)',
        ],
        borderColor: [
          'rgba(200, 99, 132, .7)',
        ],
        borderWidth: 2
      },
    ]
  },
  options: {
    responsive: true
  }
}); </script>
</body>

</html>