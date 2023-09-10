<?php
$sql="SELECT deptcode, deptname FROM departments WHERE deptcode = '$deptcode'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$deptcode=$record[0];
$deptname=$record[1];
require('mysql/unconn.php');
?>