<?php
    include('../php/ceo/ceo-main.php');

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
        <a class="navbar-brand" href="#"></a>
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
                        <a class="nav-link" href="ceo-index.html"><i class="icon-star"></i> Summary </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="ceo-stores.html"><i class="icon-star"></i> Stores </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="ceo-newstore.html"><i class="icon-star"></i> Open New Store</a>
                    </li>

                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="./ceo-index.php">CEO</a>
                </li>
                <li class="breadcrumb-item active">Stores</li>

        
            </ol>

			
			<div class="container-fluid">





                <div class="animated fadeIn">
                    
                            
                    <!--/.row-->

                    <div class="row">
                        <div class="col-md-12">
						
						<!--Brisbane Store -->
                            <div class="card">
                                <div class="card-header">
                                    Brisbane
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                   
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Cairns Store -->
							<div class="card">
                                <div class="card-header">
                                    Cairns
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
      
                                                
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Canberra Store -->
							<div class="card">
                                <div class="card-header">
                                    Canberra
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                   
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Central Coast -->
							<div class="card">
                                <div class="card-header">
                                    Central Coast
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!--Melbourne Store -->
							
							<div class="card">
                                <div class="card-header">
                                    Melbourne
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Newcastle Store -->
							
							<div class="card">
                                <div class="card-header">
                                    Newcastle Store
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Shellharbour Store -->
							
							<div class="card">
                                <div class="card-header">
                                    Shellharbour
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Sydney Store -->
							
							<div class="card">
                                <div class="card-header">
                                    Sydney
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                  
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Wollongong Store -->
							
							<div class="card">
                                <div class="card-header">
                                    Wollongong
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                   
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
                                </div>
                            </div>
							
							<!-- Adelaide -->
							<div class="card">
                                <div class="card-header">
                                    Adelaide
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-info">
                                                        <small class="text-muted">Sales</small>
                                                        <br>
                                                        <strong class="h4">9,123</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-danger">
                                                        <small class="text-muted">Return</small>
                                                        <br>
                                                        <strong class="h4">22,643</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    <div class="title">
                                                        Monday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Tuesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Wednesday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Thursday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Friday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Saturday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        Sunday
                                                    </div>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="legend">
                                                    <span class="badge badge-pill badge-info"></span>
                                                    <small>Sales</small>&nbsp;
                                                    <span class="badge badge-pill badge-danger"></span>
                                                    <small>Return</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout callout-warning">
                                                        <small class="text-muted">Customer Gender</small>
                                                        <br>
                                                        <strong class="h4">78,623</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <!--/.col-->
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0">
                                            <ul class="horizontal-bars type-2">
                                                <li>
                                                    <i class="icon-user"></i>
                                                    <span class="title">Male</span>
                                                    <span class="value">43%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user-female"></i>
                                                    <span class="title">Female</span>
                                                    <span class="value">37%</span>
                                                    <div class="bars">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="callout">
                                                        <small class="text-muted">CTR</small>
                                                        <br>
                                                        <strong class="h4">23%</strong>
                                                        <div class="chart-wrapper">
                                                            <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.col-->
                                                <div class="col-sm-6">
                                                    <div class="callout callout-primary">
                                                        <small class="text-muted">Bounce Rate</small>
                                                        <br>
                                                        <strong class="h4">5%</strong>
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
                                                        <div class="title">iMac 4k</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-info"></i>
                                                    <div class="desc">
                                                        <div class="title">Samsung Galaxy Edge</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.224</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-screen-smartphone bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">iPhone 6S</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>1.163</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-user bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Premium accounts</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>928</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-social-spotify bg-success"></i>
                                                    <div class="desc">
                                                        <div class="title">Spotify Subscriptions</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Sold this week</div>
                                                        <strong>893</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-cloud-download bg-danger"></i>
                                                    <div class="desc">
                                                        <div class="title">Ebook</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Downloads</div>
                                                        <strong>121.924</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="icon-camera bg-warning"></i>
                                                    <div class="desc">
                                                        <div class="title">Photos</div>
                                                        
                                                    </div>
                                                    <div class="value">
                                                        <div class="small text-muted">Uploaded</div>
                                                        <strong>12.125</strong>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="divider text-center">
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                    <!--/.row-->
                               
                                    
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