<?php 
require('mysql/config.php');

if(isset($_POST['deptcode'])) {
	$deptcode=$_POST['deptcode'];
}else{
	$deptcode="";
}

if(isset($_POST['mecode'])) {
	$mecode=$_POST['mecode'];
}else{
	$mecode="";
}

$msg="";
$v1=0;

$sql="SELECT COUNT(mecode) FROM equipments WHERE mecode='$mecode'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$equipmentrow=$record[0];
require('mysql/unconn.php');

$sql="SELECT COUNT(mecode) FROM transections WHERE mecode='$mecode' AND tstatus='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$lending=$record[0];
require('mysql/unconn.php');

$sql="SELECT COUNT(mecode) FROM transections WHERE mecode='$mecode' AND tstatus='2'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$waiting=$record[0];
require('mysql/unconn.php');

$sql="SELECT COUNT(deptcode) FROM transections WHERE deptcode='$deptcode' AND tstatus='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$holding=$record[0];
require('mysql/unconn.php');

if($equipmentrow<1){
	$msg="ME Code ไม่ถูกต้อง";
	$v1=0;
}elseif($lending>0){
	$msg="เครื่องมือนี้ถูกยืมแล้ว";
	$v1=0;
}elseif($waiting>0){
	$msg="เครื่องมือนี้ยังไม่ได้ Verify";
	$v1=0;
}elseif($holding>=300){
	$msg="แผนกนี้ยืมเครื่องมืออยู่ 300 เครื่องแล้ว";
	$v1=0;
}else{
	$sql="INSERT INTO transections(deptcode,mecode,tlend,tstatus) VALUES('$deptcode','$mecode',NOW(),'1')";
	require('mysql/connect.php');
	if($result==1){
		$msg="การยืมเครื่องมือเสร็จสิ้น";
		$v1=1;
	}else{
		$msg="การยืมเครื่องมือผิดพลาด";
		$v1=0;
	}
	require('mysql/unconn.php');
}
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
	window.location.replace("mbr_detail.php?deptcode=<?php echo($deptcode);?>");
}else{
	window.history.back();
}
</script>	
</body>
</html>