<?php 
 $con = mysqli_connect("localhost","root", "", "FYP-UMP");
 if($con){
     echo "";
 }

?>

<html>
  <head>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="stle.css" class="header">
	  <title>UMP-FYP</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['StudentID', 'Rate_Scale'],
          <?php
          $sql = "SELECT StudentID, Rate_Scale FROM rating ";
          $fire = mysqli_query($con, $sql);
          while ($result = mysqli_fetch_assoc($fire)) {
              echo"['".$result['StudentID']."',".$result['Rate_Scale']."],";
          }
          ?>
          
        ]);

        var options = {
          title: 'Rating Report'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <header>
		<img src= logo1.png width=15%>
        <h1>StudFYP</h1>
    </header>
    <br>
    <div class="navbar_mid">
    <a href="interface.php">Home</a>
    <a href= "addrating.php" >Add Rating</a>
    <a href= "viewrating.php">Rating List</a>
    <a href= "viewratingreport.php" class="active">Rating Report</a>
    <br>
    </div>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
  
    <div class="footer">
    <a href="interface.php">Home </a>
    <br>
    <h5>Copyright 2021; All Rights Reserved.</h5>
   </div>

  </body>
</html>
