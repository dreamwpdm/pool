<?php 
require("mysql/config.php");
$sql="SELECT deptcoder, deptnamer FROM depts";
if(isset($_GET['dcr'])){
	$dcr=$_GET['dcr'];
	$sql.=" WHERE deptcoder='$dcr' OR deptcoder LIKE '%$dcr%'";
}else{
	$dcr="";
	$sql.=" WHERE deptcoder IS NULL";
}
require("mysql/connect.php");
?>



<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<style type="text/css">
@media (max-width: 1280px){
}
</style>

<style type="text/css">
body {
    width: 1080px;
    height: 2000px;
    margin: 100px auto;
    background-image: url("pic/bgid.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 65% auto;
}
	<p>&nbsp;</p>


</style>

<div class="container-fluid"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 36px; text-align: center;">Department&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
   
    <form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="dcr" id="dcr" value="<?php echo($dcr);?>">
      &nbsp;&nbsp;<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap-4.3.1.js" type="text/javascript"></script>



<p>&nbsp;</p>
<table table class="table table-hover table-bordered" align="right">
    <tr class="bg-dark text-white">
      <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 24px; text-align: center;">Dept . Code</span></td>
      <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 24px; text-align: center;">Department</span></td>
  </tr>
	<?php while($record=mysqli_fetch_array($result)){
	?>
    <tr>
      <td style="text-align: center"><a href="mre_detail.php?deptcoder=<?php echo($record[0]);?>"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: normal; font-size: 24px; text-align: center;"><?php echo($record[0]);?></span></a></td>
      <td><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: normal; font-size: 24px; text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo($record[1]);?></span></td>
  </tr>
	<?php
	}
	require("mysql/unconn.php");
	?>
	

	
</table>
	
	<p>&nbsp;</p>
    <p>&nbsp;</p>


	
	
		
	
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap-4.3.1.js" type="text/javascript"></script>
<script type="text/javascript">

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
	


</head>

<body style="text-align: center" onLoad="MM_preloadImages('pic/back1.png')">
<p><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','pic/back1.png',1)"><img src="pic/back2.png" alt="" width="320" height="212" id="Image3" align = "middle"></a>

</body>
</html>


