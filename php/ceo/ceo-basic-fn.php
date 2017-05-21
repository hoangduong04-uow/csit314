<?php

  function connectDB() {
    define ('DBSERVER', 'localhost:3306');
    define ('DBUSER', 'root');
    define ('DBPASS','root');
    define ('DBNAME','csit314');
    
    $mysqli = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
      return $mysqli;
  }

  function execQuery($conn, $query, $fname) {

    // Execute query
    $result = $conn->query ($query);
    if (!$result) die ("Unable to query DB - $fname"). $conn->connect_error; 
    return $result;
  }  

?>