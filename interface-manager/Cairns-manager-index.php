<!DOCTYPE html>
<?php
	include('DB_connect.php');
	include('manager_dashboard.php');
 ?>


<?php $salesNoDay= calStoreSaleDay($conn, "cairns");?>
<?php $returnNoDay= calStoreReturnDay($conn, "store_data_cairns");?>

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
<style>
#container {
	min-width: 1500px;
	max-width: 2000px;
	height: 400px;
	margin: 0 auto
}
</style>


<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav hidden-md-down">
           
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    
                    <span class="hidden-md-down">Cairns Manager</span>
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
                        <a class="nav-link nav-dropdown-toggle" href="Cairns-manager-index.php"><i class="icon-puzzle"></i> Summary</a>
                        <ul class="nav-dropdown-items">
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="Cairns-manager-records.php"><i class="icon-star"></i> Store operations</a>
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
                        <a class="nav-link" href="Cairns-manager-charts.php"><i class="icon-pie-chart"></i> Charts</a>
                    </li>
                    <li class="divider"></li>
                 

                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="cairns-manager-index.html">Manager</a>
                </li>
                <li class="breadcrumb-item active">Summary</li>

                <!-- Breadcrumb Menu-->
               
            </ol>


            <div class="container-fluid">





                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-inverse card-primary">
                                <div class="card-block pb-0">
                                    <div class="btn-group float-right">
                                        <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <h4 class="mb-0"><?php print_r($allInfo['cairns']['SALESNO']) ?></h4>
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
                                    <button type="button" class="btn btn-transparent active p-0 float-right">
                                        <i class="icon-location-pin"></i>
                                    </button>
                                    <h4 class="mb-0"><?php print_r($allInfo['cairns']['RETURN']) ?></h4>
                                    <p>Item Returns</p>
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
                                    <div class="btn-group float-right">
                                        <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <h4 class="mb-0"><?php print_r($allStatistics['managerStatCairns']['CUSTOMERNO']) ?></h4>
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
                                    <div class="btn-group float-right">
                                        <button type="button" class="btn btn-transparent active dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-settings"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <h4 class="mb-0"><?php print_r($allInfo['cairns']['TOTAL EXPENSE']) ?></h4>
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
                            
                                <div class="col-sm-5">
                                    <h4 class="card-title mb-0">Sales and Return</h4>
                                    <div class="small text-muted">May 2017</div>
                                </div>
                                <!--/.col-->
								
                                <div class="col-sm-7 hidden-sm-down">
                                    
                                   
									<div id="container"></div>
                                </div>
                                <!--/.col-->
                           
                           
                        </div>
                        <div class="card-footer">
                            <ul>
                            </ul>
                        </div>
                    </div>
                    <!--/.card-->

                    <div class="row">
                        
                        <!--/.col-->
                    </div>
                    <!--/.row-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Sales
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        
                                                        <br>
														<h4>Top Sales</h4>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                               <ul class="icons-list">
                                                <li>
                                                    <i class="icon-screen-desktop bg-primary"></i>
                                                    <div class="desc">
                                                        <div class="title">Sony Bravia 85" 4K HDR UHD LED LCD TV</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>229954</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Apple MacBook Pro 15" with Touch Bar 512GB (Space Grey)</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>131657</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Apple iMac with Retina 5K display 27" 3.3GHz</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>118602</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Apple MacBook Pro 15" with Touch Bar 256GB (Space Grey)</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>107910</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Apple MacBook Pro 15" 2.2GHz 256GB</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>89820</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Olympus OM-D E-M1 Mark II Digital SLR (Body Only)</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>84966</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Apple iMac with Retina 5K display 27" 3.2GHz</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>81113</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    <button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="show more"><i class="icon-options"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-success">
                                                        
                                                        <br>
                                                       
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        
                                                        <br>
                                                        <h4>Low Sales</h4>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-6" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="icons-list">
                                                <li>
                                                    <i class="icon-screen-desktop bg-primary"></i>
                                                    <div class="desc">
                                                        <div class="title">AERPRO Multicolour LED 5M Strip Lighting</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>700</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Marley Smile Jamaica In-Ear Headphones (Copper)</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>848</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Rode NTUSB Microphone</div>
                                                       
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>2016</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Stadium USBMIC1 USB Studio Microphone</div>
                                                       
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>2340</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Beats Tour 2 Active In-Ear Headphones (Red)</div>
                                                       
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>2873</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Mackie CR4 4" Powered Studio Monitors</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>2940</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Nikon D3400 24.2MP Digital SLR Camera w/ 18-55mm Lens Kit</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold</div>
                                                        <strong>3069</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    <button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="show more"><i class="icon-options"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                                    <br>
                                    <table class="table table-hover table-outline mb-0 hidden-sm-down">
                                        <thead class="thead-default">
                                            <tr>
                                                <th class="text-center"><i class="icon-people"></i>
                                                </th>
                                                <th>Staff</th>
                                                
  
                                                <th class="text-center">Quantity of Sales</th>
                                                <th>Work hours</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    
                                                </td>
                                                <td>
                                                    <div>Eli Hadwin</div>
                                                    
                                                </td>
                                                
                                                <td class="text-center">
                                                    42231
                                                </td>
                                                <td>
                                                    
                                                    <strong>234</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    
                                                </td>
                                                <td>
                                                    <div>Kurt Elias</div>
                                                    
                                                </td>
                                                
                                                <td class="text-center">
                                                   22241
                                                </td>
                                                <td>
                                                    
                                                    <strong>221</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    
                                                </td>
                                                <td>
                                                    <div>Ivan Hartley</div>
                                                    
                                                </td>
                                               
                                                <td class="text-center">
                                                    44536
                                                </td>
                                                <td>
                                                   
                                                    <strong>235</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    
                                                </td>
                                                <td>
                                                    <div>Kenway Marc</div>
                                                    
                                                </td>
                                               
                                                <td class="text-center">
                                                   34677
                                                </td>
                                                <td>
                                                   
                                                    <strong>201</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    
                                                </td>
                                                <td>
                                                    <div>Buck Angus</div>
        
                                                </td>
                                                
                                                <td class="text-center">
                                                    41663
                                                </td>
                                                <td>
                                                    
                                                    <strong>202</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                   
                                                </td>
                                                <td>
                                                    <div>Harold Fitzgerald</div>
                                                    
                                                </td>
                                               
                                                <td class="text-center">
                                                   43685
                                                </td>
                                                <td>
                                                    
                                                    <strong>221</strong>
                                                </td>
                                            </tr>
											<tr>
                                                <td class="text-center">
                                                   
                                                </td>
                                                <td>
                                                    <div>Quincy Miles</div>
                                                    
                                                </td>
                                               
                                                <td class="text-center">
                                                   41555
                                                </td>
                                                <td>
                                                    
                                                    <strong>219</strong>
                                                </td>
                                            </tr>
											<tr>
                                                <td class="text-center">
                                                   
                                                </td>
                                                <td>
                                                    <div>Kurt Channing</div>
                                                    
                                                </td>
                                               
                                                <td class="text-center">
                                                   32242
                                                </td>
                                                <td>
                                                    
                                                    <strong>223</strong>
                                                </td>
                                            </tr>
											<tr>
                                                <td class="text-center">
                                                   
                                                </td>
                                                <td>
                                                    <div>Hall Iver</div>
                                                    
                                                </td>
                                               
                                                <td class="text-center">
                                                   40255
                                                </td>
                                                <td>
                                                    
                                                    <strong>200</strong>
                                                </td>
                                            </tr>
											<tr>
                                                <td class="text-center">
                                                   
                                                </td>
                                                <td>
                                                    <div>Aiden Baird</div>
                                                    
                                                </td>
                                               
                                                <td class="text-center">
                                                   45866
                                                </td>
                                                <td>
                                                    
                                                    <strong>211</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </div>


            </div>
            <!-- /.conainer-fluid -->
        </main>

       


    </div>

    <footer class="app-footer">
        
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/pace/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>


    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>

	<!--line chart script -->
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script>
	Highcharts.chart('container', {

    title: {
        text: 'Sales and return, May,2017'
    },

   
	 yAxis: {
        title: {
            text: 'Quantity'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            pointStart: 1
        }
    },

    series: [{
        name: 'Sales',
        data: [<?php print_r($salesNoDay[0]);?>, 
			  <?php print_r($salesNoDay[1]);?>,
				<?php print_r($salesNoDay[2]);?>, 
				<?php print_r($salesNoDay[3]);?>, 
				<?php print_r($salesNoDay[4]);?>, 
				<?php print_r($salesNoDay[5]);?>,
				<?php print_r($salesNoDay[6]);?>, 
				<?php print_r($salesNoDay[7]);?>,
				<?php print_r($salesNoDay[8]);?>, 
				<?php print_r($salesNoDay[9]);?>, 
				<?php print_r($salesNoDay[10]);?>, 
				<?php print_r($salesNoDay[11]);?>,
				<?php print_r($salesNoDay[12]);?>,
				<?php print_r($salesNoDay[13]);?>, 
				<?php print_r($salesNoDay[14]);?>, 
				<?php print_r($salesNoDay[15]);?>, 
				<?php print_r($salesNoDay[16]);?>,
				<?php print_r($salesNoDay[17]);?>,
				<?php print_r($salesNoDay[18]);?>, 
				<?php print_r($salesNoDay[19]);?>, 
				<?php print_r($salesNoDay[20]);?>, 
				<?php print_r($salesNoDay[21]);?>,
				<?php print_r($salesNoDay[22]);?>,
				<?php print_r($salesNoDay[23]);?>, 
				<?php print_r($salesNoDay[24]);?>, 
				<?php print_r($salesNoDay[25]);?>, 
				<?php print_r($salesNoDay[26]);?>,
				<?php print_r($salesNoDay[27]);?>,
				<?php print_r($salesNoDay[28]);?>]
    },{
        name: 'Return',
        data: [<?php print_r($returnNoDay[0]);?>, 
			  <?php print_r($returnNoDay[1]);?>,
				<?php print_r($returnNoDay[2]);?>, 
				<?php print_r($returnNoDay[3]);?>, 
				<?php print_r($returnNoDay[4]);?>, 
				<?php print_r($returnNoDay[5]);?>,
				<?php print_r($returnNoDay[6]);?>, 
				<?php print_r($returnNoDay[7]);?>,
				<?php print_r($returnNoDay[8]);?>, 
				<?php print_r($returnNoDay[9]);?>, 
				<?php print_r($returnNoDay[10]);?>, 
				<?php print_r($returnNoDay[11]);?>,
				<?php print_r($returnNoDay[12]);?>,
				<?php print_r($returnNoDay[13]);?>, 
				<?php print_r($returnNoDay[14]);?>, 
				<?php print_r($returnNoDay[15]);?>, 
				<?php print_r($returnNoDay[16]);?>,
				<?php print_r($returnNoDay[17]);?>,
				<?php print_r($returnNoDay[18]);?>, 
				<?php print_r($returnNoDay[19]);?>, 
				<?php print_r($returnNoDay[20]);?>, 
				<?php print_r($returnNoDay[21]);?>,
				<?php print_r($returnNoDay[22]);?>,
				<?php print_r($returnNoDay[23]);?>, 
				<?php print_r($returnNoDay[24]);?>, 
				<?php print_r($returnNoDay[25]);?>, 
				<?php print_r($returnNoDay[26]);?>,
				<?php print_r($returnNoDay[27]);?>,
				<?php print_r($returnNoDay[28]);?>]
    }]

});
	</script>



    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>

</body>

</html>