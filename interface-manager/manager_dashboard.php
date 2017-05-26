 <?php
 


$allStatistics = array();


//the statistics for their store
function calStatistics($conn, $storeName)
{
	// here should write cityname instead of storename
	$totalSalesNo = calTotalSalesNo($conn, $storeName);
	$returnNo = calReturn($conn,$storeName);
	
	//randomly get the number of customer
	$customerNo=$totalSalesNo+($totalSalesNo*rand(1,3));

	$Info = array();
	$Info['SALESNO'] = $totalSalesNo;
	$Info['RETURN'] = $returnNo;
	$Info['CUSTOMERNO'] = $customerNo;
	return $Info;	
	
}

 

function reduceCosts($conn,$tname,$reducePrice)
{
  
  $query = "select * from ".$tname." where RETURN_ITEMS<2 AND CAST(PROFIT as INT)<(SELECT AVG(PROFIT) FROM ".$tname.")";
  $result = execQuery($conn, $query, "reduceCosts");
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      print_r($row);
    }
  }
  
}

function increasePrice($conn,$increasePrice)
{
  $query = "select * from ".$tname." where ";
  $result = execQuery($conn, $query, "reduceCosts");
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      print_r($row);
    }
  }
}


function reduceWorkforce($conn,$reduceNum)
{
	
}


function reduceReturns($conn,$reduceNum)
{
	
}




?>


<?php  
    //Manager dashboard shows the statistics for their store
  $allStatistics['managerStatWollongong']=calStatistics($conn,"wollongong");
  $allStatistics['managerStatSydney']=calStatistics($conn,"sydney");
  $allStatistics['managerStatShellharbour']=calStatistics($conn,"shellharbour");
  $allStatistics['managerStatNewcastle']=calStatistics($conn,"newcastle");
  $allStatistics['managerStatMelbourne']=calStatistics($conn,"melbourne");
  $allStatistics['managerStatCentralcoast']=calStatistics($conn,"centralcoast");
  $allStatistics['managerStatCanberra']=calStatistics($conn,"canberra");
  $allStatistics['managerStatCairns']=calStatistics($conn,"cairns");
  $allStatistics['managerStatBrisbane']=calStatistics($conn,"brisbane");
  $allStatistics['managerStatAdelaide']=calStatistics($conn,"adelaide");
  
  //print_r($allStatistics);
  
?>
















