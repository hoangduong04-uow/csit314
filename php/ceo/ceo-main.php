<?php

  include_once('ceo-store-fn.php');
  include_once('ceo-item-fn.php');
  include_once('ceo-basic.php');

  $conn = connectDB();
  $allInfo = array();

  foreach ($store_list as $item => $store) {
    $allInfo[$item] = calAllInfo($conn,$item,$store);
  }

  function calAllInfo($conn,$cityName,$storeName)
  {
    // Items
    $totalSalesCount = calTotalSalesCount($conn,$cityName);
    $returnNo = calReturn($conn,$cityName);
    $quantities = getQuantity($conn,$cityName);

    // Stores
    $storeExpense = calStoreExpense($conn,$storeName);
    $totalStoreExpense = calTotalStoreExpense($conn,$storeName);
    $profit = calStoreProfit($conn, $storeName);

    // Add items details
    $Info = array();
    $Info['PROFIT'] = $profit;
    $Info['SALESNO'] = $totalSalesCount;
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
  print_r($allInfo);
?>
</pre>
