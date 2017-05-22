<?php

  function calPotentialProfit ($conn, $tname) {
    $query = "SELECT * FROM $tname";
    $result = execQuery($conn, $query, 'calPotentialProfit');
    

  }  

  function execQuery($conn, $query, $fname) {

  // Execute query
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calStoreExpense"). $conn->connect_error; 
  return $result;
}
?>