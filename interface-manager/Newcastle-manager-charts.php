
<!DOCTYPE html>
<html lang="en">
<?php 
	include('DB_connect.php');
	include('manager_dashboard.php');
	$totalQuantities=$allInfo['newcastle']['TOTALQUANTITIES'];
	$precent=($allInfo['newcastle']['SALESNO']/$totalQuantities)*100;
	$TopProfitItems=getTopProfitItem($conn,"newcastle");

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title></title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav hidden-md-down">
            
        </ul>
        <ul class="nav navbar-nav ml-auto">
            
            <li class="nav-item hidden-md-down">
               
            </li>
            <li class="nav-item hidden-md-down">
               
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                   
                    <span class="hidden-md-down">newcastle Manager</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>

                   

                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>

                  
                    <div class="divider"></div>
                   
                </div>
            </li>
            <li class="nav-item hidden-md-down">
                <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
            </li>

        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
            
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="newcastle-manager-index.php"><i class="icon-puzzle"></i> Summary</a>
                        <ul class="nav-dropdown-items">
                          
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="newcastle-manager-records.php"><i class="icon-star"></i> Store operations</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="newcastle-manager-charts.php"><i class="icon-pie-chart"></i> Charts</a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-item nav-dropdown">
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="newcastle-manager-index.html">Manager</a>
                </li>
                <li class="breadcrumb-item active">Charts</li>

                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu hidden-md-down">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    </div>
                </li>
            </ol>


            <div class="container-fluid">



                <div class="animated fadeIn">
                    <div class="card-columns cols-2">
                        <div class="card">
                            <div class="card-header">
                                Line Chart
                                <div class="card-actions">
                                   
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="chart-wrapper">
									<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Ratio of items
                                <div class="card-actions">
                                    
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="chart-wrapper">
                                   <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Price and sale
                                <div class="card-actions">
                                    
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="chart-wrapper">
                                    <div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Top Sale
                                <div class="card-actions">
                                   
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="chart-wrapper">
                                    <div id="container4" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
            <!-- /.conainer-fluid -->
        </main>  

    </div>

    <footer class="app-footer"></footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/pace/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>


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
        text: 'The Pordiction of Monthly Average'
    },
    subtitle: {
        text: 'Source: JBHIFI'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Profits（thousands）'
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
        name: 'Reduce Cost',
        data: [Math.floor((Math.random() * 500) + 100), 
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100),
				Math.floor((Math.random() * 500) + 100)]
    }, {
        name: 'Decrease the number of return items',
        data: [Math.floor((Math.random() * 300) + 100), 
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100),
				Math.floor((Math.random() * 300) + 100)]
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
        data: [<?php echo calSaleNoByPrice($conn,"newcastle",100,300);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",300,500);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",500,700);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",700,900);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",900,1100);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",1100,1500);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",1500,2000);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",2000,3000);?>, 
		<?php echo calSaleNoByPrice($conn,"newcastle",3000,9999999);?>]
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
        text: 'Top profits for Item'
    },
   
    xAxis: {
        categories: [
            '<?php echo $TopProfitItems[0]['NAME'] ?>',
			'<?php echo $TopProfitItems[1]['NAME'] ?>',
			'<?php echo $TopProfitItems[2]['NAME'] ?>',
			'<?php echo $TopProfitItems[3]['NAME'] ?>',
			'<?php echo $TopProfitItems[4]['NAME'] ?>',
			'<?php echo $TopProfitItems[5]['NAME'] ?>',
			'<?php echo $TopProfitItems[6]['NAME'] ?>',
			'<?php echo $TopProfitItems[7]['NAME'] ?>',
			'<?php echo $TopProfitItems[8]['NAME'] ?>',
			'<?php echo $TopProfitItems[9]['NAME'] ?>',
			'<?php echo $TopProfitItems[10]['NAME'] ?>',
			'<?php echo $TopProfitItems[11]['NAME'] ?>',
			'<?php echo $TopProfitItems[12]['NAME'] ?>',
			'<?php echo $TopProfitItems[13]['NAME'] ?>',
			'<?php echo $TopProfitItems[14]['NAME'] ?>',
			'<?php echo $TopProfitItems[15]['NAME'] ?>]'
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
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
        data: [<?php echo $TopProfitItems[0]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[1]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[2]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[3]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[4]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[5]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[6]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[7]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[8]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[9]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[10]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[11]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[12]['PROFIT'] ?>,
		<?php echo $TopProfitItems[13]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[14]['PROFIT'] ?>, 
		<?php echo $TopProfitItems[15]['PROFIT'] ?>]
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
        text: 'Sold and Inventory'
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
            ['Inventory', <?php echo 100-$precent ?>],
            ['Sold', <?php echo $precent ?>],
        ]
    }]
});
	</script>

    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/charts.js"></script>

</body>

</html>