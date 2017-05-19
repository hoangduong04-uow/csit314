<?php

include('store_fn.php');
include('item_fn.php');

$conn = connectDB();
$profit = calProfit($conn);
$totalSales = calTotalSalesNo($conn);
$quantities = getQuantity($conn);
$storeExpense = calStoreExpense($conn);


?>


<pre>
<?php
// Display everything here
  print_r($storeExpense);
?>
</pre>

