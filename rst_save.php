<?php
require('mysql/config.php');

if(isset($_GET['deptcode'])) {
	$deptcode=$_GET['deptcode'];
}else{
	$deptcode="";
}

if(isset($_GET['mecode'])) {
	$mecode=$_GET['mecode'];
}else{
	$mecode="";
}

$sql="SELECT DATEDIFF(NOW(),tlend) FROM transections WHERE mecode='$mecode' AND deptcode='$deptcode' AND tstatus='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$numday=$record[0];
require('mysql/unconn.php');

if($numday>=0){
	$tstatus=2;
}else{
	$tstatus=0;
}

$sql="UPDATE transections SET trestore=NOW(), tstatus='$tstatus' WHERE mecode='$mecode' AND deptcode='$deptcode' AND tstatus='1'";
//AND deptcode='$deptcode'
require('mysql/connect.php');
if($result==1){
	$msg="การส่งคืนเครื่องมือเสร็จสิ้น";
	$v1=1;
}else{
	$msg="การส่งคืนเครื่องมือผิดพลาด";
	$v1=0;
}
require('mysql/unconn.php');

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Restore Equipment</title>
</head>
<body>
<script language="javascript">
var v1=<?php echo($v1);?>;
alert('<?php echo($msg);?>');
if(v1==1){
	window.location.replace("mbr_detail.php?deptcode=<?php echo($deptcode);?>");
}else{
	window.history.back();
}
</script>
</body>
</html>