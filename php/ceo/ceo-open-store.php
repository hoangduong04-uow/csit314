<?php
  include_once('ceo-basic.php');
  $conn = connectDB();

  $avg_profit = calAvgStoreProfit($conn, $store_list);
  $profit = calPotentialStoreProfit($conn, 'open_store', 'Mackay');
  echo $profit;

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

  function calPotentialStoreProfit ($conn, $tname, $cityName) {
    $query = "SELECT * FROM ".$tname." WHERE CITY=\"".$cityName."\";";
    $result = execQuery($conn, $query, 'calPotentialStoreProfit');
    $row = $result->fetch_assoc();
    
    // Assuming that on average lease is $300/day and 
    // customer paying $50 per month to buy the items from the store and
    // Expense is equal to 50% of the amount customer paid.
    $population = $row['POPULATION'];
    $lease = $row['LEASE'];
    $competition = $row['COMPETITION'];

    $sale = 50*$population*$lease;

    // Assuming each competitor will reduce the sale by 7%
    $profit = $sale - ($sale/2) - (($sale*$competition*7)/100);
    return $profit;
  }  


?>