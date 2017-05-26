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
    $quantities = getQuantity($conn,$cityName);
    $saleCounts = calTotalSalesCount($conn, $cityName);

    // Stores
    $storeReturn = calStoreReturn($conn,$storeName);
    $storeSale = calStoreSale($conn,$storeName);
    $storeExpense = calStoreExpense($conn,$storeName);
    $totalStoreExpense = calTotalStoreExpense($conn,$storeName);
    $profit = calStoreProfit($conn, $storeName);

    // Add items details
    $Info = array();
    $Info['PROFIT'] = $profit;
    // Quantities are too long
    //$Info['QUANTITIES'] = $quantities;

    //Add store details
    $Info['SALES'] = $storeSale;
    $Info['SALESCOUNT'] = $saleCounts;
    $Info['EXPENSE'] = $storeExpense;
    $Info['TOTAL EXPENSE'] = $totalStoreExpense;
    $Info['RETURN'] = $storeReturn;


    return $Info;
  }

?>

