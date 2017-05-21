 <?php
 
include('store_fn.php');
include('item_fn.php');


$allStatistics = array();
$conn = connectDB();

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


/*
function increaseProfits($conn)
{
   
  $query = "select * from ".$tname." where ";
  $result = execQuery($conn, $query, "calTotalStoreExpense");
  $row = $result->fetch_assoc();
  $totalExpense = $row['FREIGHT'] + $row['WAGES'] + $row['OVERHEAD'];
  return $totalExpense;
}
*/


?>


<pre>

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
  
  print_r($allStatistics);
  
?>
</pre>



<pre>
<?php  
    //Manager dashboard is used as predictive tool:
	
 
  
?>
</pre>













