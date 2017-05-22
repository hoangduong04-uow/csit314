<?php

  $store_list = array();
  $store_list['wollongong'] = 'store_data_wollongong';
  $store_list['sydney'] = 'store_data_sydney';
  $store_list['shellharbour'] = 'store_data_shellharbour';
  $store_list['newcastle'] = 'store_data_newcastle';
  $store_list['melbourne'] = 'store_data_melbourne';
  $store_list['centralcoast'] = 'store_data_centralcoast';
  $store_list['canberra'] = 'store_data_canberra';
  $store_list['cairns'] = 'store_data_cairns';
  $store_list['brisbane'] = 'store_data_brisbane';
  $store_list['adelaide'] = 'store_data_adelaide';

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

?>