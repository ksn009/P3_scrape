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

<body class="blue-grey-lighten-4">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light black scrolling-navbar" style="color: white;">
      <div class="container-fluid">

        <!-- Brand -->
        

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
            <li class="btn blue" style="padding: 10px" >LOGOUT
              
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
        <a href="dashboard.html" class="list-group-item list-group-item-action waves-effect">
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
        <a href="invoice.php" class="list-group-item active waves-effect">
          <i class="fas fa-file-invoice mr-3"></i>Inventory</a>
        <a href="report.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-chart-line mr-3"></i>Reports</a>
      
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="dashboard.html" target="_blank"></a>
            <span></span>
            <span>Inventory</span>
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Search by SKU" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form>

        </div>

      </div>
      <!-- Heading -->
      
     <!--Main layout-->
    <!--content here-->
      
   
   
   
   
  <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card">
            <!-- Card header -->
                    <div class="card-header text-center black" style="color: white;">
                      Inventory and pricing list
                    </div>

            <!--Card content-->
            <div class="card-body">

              <!-- Table  -->
              <table class="table table-hover">
                <!-- Table head -->
                <thead class="white">
                  <tr>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Marketplace</th>
                      <th>Price(Rs.)</th>
                    <th>Type</th>
                    <th>Total</th>
                      <th>Available</th>
                    <th>Booked</th>
                </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  <tr>
                    <th scope="row">LQ87648902</th>                                          
                                                                                                   
                  <td>3 Pin Plug</td>
                    <td>B1_0G_H3L8</td>                                                 
                    <td>Amazon</td>
                      <td>800</td>
                    <td>good</td>
                    <td>204</td>
                    <td>198</td>
                    <td>4</td> 
                    <td></td>
                  </tr>
                    
                   




                    
                  <tr>
                    <th scope="row">JK09762389</th>
                    <td> Phone cover</td>
                    <td>B1_1A_H1L8</td>
                    <td>Flipkart</td>
                      <td>1200</td>
                    <td>Good</td>
                    <td>87</td>
                      <td>78</td>
                    <td>9</td>
                    <td></td>
                  </tr>
                    
                    
                     <tr>
                    <th scope="row"> HHG982399</th>
                    <td> curly hair wig</td>
                    <td>B1_1A_H1L8</td>
                    <td>Flipkart</td>
                      <td>900</td>
                    <td>Good</td>
                    <td>86</td>
                      <td>70</td>
                    <td>16</td>
                    <td></td>
                  </tr>
                  
                    
                     <tr>
                    <th scope="row">RG_098080</th>
                    <td> Sports watch</td>
                    <td>B1_1A_H1L8</td>
                    <td>Flipkart</td>
                      <td>800</td>
                    <td>Good</td>
                    <td>76</td>
                      <td>70</td>
                    <td>6</td>
                    <td></td>
                  </tr>
                    
                    
                     
                     <tr>
                    <th scope="row">PL08098209</th>
                    <td> sports shoe</td>
                    <td>B1_1A_H1L8</td>
                    <td>Flipkart</td>
                      <td>1800</td>
                    <td>Good</td>
                    <td>47</td>
                      <td>44</td>
                    <td>3</td>
                    <td></td>
                  </tr>
                    
                    
                    
                     <tr>
                    <th scope="row">QW08098209</th>
                    <td> Lamp shade</td>
                    <td>B1_1A_H1L8</td>
                    <td>Amazon</td>
                      <td>1600</td>
                    <td>Good</td>
                    <td>50</td>
                      <td>43</td>
                    <td>7</td>
                    <td></td>
                  </tr>
                    
                    
                    
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table  -->

            </div>

          </div>
          <!--/.Card-->

        </div>
  <!--Main layout-->
 


  



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

