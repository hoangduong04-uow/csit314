<?php

include('store_fn.php');
include('item_fn.php');

$conn = connectDB();
$profit = calProfit($conn);
$totalSales = calTotalSalesNo($conn);
$quantities = getQuantity($conn);
$storeExpense = calStoreExpense($conn);
//$returnNo = calReturn($conn);

$Info = array();
$Info['PROFIT'] = $profit;
$Info['EXPENSE'] = $storeExpense;
$Info['SALES'] = $totalSales;
$Info['QUANTITIES'] = $quantities;
//$Info['RETURN'] = $returnNo;


?>

<pre>
<?php
// Display everything here, put a pre tag around this to display all info
  //print_r($Info);
?>
</pre>
