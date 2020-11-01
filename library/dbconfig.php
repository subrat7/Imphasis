<?php
$con=mysql_connect("localhost","root","") or die("server not found".mysql_error());
mysql_select_db("phpmysql1",$con) or die("Database not found".mysql_error());

//echo $con;
?>