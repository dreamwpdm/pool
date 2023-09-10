<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center" bordercolor="none">
  <tbody>
    <tr>
      <td style="text-align: center">
		<p><img src="pic/waiting.png" width="432" height="75" alt=""/></p>
		<table table class="table table-hover table-bordered" align="center">
		  <tr class="bg-success text-white">
     <td height="50" style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">ME Code</span></td>
  <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">Equipments</span></td>
  <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">Borrow Date</span></td>
  <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">Return Date</span></td>
  <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">&nbsp;&nbsp;&nbsp;Verify&nbsp;&nbsp;&nbsp;</span></td>
   </tr>
<?php
$sql="SELECT equipments.mecode, equipments.ename, transections.tlend, DATE_ADD(transections.tlend, INTERVAL 1 DAY) AS deadline, transections.trestore, DATEDIFF(transections.trestore,transections.tlend)-1 AS late FROM equipments, transections WHERE equipments.mecode=transections.mecode AND transections.deptcode='$deptcode' AND transections.tstatus='2'";
//echo($sql);
 require('mysql/connect.php');
 while($record=mysqli_fetch_array($result)){	
?>
   <tr>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">BNH_ME&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><?php echo($record[0]);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><?php echo($record[1]);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><?php echo date_format(date_create($record[2]),"d/m/Y");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><?php echo date_format(date_create($record[4]),"d/m/Y");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
	 <td>&nbsp;&nbsp;&nbsp;<a href="javascript:fnekeep('<?php echo($record[0]);?>','<?php echo($record[2]);?>')"><img src="pic/verify.png" width="91" height="45" alt=""/></a></td>
   </tr>
<?php 
 }
 require('mysql/unconn.php');
?>
</table>
<script language="javascript">
function fnekeep(v1,v2){
	var url = "fne_keep.php?deptcode=<?php echo($deptcode);?>&mecode=" + v1 + "&tlend=" + v2;
	if(confirm("Verify this equipment ?")==true){
		window.location.href=url;
	}
}
</script>
		
	  </td>
    </tr><br /><br /><br /><br /><br /><br /><br /><br />
  </tbody>
</table>
