<?php

include('store_fn.php');
include('item_fn.php');


$allInfo = array();
$conn = connectDB();


function calAllInfo($conn,$cityName,$storeName)
{
  // Items
	$totalSalesNo = calTotalSalesNo($conn,$cityName);
	$returnNo = calReturn($conn,$cityName);
	$quantities = getQuantity($conn,$cityName);

  // Stores
	$storeExpense = calStoreExpense($conn,$storeName);
	$totalStoreExpense = calTotalStoreExpense($conn,$storeName);
	$profit = calProfit($conn, $cityName);

  // Add items details
	$Info = array();
	$Info['PROFIT'] = $profit;
	$Info['SALESNO'] = $totalSalesNo;
	$Info['RETURN'] = $returnNo;
  // Quantities are too long
	$Info['QUANTITIES'] = $quantities;
	$Info['TOTALQUANTITIES']=getTotalQuantity($conn,$cityName);

  //Add store details
	$Info['EXPENSE'] = $storeExpense;
    $Info['TOTAL EXPENSE'] = $totalStoreExpense;


	return $Info;
}


// Display everything here, put a pre tag around this to display all info
  $allInfo['wollongong'] = calAllInfo($conn,"wollongong","store_data_wollongong");
  $allInfo['sydney'] = calAllInfo($conn,"sydney","store_data_sydney");
  $allInfo['shellharbour'] = calAllInfo($conn,"shellharbour","store_data_shellharbour");
  $allInfo['newcastle'] = calAllInfo($conn,"newcastle","store_data_newcastle");
  $allInfo['melbourne'] = calAllInfo($conn,"melbourne","store_data_melbourne");
  $allInfo['centralcoast'] = calAllInfo($conn,"centralcoast","store_data_centralcoast");
  $allInfo['canberra'] = calAllInfo($conn,"canberra","store_data_canberra");
  $allInfo['cairns'] = calAllInfo($conn,"cairns","store_data_cairns");
  $allInfo['brisbane'] = calAllInfo($conn,"brisbane","store_data_brisbane");
  $allInfo['adelaide'] = calAllInfo($conn,"adelaide","store_data_adelaide");
  
 // print_r($allInfo);
 
 
 
function predictByReduceCost($conn,$tname="wollongong",$reducedCost)
{
  
  $query = "SELECT * FROM ".$tname;
	$result = $conn->query ($query);
	$resultTable = array();
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultTable[] = array('NAME' => $row['NAME'], 
							'TYPE'=>$row['TYPE'],
							'CODE'=>$row['CODE'],
							'SELLING_PRICE'=>$row['SELLING_PRICE'],
							'QUANTITY'=>$row['QUANTITY'],
							'SALECOUNT'=>$row['SALECOUNT'],
							'TOTALSALE'=>$row['TOTALSALE'],
							'COST_PRICE'=>($row['COST_PRICE']-$row['COST_PRICE']*reducedCost),
							'PROFIT' => ($row['SELLING_PRICE']-($row['COST_PRICE']-$row['COST_PRICE']*reducedCost))*$row['SALECOUNT'],
							'RETURN_ITEMS'=>$row['RETURN_ITEMS']);
    }
  }
  return $resultTable;
}


function predictByDecreaseReturns($conn,$tname="wollongong",$decreaseReturns)
{
  $query = "SELECT * FROM ".$tname;
	$result = $conn->query ($query);
	$resultTable = array();
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $resultTable[] = array('NAME' => $row['NAME'], 
							'TYPE'=>$row['TYPE'],
							'CODE'=>$row['CODE'],
							'SELLING_PRICE'=>$row['SELLING_PRICE'],
							'QUANTITY'=>$row['QUANTITY'],
							'SALECOUNT'=>$row['SALECOUNT'],
							'TOTALSALE'=>$row['TOTALSALE'],
							'COST_PRICE'=>$row['COST_PRICE'],
							'PROFIT' => $row['PROFIT'],
							'RETURN_ITEMS'=>$row['RETURN_ITEMS']);
    }
  }
  return $resultTable;
}    
  
  

function predictNextValue($values) {
    $count = count($values);
	$interval = 0;
    $i = 0;
    while ($i < $count - 1) {
      $interval += ($values[$i+1] - $values[$i]);
      $i++;
    }

    $interval_avg = $interval/($count-1);
    if ($values[$count-1] < $values[$count - 2])
      return $values[$count-1] - $interval_avg;
    else
      return $values[$count-1] + $interval_avg;
  }
  

?>

