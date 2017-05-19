<?php
function calTotalSalesNo($conn)
{
  // total number of sale
  $query = "select sum(SALECOUNT) from items";  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB"). $con->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}

function calProfit($conn)
{
  // profit
  $query = "select sum(PROFIT) from items";  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB"). $conn->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}

function calReturn()
{
  // total number of return
  $query = "select sum(RETURN) from items";  
  $result = $con->query ($query);
  if (!$result) die ("Unable to query DB"). $con->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}
?>