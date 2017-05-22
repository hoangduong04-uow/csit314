 <?php
 
include('store_fn.php');
include('item_fn.php');



function calStatistics($conn,$storeName)
{
	// here should write cityname instead of storename
	$totalSalesNo = calTotalSalesNo($conn,$storeName);
	$returnNo = calReturn($conn,$storeName);
	
	// randomly get the number of customer
	$customerNo=$totalSalesNo+($totalSalesNo*rand(1,3));

	$Info = array();
	$Info['SALESNO'] = $totalSalesNo;
	$Info['RETURN'] = $returnNo;
	$Info['CUSTOMERNO'] = $customerNo;
	return $Info;
	
	
	
	
	
}



?>