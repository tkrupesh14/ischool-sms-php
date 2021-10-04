<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | iSchool</title>
    <!-- stylesheets -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- google fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

            <!-- custom css -->
            <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    
    <div class="wrapper">
        <div class="body-overlay">

            <?php
                include "sidebar.php";
            ?>

<div id="content">

            <?php
                include "header.php";
            ?>

             <!-- main content -->
             <div class="main-content">
                    <div class="row">

                        <!-- card 1 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">people</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Students</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">supervisor_account</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Faculties</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">card_membership</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Courses</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                        <span class="material-icons">assignment_turned_in</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Exams</strong></p>
                                    <h3 class="card-title">3,000</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info" >info</i>
                                        <a href="#">See Detailed Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- charts -->
                   


    <div id="piechart_3d" style="width: 500px; height: 300px; background:transparent;"></div>
                </div>
            </div>

          
        </div>
    </div>

    <!-- javascripts -->
        <!-- Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.min.js" integrity="sha512-ewfXo9Gq53e1q1+WDTjaHAGZ8UvCWq0eXONhwDuIoaH8xz2r96uoAYaQCm1oQhnBfRXrvJztNXFsTloJfgbL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- charts js -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Users', 'Hours per Day'],
          ['Students',     3000],
          ['Faculty',      200],
          ['Parents', 900]
     
        ]);

        var options = {
          title: 'Total Users',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
</body>
</html>