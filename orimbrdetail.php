<?php 
require("mysql/config.php");
$deptcode=$_GET['deptcode'];
require("mbr_select.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Equipments Pool</title>

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

<body>

<table border="1" cellspacing="0" cellpadding="2" align="left">
  <tbody>
    <tr>
      <td colspan="2" style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size: 36px; font-style: normal; font-weight: normal; text-align: center;">Department Detail</td>
    </tr>
    <tr>
      <td align="right" style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-style: normal; font-weight: normal; text-align: left; font-size: 24px;">&nbsp;&nbsp;&nbsp;Dept . Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</td>
      <td align="left" style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-style: normal; font-weight: normal; font-size: 24px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo($deptcode);?></td>
    </tr>
    <tr>
      <td align="right" style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-style: normal; font-weight: normal; text-align: left; font-size: 24px;">&nbsp;&nbsp;&nbsp;Department&nbsp;&nbsp; :&nbsp;&nbsp;</td>
      <td align="left" style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-size: 24px; font-style: normal; font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo($deptname);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    
    <tr>
	  
      <td colspan="2" align="center"><a href="mbr_list.php">
      <p><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','pic/back1me.png',1)"><img src="pic/back2me.png" alt="" width="280" height="74" id="Image3" align = "middle"></a></td>
    </tr>
	  
	  
	  
  </tbody>
</table>
<style type="text/css">
body {
    width: 1080px;
    height: 400px;
    margin: 100px auto;
    background-image: url("pic/bgid.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 65% auto;
}
	<p>&nbsp;</p>


</style>
	
	
	
<p>&nbsp;</p>
<?php require("brw_form.php");?><br />
<?php require("brw_list.php");?><br />
<?php require("fne_list.php");?><br />
</body>
</html>