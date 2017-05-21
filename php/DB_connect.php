<?php

include('store_fn.php');
include('item_fn.php');

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
  print_r(calAllInfo($conn,"wollongong","store_data_wollongong"));
  print_r(calAllInfo($conn,"sydney","store_data_sydney"));
  print_r(calAllInfo($conn,"shellharbour","store_data_shellharbour"));
  print_r(calAllInfo($conn,"newcastle","store_data_newcastle"));
  print_r(calAllInfo($conn,"melbourne","store_data_melbourne"));
  print_r(calAllInfo($conn,"centralcoast","store_data_centralcoast"));
  print_r(calAllInfo($conn,"canberra","store_data_canberra"));
  print_r(calAllInfo($conn,"cairns","store_data_cairns"));
  print_r(calAllInfo($conn,"brisbane","store_data_brisbane"));
  print_r(calAllInfo($conn,"adelaide","store_data_adelaide"));
?>
</pre>
