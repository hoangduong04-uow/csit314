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
 
function calTotalSalesNo($conn,$tname)
{
  // total number of sale
  $query = "select sum(SALECOUNT) from ".$tname;  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calTotalSalesNo"). $con->connect_error; 
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
  if (!$result) die ("Unable to query DB - calReturn"). $con->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}
?>