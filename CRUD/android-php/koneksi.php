<?php
  $dbserver="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="ppdp";
  mysql_connect($dbserver,$dbusername,$dbpassword)  or die(mysql_error());
  mysql_select_db($dbname) or die  (mysql_error());
?>