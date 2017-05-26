<?php
    include('../php/ceo/ceo-main.php');
    foreach ($allInfo as $store) {
        $totalStoreSales += $store['SALES'];
    }

    if(!isset($_POST['predicted_profit']))
        $predicted_profit = 1.1*$totalStoreSales;
    else
        $predicted_profit = $_POST['predicted_profit'];

    if(isset($_POST['submit'])) {
        $updated = true;
        $workforce = $_POST['workforce'];
        $hours = $_POST['hours'];
        $prices = $_POST['prices'];
        $staff = $_POST['staff'];
        $return = $_POST['return'];
        $satisfaction = $_POST['satisfaction'];
        $sales = $_POST['sales'];

        if(isset($_POST['workforce']))
            $predicted_profit = changeWorkforce($workforce, $predicted_profit);
        if(isset($_POST['hours']))
            $predicted_profit = changeHours($hours, $predicted_profit);
        if(isset($_POST['prices']))
            $predicted_profit = changePrices($prices, $predicted_profit);
        if(isset($_POST['staff']))
            $predicted_profit = changeStaff($staff, $predicted_profit);
        if(isset($_POST['return']))
            $predicted_profit = changeReturn($return, $predicted_profit);
        if(isset($_POST['satisfaction']))
            $predicted_profit = changeSat($satisfaction, $predicted_profit);
        if(isset($_POST['sale']))
            $predicted_profit = changeSale($workforce, $predicted_profit);
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

<script>
/*
var vProfit;
var vWork;
var vHours;
var vPrices;
var vBenefit;
var vReturn;
var vSatisfaction;
var vSales;

  function calcProfit(){
   
   vProfit = parseInt(document.getElementById("profitV").innerHTML);  
   vWork = parseInt(document.getElementById("workVal").value); 	
   vHours = parseInt(document.getElementById("openH").value); 
   vPrices = parseInt(document.getElementById("prices").value);
   vBenefit = parseInt(document.getElementById("benefit").value); 
   vReturn = parseInt(document.getElementById("return").value);
   vSatisfaction = parseInt(document.getElementById("satisfaction").value);
   vSales = parseInt(document.getElementById("sales").value);

     var newProfit = vProfit;
     newProfit = ;
     
	 document.getElementById("profitT").innerHTML = "Predicted Profit"; 
	 document.getElementById("profitV").innerHTML = vProfit; 
  }

  function strategy(){
   document.getElementById("profitT").innerHTML = "Target Profit";
     
   document.getElementById("workVal").value = 1;
   document.getElementById("openH").value =1 ; 
   document.getElementById("prices").value =1;
   document.getElementById("benefit").value =1; 
   document.getElementById("return").value=1;
   document.getElementById("satisfaction").value=1;
   document.getElementById("sales").value=1;
  }
*/




</script>	





	
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
                        <a class="nav-link" href="ceo-index.php"><i class="icon-star"></i> Summary </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="ceo-stores.php"><i class="icon-star"></i> Stores </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="ceo-newstore.html"><i class="icon-star"></i> Open New Store</a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="ceo-strategy.php"><i class="icon-star"></i> Strategic Planning</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">CEO</a>
                </li>
                <li class="breadcrumb-item active">Stores</li>

        
            </ol>

			
			<div class="container-fluid">





                <div class="animated fadeIn">
                    
                            
                    <!--/.row-->

                    <div class="row">
                        <div class="col-md-12">
						
							<div class="card">
                                <div class="card-header">
                                    Strategic Planning
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4" style="width: 900px;">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="row">
                                                <div class="col-sm-6"  style="width: 900px;">
                                                    <div class="callout callout-info">
                                                        <small id="profitT" class="text-muted">Predicted Profit</small>
                                                        <br>
                                                        <strong id="profitV" name="predicted_profit" class="h4"><?php echo $predicted_profit ?></strong>
														<br>
														<input type="submit" name="submit" value="Calculate Profit" onClick="calcProfit()">
                                                    </div>
                                                </div>
                                                <div class="chart-wrapper">
                                                <canvas id="sparkline-chart-1" width="900" height="30"></canvas>
                                                </div>
                                                
                                            </div>
                                            <!--/.row-->
                                            <hr class="mt-0" s style="width: 1100px;">
                                            <ul class="horizontal-bars">
                                                <li>
                                                    
                                                     No.Workforce: <input id="workVal" style="height:20px;" name="workforce" type="text"><span id="change"/>
                                                   
                                                    
                                                </li>
                                                <li>
                                                    
                                                     Operating hours: <input id="openH" style="height:20px;" name="hours" type="text"><span id="change"/>
                                                    
                                                   
                                                </li>
                                                <li>
                                                   
                                                        Product prices: <input id="prices" style="height:20px;" name="prices" type="text"></input><span id="change"/>
                                                   
                                                
                                                </li>
												 <li>
                                                   
                                                        Staff benefits: <input id="benefit" style="height:20px;" name="staff" type="text"><span id="change"/>
                                                    
                                                
                                                </li>
                                                <li>
                                                    
                                                        Return: <input id="return" style="height:20px;" name="return" type="text"><span id="change"/>
                                                    
                                                    
                                                </li>
                                                <li>
                                                  
                                                        Emp.Satisfaction: <input id="satisfaction" style="height:20px;" name="satisfaction" type="text"><span id="change"/>
                                                   
                                                    
                                                </li>
                                                <li>
                                                   
                                                        Sales: <input id="sales" style="height:20px;" name="sales" type="text"><span id="change"/>
                                                   
                                                    
                                                </li>
                                               
                                                
                                            </ul>
                                        </form>
                                        </div>
                                        
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