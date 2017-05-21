<?php
  include_once('ceo-basic.php');
  $conn = connectDB();

  $avg_profit = calAvgStoreProfit($conn, $store_list);
  echo "Potential Profit: ".$avg_profit;

  function calAvgStoreProfit($connection, $list) {
    $total_profit = 0;
    $store_no = 0;
    foreach ($list as $item => $store) {
      $query = "SELECT SUM(PROFIT) AS PROFIT FROM ".$store;
      $result = execQuery($connection, $query, 'calAvgStoreProfit');
      $total_profit += $result->fetch_row()[0];
      $store_no++;
    }

    return $total_profit/$store_no;
  }

  function calPotentialStoreProfit ($conn, $tname) {
    $query = "SELECT * FROM $tname";
    $result = execQuery($conn, $query, 'calPotentialProfit');
    

  }  


?>