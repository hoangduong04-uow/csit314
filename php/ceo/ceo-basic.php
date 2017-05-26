<?php

  $store_list = array();
  $store_list['adelaide'] = 'store_data_adelaide';
  $store_list['brisbane'] = 'store_data_brisbane';
  $store_list['cairns'] = 'store_data_cairns';
  $store_list['canberra'] = 'store_data_canberra';
  $store_list['centralcoast'] = 'store_data_centralcoast';
  $store_list['melbourne'] = 'store_data_melbourne';
  $store_list['newcastle'] = 'store_data_newcastle';
  $store_list['shellharbour'] = 'store_data_shellharbour';
  $store_list['sydney'] = 'store_data_sydney';
  $store_list['wollongong'] = 'store_data_wollongong';

  function connectDB() 
  {
    define ('DBSERVER', 'localhost:3306');
    define ('DBUSER', 'root');
    define ('DBPASS','root');
    define ('DBNAME','csit314');
    
    $mysqli = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
      return $mysqli;
  }

  function execQuery($conn, $query, $fname) 
  {
    // Execute query
    $result = $conn->query ($query);
    if (!$result) die ("Unable to query DB - $fname"). $conn->connect_error; 
    return $result;
  }  

  function predictNextValue($values) {
    $count = count($values);

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

  function changeWorkforce ($workforce, $value) {
    return change ($workforce, $value, 0.5);
  }
  
  function changeHours ($hours, $value ){
    return change ($hours, $value, 0.8); 
  }

  function changeStaff ($staff, $value ){
    return change ($staff, $value, 0.3); 
  }

  function changeSat ($sat, $value ){
    return change ($sat, $value, 0.2); 
  }

  function changeReturn ($return, $value ){
    return change ($return, $value, 0.4); 
  }

  function changeSale ($sale, $value ){
    return change ($sale, $value, 1.1); 
  }

  function changePrices ($prices, $value ){
    return change ($prices, $value, 1.1); 
  }

  function change ($param, $value, $scale) {
    $pct = $param/100;

    if ($pct < -0.5)
      $value += $value*$pct*$scale;
    else if ($pct > -0.5 && $pct < 0)
      $value -= $value*$pct*$scale;
    else if ($pct > 0 && $pct < 0.5)
      $value += $value*$pct*$scale;
    else if ($pct > 0.5)
      $value -= $value*$pct*$scale; 

    return $value; 
  }

?>