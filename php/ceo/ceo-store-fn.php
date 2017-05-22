<?php 
  include_once('ceo-basic.php');

function calStoreExpense($conn,$tname) {
  $query = "SELECT SUM(FREIGHT_COSTS) AS FREIGHT, SUM(WAGES) AS WAGES, SUM(OVERHEAD) AS OVERHEAD FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreExpense");
  $row = $result->fetch_assoc();
  $expense = array('FREIGHT' => $row['FREIGHT'], 'WAGES' => $row['WAGES'], 'OVERHEAD' => $row['OVERHEAD'] );
  return $expense;
}

function calTotalStoreExpense($conn,$tname) {
  $query = "SELECT SUM(FREIGHT_COSTS) AS FREIGHT, SUM(WAGES) AS WAGES, SUM(OVERHEAD) AS OVERHEAD FROM ".$tname;
  $result = execQuery($conn, $query, "calTotalStoreExpense");
  $row = $result->fetch_assoc();
  $totalExpense = $row['FREIGHT'] + $row['WAGES'] + $row['OVERHEAD'];
  return $totalExpense;
}

function calStoreSale($conn, $tname) {

  // Calculate the total sale of the store in a month
  $query = "SELECT SUM(SALES) AS TOTALSALE FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreSale");
  return $result->fetch_row()[0];
}

function calStoreReturn($conn, $tname) {

  // Calculate the total return of the store in a month
  $query = "SELECT SUM(RETURN_ITEMS) AS TOTALRETURN FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreReturn - $tname");
  return $result->fetch_row()[0];
}

function calStoreProfit($conn, $tname) {

  // Calculate the total profit of the store in a month
  $query = "SELECT SUM(PROFIT) AS TOTALPROFIT FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreProfit");
  return $result->fetch_row()[0];  
}



?>