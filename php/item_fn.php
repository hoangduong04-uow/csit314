<?php
function calTotalSalesNo($conn, $table)
{
  // total number of sale
  $query = "select sum(SALECOUNT) from $table";  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB (calTotalSalesNo)"). $con->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}

function calProfit($conn, $table)
{
  // profit
  $query = "select sum(PROFIT) from $table";  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB (calProfit)"). $conn->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}

function calReturn($conn, $table)
{
  // total number of return
  $query = "select sum(RETURN) from $table";  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB (calReturn)"). $con->connect_error; 
  //print_r ($result);
  return $result->fetch_row()[0];
}
?>