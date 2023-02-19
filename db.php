<?php
  $hostname="localhost";
  $dbuserid="ezweb";//데이터베이스 id
  $dbpasswd="dejayep*!2930";
  $dbname="ezweb";//데이터베이스 명
 
  $mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);

  if ($mysqli->connect_errno) {
      die('Connect Error: '.$mysqli->connect_error);
  } else{
    echo '성공';
  }

  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );

?>
