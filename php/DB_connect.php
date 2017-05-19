<?php

include('store_fn.php');
include('item_fn.php');


function connectDB() {
  define ('DBSERVER', 'localhost:3306');
  define ('DBUSER', 'root');
  define ('DBPASS','root');
  define ('DBNAME','CSIT314');
  
  $mysqli = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
    return $mysqli;
}

$item_table = "ITEMS";
$store_table = "STORE";

$conn = connectDB();
$profit = calProfit($conn, $item_table);
$totalSales = calTotalSalesNo($conn, $item_table);
$quantities = getQuantity($conn, $item_table);
$storeExpense = calStoreExpense($conn, $store_table);
$totalStoreExpense = calTotalStoreExpense($conn, $store_table);
$totalReturn = calReturn($conn, $store_table);

$Info = array();
$Info['PROFIT'] = $profit;
$Info['EXPENSE'] = $storeExpense;
$Info['TOTAL EXPENSE'] = $totalStoreExpense;
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
