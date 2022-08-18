<?php

/* MySQL connection setup */

$CONNECT["mysql_user"]='username';
$CONNECT["mysql_pass"]='password';
$CONNECT["hostname"]='localhost';
$CONNECT["mysql_database"]='mydatabase';
$CONNECT["data_table"]='demographics';

/* Connect to MySQL */

$mysqli = new mysqli($CONNECT["hostname"], $CONNECT["mysql_user"], $CONNECT["mysql_pass"],$CONNECT["mysql_database"]);

/* Check the connection */

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
