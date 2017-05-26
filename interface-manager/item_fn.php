 <?php

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

function calSaleNoByPrice($conn,$tname,$range1,$range2)
{
  $query = "select sum(SALECOUNT) from ".$tname." where SELLING_PRICE>=".$range1." and SELLING_PRICE<".$range2;  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calSaleNoByPrice"). $conn->connect_error; 
  return $result->fetch_row()[0];
}

function getTopProfitItem($conn,$tname)
{
	$query = "SELECT * FROM ".$tname." order by PROFIT DESC";
	$result = $conn->query ($query);
	$resultTable = array();
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultTable[] = array('NAME' => $row['NAME'], 'PROFIT' => $row['PROFIT']);
    }
  }
  return $resultTable;
}

function getTopItemBySaleCount($conn,$tname)
{
	$query = "SELECT * FROM ".$tname." order by SALECOUNT DESC";
	$result = $conn->query ($query);
	$resultTable = array();
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultTable[] = array('NAME' => $row['NAME'], 'SALECOUNT' => $row['SALECOUNT']);
    }
  }
  return $resultTable;
}

function getLowItemBySaleCount($conn,$tname)
{
	$query = "SELECT * FROM ".$tname." order by SALECOUNT ASC";
	$result = $conn->query ($query);
	$resultTable = array();
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultTable[] = array('NAME' => $row['NAME'], 'SALECOUNT' => $row['SALECOUNT']);
    }
  }
  return $resultTable;
}

function getTotalQuantity($conn,$tname)
{
// total quantity
  $query = "select sum(QUANTITY) from ".$tname;  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - getTotalQuantity"). $conn->connect_error; 
  return $result->fetch_row()[0];
}

function getAllInfo($conn,$tname) {
  // get the quantities of all the items
  $query = "SELECT * FROM ".$tname;
  $result = $conn->query ($query);
  $resultTable = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultTable[] = $row;
    }
  }
  return $resultTable;
}
  
 
function calTotalSalesNo($conn, $tname)
{
  // total number of sale
  $query = "select sum(SALECOUNT) from ".$tname;  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calTotalSalesNo"). $conn->connect_error; 
  return $result->fetch_row()[0];
}

function calProfit($conn,$tname)
{
  // profit
  $query = "select sum(PROFIT) from ".$tname;  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB! - calProfit"). $conn->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}

function calReturn($conn,$tname)
{
  // total number of return
  $query = "select sum(RETURN_ITEMS) from ".$tname;  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calReturn"). $conn->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}












?>