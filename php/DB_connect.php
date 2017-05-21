<?php

include('store_fn.php');
include('item_fn.php');

$allInfo = array();
$conn = connectDB();

/*
$profit = calProfit($conn,"wollongong");
$totalSalesNo = calTotalSalesNo($conn,"wollongong");
$returnNo = calReturn($conn,"wollongong");
$quantities = getQuantity($conn,"wollongong");
$storeExpense = calStoreExpense($conn,"store_data_wollongong");
$totalStoreExpense = calTotalStoreExpense($conn,"store_data_wollongong");

$Info = array();
$Info['PROFIT'] = $profit;
$Info['SALESNO'] = $totalSalesNo;
$Info['RETURN'] = $returnNo;
$Info['EXPENSE'] = $storeExpense;
$Info['TOTAL EXPENSE'] = $totalStoreExpense;
//$Info['QUANTITIES'] = $quantities;
*/

function calAllInfo($conn,$cityName,$storeName)
{
	$profit = calProfit($conn,$cityName);
	$totalSalesNo = calTotalSalesNo($conn,$cityName);
	$returnNo = calReturn($conn,$cityName);
	$quantities = getQuantity($conn,$cityName);
	$storeExpense = calStoreExpense($conn,$storeName);
	$totalStoreExpense = calTotalStoreExpense($conn,$storeName);

	$Info = array();
	$Info['PROFIT'] = $profit;
	$Info['SALESNO'] = $totalSalesNo;
	$Info['RETURN'] = $returnNo;
	$Info['EXPENSE'] = $storeExpense;
	$Info['TOTAL EXPENSE'] = $totalStoreExpense;
	//$Info['QUANTITIES'] = $quantities;
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
