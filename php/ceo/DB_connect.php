<?php

include('store_fn.php');
include('item_fn.php');


$allInfo = array();
$conn = connectDB();


function calAllInfo($conn,$cityName,$storeName)
{
  // Items
	$totalSalesNo = calTotalSalesNo($conn,$cityName);
	$returnNo = calReturn($conn,$cityName);
	$quantities = getQuantity($conn,$cityName);

  // Stores
	$storeExpense = calStoreExpense($conn,$storeName);
	$totalStoreExpense = calTotalStoreExpense($conn,$storeName);
  $profit = calProfit($conn, $cityName);

  // Add items details
	$Info = array();
	$Info['PROFIT'] = $profit;
	$Info['SALESNO'] = $totalSalesNo;
	$Info['RETURN'] = $returnNo;
  // Quantities are too long
  //$Info['QUANTITIES'] = $quantities;

  //Add store details
	$Info['EXPENSE'] = $storeExpense;
  $Info['TOTAL EXPENSE'] = $totalStoreExpense;


	return $Info;
	
}

?>

<pre>
<?php
// Display everything here, put a pre tag around this to display all info
  $allInfo['wollongong'] = calAllInfo($conn,"wollongong","store_data_wollongong");
  $allInfo['sydney'] = calAllInfo($conn,"sydney","store_data_sydney");
  $allInfo['shellhabour'] = calAllInfo($conn,"shellharbour","store_data_shellharbour");
  $allInfo['newcastle'] = calAllInfo($conn,"newcastle","store_data_newcastle");
  $allInfo['melbourne'] = calAllInfo($conn,"melbourne","store_data_melbourne");
  $allInfo['centralcoast'] = calAllInfo($conn,"centralcoast","store_data_centralcoast");
  $allInfo['canberra'] = calAllInfo($conn,"canberra","store_data_canberra");
  $allInfo['cairns'] = calAllInfo($conn,"cairns","store_data_cairns");
  $allInfo['brisbane'] = calAllInfo($conn,"brisbane","store_data_brisbane");
  $allInfo['adelaide'] = calAllInfo($conn,"adelaide","store_data_adelaide");
  
  print_r($allInfo);
  
  
  
?>
</pre>
