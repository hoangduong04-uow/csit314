<?php 


function connectDB() {
  define ('DBSERVER', 'localhost:3306');
  define ('DBUSER', 'root');
  define ('DBPASS','');
  define ('DBNAME','csit314');
  
  $mysqli = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
   return $mysqli;
}



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

function calStoreSaleDay($conn, $tname)
{
  $query = "SELECT SUM(SALECOUNT) FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreSaleDay");
  $totalSaleNo=$result->fetch_row()[0];
  for($i=0;$i<29;$i++)
  {
	  $salesNoDay[]= rand(($totalSaleNo/29)/2,($totalSaleNo/29));
  }
  return $salesNoDay;
}

function calStoreReturn($conn, $tname) {

  // Calculate the total sale of the store in a month
  $query = "SELECT SUM(RETURN) AS TOTALRETURN FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreReturn");
  return $result->fetch_row()[0];
}

function calStoreReturnDay($conn, $tname)
{
  $query = "SELECT * FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreReturnDay");
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
	{
	  $returnNoDay[]= $row['RETURN_ITEMS'];
	}
  }
  return $returnNoDay;
}


function calStoreProfit($conn, $tname) {

  // Calculate the total sale of the store in a month
  $query = "SELECT SUM(PROFIT) AS TOTALPROFIT FROM ".$tname;
  $result = execQuery($conn, $query, "calStoreProfit");
  return $result->fetch_row()[0];  
}


function execQuery($conn, $query, $fname) {

  // Execute query
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - ".$fname). $conn->connect_error; 
  return $result;
}

?>