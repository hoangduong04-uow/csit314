<?php 

function connectDB() {
  define ('DBSERVER', 'localhost:3306');
  define ('DBUSER', 'root');
  define ('DBPASS','');
  define ('DBNAME','csit314');
  
  $mysqli = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
    return $mysqli;
}

function getQuantity($conn,$tname) {
  // get the quantities of all the items
  $query = "SELECT * FROM ".$tname;
  $result = $conn->query ($query);
  $resultTable = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultTable[] = array('NAME' => $row['NAME'], 'QUANTITY' => $row['QUANTITY']);
    }
  }
  return $resultTable;
}

function calStoreExpense($conn,$tname) {
  $query = "SELECT SUM(COST_OF_GOODS) AS COST, SUM(FREIGHT_COSTS) AS FREIGHT, SUM(WAGES) AS WAGES, SUM(OVERHEAD) AS OVERHEAD FROM ".$tname;
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calStoreExpense"). $con->connect_error; 
  $row = $result->fetch_assoc();
  $expense = array('COST' => $row['COST'], 'FREIGHT' => $row['FREIGHT'], 'WAGES' => $row['WAGES'], 'OVERHEAD' => $row['OVERHEAD'] );
  return $expense;
}

function calTotalStoreExpense($conn,$tname) {
  $query = "SELECT SUM(COST_OF_GOODS) AS COST, SUM(FREIGHT_COSTS) AS FREIGHT, SUM(WAGES) AS WAGES, SUM(OVERHEAD) AS OVERHEAD FROM ".$tname;
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calTotalStoreExpense"). $con->connect_error; 
  $row = $result->fetch_assoc();
  $totalExpense = $row['COST'] + $row['FREIGHT'] + $row['WAGES'] + $row['OVERHEAD'];
  return $totalExpense;
}

?>