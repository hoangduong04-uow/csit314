
<!DOCTYPE html>
<html lang="en">
<?php
	include('DB_connect.php');
	include('manager_dashboard.php');
	
	$itemsInfo= getAllInfo($conn,"newcastle");
	$storesInfo= getAllInfo($conn,"store_data_newcastle");
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
            <li class="nav-item hidden-md-down">
               
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                   
                    <span class="hidden-md-down">Newcastle Manager</span>
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
                <li class="breadcrumb-item active">Store operations</li>

                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu hidden-md-down">
                    
                </li>
            </ol>


            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Store staff
                                </div>
                                <div class="card-block">
                                   <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Avery Daley</td>
                                                <td>Manager</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Evan Curtis</td>
                                                
                                                <td>Staff</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Herman Chadwick</td>
                                                
                                                <td>Staff</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Brandan Benton</td>
                                               
                                                <td>Staff</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Morgan Lombard</td>
                                              
                                                <td>Staff</td>
                                                
                                            </tr>
											<tr>
                                                <td>Dexter Edmond</td>
                                              
                                                <td>Staff</td>
                                                
                                            </tr>
											<tr>
                                                <td>Gabriel Jesse</td>
                                              
                                                <td>Staff</td>
                                                
                                            </tr>
											<tr>
                                                <td>Abraham Frasier</td>
                                              
                                                <td>Staff</td>
                                                
                                            </tr>
											<tr>
                                                <td>Quinlan Justin</td>
                                              
                                                <td>Staff</td>
                                                
                                            </tr>
											<tr>
                                                <td>Erwin Irvin</td>
                                              
                                                <td>Staff</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
						<div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Salary
                                </div>
                                <div class="card-block">
                                   <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Salary(per hour)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Avery Daley</td>
                                                <td>37</td>
                                            </tr>
                                            <tr>
                                                <td>Evan Curtis</td>
                                                
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>Herman Chadwick</td>
                                                
                                                <td>29</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Brandan Benton</td>
                                               
                                                <td>22</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Morgan Lombard</td>
                                               
                                                <td>24</td>
                                            </tr>
											<tr>
                                                <td>Dexter Edmond</td>
                                               
                                                <td>26</td>
                                            </tr>
											<tr>
                                                <td>Gabriel Jesse</td>
                                               
                                                <td>27</td>
                                            </tr>
											<tr>
                                                <td>Abraham Frasier</td>
                                               
                                                <td>22</td>
                                            </tr>
											<tr>
                                                <td>Quinlan Justin</td>
                                               
                                                <td>26</td>
                                            </tr>
											<tr>
                                                <td>Erwin Irvin</td>
                                               
                                                <td>25</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        
                        <!--/.col-->
                    </div>
                    <!--/.row-->

                    <div class="row">
						
                       
                        </div>
                        <!--/.col-->

                        
                        </div>
                        <!--/.col-->

                    </div>
                    <!--/.row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Items Sales 
                                </div>
                                <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>TYPE</th>
                                                <th>CODE</th>
                                                <th>PRICE</th>
												<th>QUANTITY</th>
												<th>SALE COUNT</th>
												<th>TOTAL SALE</th>
												<th>COST PRICE</th>
												<th>PROFIT</th>
												<th>RETURN_ITEMS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
											for($i=0;$i<count($itemsInfo);$i++){
												echo "<tr>";
												echo "<td>".$itemsInfo[$i]['NAME']."</td>";
												echo "<td>".$itemsInfo[$i]['TYPE']."</td>";
												echo "<td>".$itemsInfo[$i]['CODE']."</td>";
												echo "<td>".$itemsInfo[$i]['SELLING_PRICE']."</td>";
												echo "<td>".$itemsInfo[$i]['QUANTITY']."</td>";
												echo "<td>".$itemsInfo[$i]['SALECOUNT']."</td>";
												echo "<td>".$itemsInfo[$i]['TOTALSALE']."</td>";
												echo "<td>".$itemsInfo[$i]['COST_PRICE']."</td>";
												echo "<td>".$itemsInfo[$i]['PROFIT']."</td>";
												echo "<td>".$itemsInfo[$i]['RETURN_ITEMS']."</td>";												
												echo "</tr>";
											}
                                           ?>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
					<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> newcastle Store
                                </div>
                                <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>COST OF GOODS</th>
                                                <th>FREIGHT COSTS</th>
                                                <th>WAGES</th>
												<th>OVERHEAD</th>
												<th>SALES</th>
												<th>RETURN</th>
												<th>PROFIT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
												for($i=0;$i<count($storesInfo);$i++){
													echo "<tr>";
													echo "<td>".$storesInfo[$i]['DATE']."</td>";
													echo "<td>".$storesInfo[$i]['COST_OF_GOODS']."</td>";
													echo "<td>".$storesInfo[$i]['FREIGHT_COSTS']."</td>";
													echo "<td>".$storesInfo[$i]['WAGES']."</td>";
													echo "<td>".$storesInfo[$i]['OVERHEAD']."</td>";
													echo "<td>".$storesInfo[$i]['SALES']."</td>";
													echo "<td>".$storesInfo[$i]['RETURN_ITEMS']."</td>";
													echo "<td>".$storesInfo[$i]['PROFIT']."</td>";											
													echo "</tr>";
												}
                                           ?>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
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



</body>

</html>