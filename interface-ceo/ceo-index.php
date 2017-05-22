<<<<<<< Updated upstream
<?php
    include('../php/ceo/ceo-main.php');
    //print_r($allInfo);

    $totalStoreSales = 0;
    $totalStoreReturn = 0;
    $totalStoreExpense = 0;

    foreach ($allInfo as $store) {
        $totalStoreSales += $store['SALESNO'];
        $totalStoreReturn += $store['RETURN'];
        $totalStoreExpense += $store['TOTAL EXPENSE'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Home</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="ceo-index.php"></a>
        <ul class="nav navbar-nav ml-auto">
            
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md-down">CEO</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
            <li class="nav-item hidden-md-down">
               
            </li>

        </ul>
    </header>

     <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ceo-index.php"><i class="icon-star"></i> Summary </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="ceo-stores.php"><i class="icon-star"></i> Stores </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                    <!-- CHANGE THIS AT THE FINAL ceo-storemanagement -->
                        <a class="nav-link" href="ceo-storemanagement.html"><i class="icon-star"></i> Store Management</a>
                    </li>

                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="ceo-index.php">CEO</a>
                </li>
                <li class="breadcrumb-item active">Summary</li>

        
            </ol>


            <div class="container-fluid">





                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-primary">
                                <div class="card-block pb-0">
                                <!-- Sales function goes here-->
                                    <h4 class="mb-0"><?php echo $totalStoreSales ?></h4>
                                    <p>Number of sales</p>
                                </div>
                                <div class="chart-wrapper px-1" style="height:70px;">
                                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-info">
                                <div class="card-block pb-0">
                                <!-- Return function goes here-->
                                 
                                    <h4 class="mb-0"><?php echo $totalStoreReturn ?></h4>
                                    <p>Item Returned</p>
                                </div>
                                <div class="chart-wrapper px-1" style="height:70px;">
                                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-warning">
                                <div class="card-block pb-0">
                                    <h4 class="mb-0">23870</h4>
                                    <p>Customers</p>
                                </div>
                                <div class="chart-wrapper" style="height:70px;">
                                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-danger">
                                <div class="card-block pb-0">
                                <!-- Store expenses -->
                                    <h4 class="mb-0">$<?php echo $totalStoreExpense ?></h4>
                                    <p>Total Expenses</p>
                                </div>
                                <div class="chart-wrapper px-1" style="height:70px;">
                                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->

                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h4 class="card-title mb-0">Summary Chart</h4>
                                    <div class="small text-muted"><p id="date"></p></div>
                                </div>
                                <!--/.col-->
                                <div class="col-sm-7 hidden-sm-down">
                                    
                                    </button>
                                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-1" data-toggle="buttons" aria-label="First group">
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option1" checked>Day
                                            </label>
                                            <label class="btn btn-outline-secondary active">
                                                <input type="radio" name="options" id="option2" >Month
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option3">Year
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/.col-->
                            </div>
                            <!--/.row-->
                            <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                                <canvas id="main-chart" class="chart" height="300"></canvas>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul>
                                <li class="hidden-sm-down">
                                    <div class="text-muted">Sales</div>
                                    <strong>40.15 %</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
							
                                <li class="hidden-sm-down">
                                    <div class="text-muted">Item Returns</div>
                                    <strong>24.093 Users (20%)</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-muted">Pageviews</div>
                                    <strong>78.706 Views (60%)</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="hidden-sm-down">
                                    <div class="text-muted">New Users</div>
                                    <strong>22.123 Users (80%)</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.conainer-fluid -->
        </main>
    </div>



    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/pace/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>


    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>





    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>
	<script src="js/date.js"></script>

</body>

=======
<?php
    include('../php/ceo/ceo-main.php');
    //print_r($allInfo);

    $totalStoreSales = 0;
    $totalStoreReturn = 0;
    $totalStoreExpense = 0;

    foreach ($allInfo as $store) {
        $totalStoreSales += $store['SALESNO'];
        $totalStoreReturn += $store['RETURN'];
        $totalStoreExpense += $store['TOTAL EXPENSE'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Home</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="ceo-index.php"></a>
        <ul class="nav navbar-nav ml-auto">
            
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md-down">CEO</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
            <li class="nav-item hidden-md-down">
               
            </li>

        </ul>
    </header>

     <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ceo-index.php"><i class="icon-star"></i> Summary </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="ceo-stores.php"><i class="icon-star"></i> Stores </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                    <!-- CHANGE THIS AT THE FINAL ceo-storemanagement -->
                        <a class="nav-link" href="ceo-storemanagement.html"><i class="icon-star"></i> Store Management</a>
                    </li>

                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="ceo-index.php">CEO</a>
                </li>
                <li class="breadcrumb-item active">Summary</li>

        
            </ol>


            <div class="container-fluid">





                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-primary">
                                <div class="card-block pb-0">
                                <!-- Sales function goes here-->
                                    <h4 class="mb-0"><?php echo $totalStoreSales ?></h4>
                                    <p>Number of sales</p>
                                </div>
                                <div class="chart-wrapper px-1" style="height:70px;">
                                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-info">
                                <div class="card-block pb-0">
                                <!-- Return function goes here-->
                                 
                                    <h4 class="mb-0"><?php echo $totalStoreReturn ?></h4>
                                    <p>Item Returned</p>
                                </div>
                                <div class="chart-wrapper px-1" style="height:70px;">
                                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-warning">
                                <div class="card-block pb-0">
                                    <h4 class="mb-0">23870</h4>
                                    <p>Customers</p>
                                </div>
                                <div class="chart-wrapper" style="height:70px;">
                                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-danger">
                                <div class="card-block pb-0">
                                <!-- Store expenses -->
                                    <h4 class="mb-0">$<?php echo $totalStoreExpense ?></h4>
                                    <p>Total Expenses</p>
                                </div>
                                <div class="chart-wrapper px-1" style="height:70px;">
                                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->

                    <div class="card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h4 class="card-title mb-0">Summary Chart</h4>
                                    <div class="small text-muted"><p id="date"></p></div>
                                </div>
                                <!--/.col-->
                                <div class="col-sm-7 hidden-sm-down">
                                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-1" data-toggle="buttons" aria-label="First group">
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option1" checked>Day
                                            </label>
                                            <label class="btn btn-outline-secondary active">
                                                <input type="radio" name="options" id="option2" >Month
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="options" id="option3">Year
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--/.col-->
                            </div>
                            <!--/.row-->
                            <div class="chart-wrapper" style="height:400px;margin-top:40px;">
                            <div id="container"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul>
                                <li class="hidden-sm-down">
                                    <div class="text-muted">Sales</div>
                                    <strong>40.15 %</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
							
                                <li class="hidden-sm-down">
                                    <div class="text-muted">Item Returns</div>
                                    <strong>24.093 Users (20%)</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-muted">Pageviews</div>
                                    <strong>78.706 Views (60%)</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="hidden-sm-down">
                                    <div class="text-muted">New Users</div>
                                    <strong>22.123 Users (80%)</strong>
                                    <div class="progress progress-xs mt-h">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.conainer-fluid -->
        </main>
    </div>



    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/pace/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>


    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>


    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>

    <!-- line chart -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <script>
        Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Tokyo',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, {
        name: 'London',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});




Highcharts.chart('container3', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Sale with Price'
    },
  
    xAxis: {
        categories: ['100-300', '300-500', '500-700', '700-900', '900-1100', '1100-1500', '1500-2000', '2000-3000', 'more than 3000']
    },
    yAxis: {
        title: {
            text: 'Number of sales'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Count',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3]
    }]
});
    </script>

    <!--Pie chart  -->
    <script>
    Highcharts.chart('container4', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Top Sale Items'
    },
   
    xAxis: {
        categories: [
            'Apple watch',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Sales'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Amount',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    }]
});




    Highcharts.chart('container2', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Return and no-return items'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        data: [
            ['No-Return', 75.0],
            ['Return', 25.0],
        ]
    }]
});
    </script>


    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>
	<script src="js/date.js"></script>

</body>

>>>>>>> Stashed changes
</html>