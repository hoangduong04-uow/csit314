 <?php

  include_once('ceo-basic.php');

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
 
function calTotalSalesCount($conn,$tname)
{
  // total number of sale
  //echo $tname." ";
  $query = "select sum(SALECOUNT) from ".$tname;  
  $result = $conn->query ($query);
  if (!$result) die ("Unable to query DB - calTotalSalesNo"). $conn->connect_error; 
  //echo $result->fetch_row()[0]." ";
  return $result->fetch_row()[0];
}

function calItemProfit($conn,$tname)
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