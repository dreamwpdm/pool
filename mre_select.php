<?php
$sql="SELECT deptcoder, deptnamer FROM depts WHERE deptcoder = '$deptcoder'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$deptcoder=$record[0];
$deptnamer=$record[1];
require('mysql/unconn.php');
?>