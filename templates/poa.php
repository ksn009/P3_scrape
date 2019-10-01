<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>POA</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<main>

<!-- Just an image -->
<nav class="navbar navbar-dark primary-color">
    <a class="navbar-brand" href="#">
      <img src="img/logo1.jpg" height="60" alt="mdb logo">
    </a>
  </nav>


  
  <div class="container white " > 
  


  <div class="card" style="margin-top:80px;">
    <div class="card-header"><strong> POA </strong></div>
<div class="row">
<div class="col-md-6">

    <form class=" p-5" style="font-weight:bold;">

  <div class="md-form">
    <input type="date" id="inputMDEx" class="form-control">
    <label for="inputMDEx">CHOOSE THE DATE</label>
  </div>



</div>
<div class="col-md-6">

<!-- Basic dropdown -->
<a class="btn btn-primary dropdown-toggle ml-5 mt-5" type="button" data-toggle="dropdown" aria-haspopup="true"
  aria-expanded="false">Choose the Marketplace</a>

<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Action</a>
  <a class="dropdown-item" href="#">Another action</a>
  <a class="dropdown-item" href="#">Something else here</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Separated link</a>
</div>
<!-- Basic dropdown -->


</div>




</form>





</div>
</div>



<div class="input-group "  style="margin-top: 40px;">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="inputGroupFile01"
        aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label" for="inputGroupFile01">Upload CSV file</label>
    </div>
  </div>

<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%"  style="margin-top:100px ">
    <thead>
      <tr>
        <th class="th-sm">Client Name
        </th> 
        <th class="th-sm">Revenue 
        </th>
        <th class="th-sm">Quanyity
        </th>
        <th class="th-sm">Orders
        </th>
        <th class="th-sm">Clicks
        </th>
        <th class="th-sm">Impressions
        </th>
        <th class="th-sm">Revenue
          </th>
          <th class="th-sm">Spend
            </th>
            <th class="th-sm">CPA
              </th>
              <th class="th-sm">Edit data
                </th>
                <th class="th-sm">Delete data
                  </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
        <td></td>
        <td></td>
        <td></td> 
        <td><button class="btn btn-primary " style="height: 5vh; width:20vh;"> edit </button></td>
         <td> <button class="btn btn-default" style="height:5vh;width:20vh;">Delete </button></td> 
        
      </tr> 
      <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td> 
      </tr>
      <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>2009/01/12</td>
        <td>$86,000</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td> 
      </tr>
      
      

     
    </tbody>
    
  </table> 
  <h4 class="mt-5">Sales</h4>

  <div class="col-md-12" style="margin-top:20px;">

  <canvas id="myChart" width="100" height="50"></canvas>

</div>

<h4 class="mt-5">Sales vs ads</h4>

  <div class="col-md-12" >
  
  <canvas id="myChart1" width="100" height="50" style="margin-top:30px;"></canvas>


  </div>


</div>








</main>

<body>


<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
<script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
<script src="https://www.chartjs.org/samples/latest/utils.js"></script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Sales (Quantity and revenue)',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
               
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'sales vs ads',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


</body>

</html>
