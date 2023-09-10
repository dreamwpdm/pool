<?php 
require('mysql/config.php');

if(isset($_POST['deptcoder'])) {
	$deptcoder=$_POST['deptcoder'];
}else{
	$deptcoder="";
}

if(isset($_POST['mecode'])) {
	$mecode=$_POST['mecode'];
}else{
	$mecode="";
}

$msg="";
$v1=0;

$sql="SELECT DATEDIFF(NOW(),tlend) FROM transections WHERE mecode='$mecode' AND deptcoder='$deptcoder' AND tstatus='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$numday=$record[0];
require('mysql/unconn.php');

if($numday>=0){
	$tstatus=2;
}else{
	$tstatus=0;
}

$sql="UPDATE transections SET trestore=NOW(), tstatus='$tstatus' WHERE mecode='$mecode' AND deptcoder='$deptcoder' AND tstatus='1'";
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
<title>Equipments Pool</title>
</head>
<body>
<script language="javascript">
var v1=<?php echo($v1);?>;
alert('<?php echo($msg);?>');
if(v1==1){
	window.location.replace("mre_detail.php?deptcoder=<?php echo($deptcoder);?>");
}else{
	window.history.back();
}
</script>	
</body>
</html>