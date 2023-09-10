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

if(isset($_GET['tlend'])) {
	$tlend=$_GET['tlend'];
}else{
	$tlend="";
}

$sql="UPDATE transections SET tstatus='0' WHERE mecode='$mecode' AND deptcode='$deptcode' AND tlend='$tlend'";
require('mysql/connect.php');
if($result==1){
	$msg="การ Verify เครื่องมือเสร็จสิ้น";
	$v1=1;
}else{
	$msg="การ Verify เครื่องมือผิดพลาด";
	$v1=0;
}
require('mysql/unconn.php');

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Waiting Verify</title>
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