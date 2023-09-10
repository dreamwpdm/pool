<p><img src="pic/holding3.png" width="432" height="75" alt=""/>
</p>
<table table class="table table-hover table-bordered" align="right">
  <tr class="bg-info text-white">
  <td height="50" style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">ME Code</span></td>
  <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">Equipments</span></td>
  <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">Borrow Date</span></td>
  <td style="text-align: center"><span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-style: normal; font-weight: bold; font-size: 18px;">&nbsp;&nbsp;&nbsp;Return&nbsp;&nbsp;&nbsp;</span></td>
 </tr>
 <?php
 $sql="SELECT equipments.mecode, equipments.ename, transections.tlend, DATE_ADD(transections.tlend, INTERVAL 1 DAY) AS deadline FROM equipments, transections WHERE equipments.mecode=transections.mecode AND transections.deptcode='$deptcode' AND transections.tstatus='1'";
//echo($sql);
 require('mysql/connect.php');
 while($record=mysqli_fetch_array($result)){
 ?> 
 <tr>
  <td height="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">BNH_ME</span> <span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><?php echo($record[0]);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><?php echo($record[1]);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"><?php echo date_format(date_create($record[2]),"d/m/Y");?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
  <td>&nbsp;&nbsp;<a href="javascript:rstequip('<?php echo($record[0]);?>')"><img src="pic/return.png" width="70" height="45"></a></td>
 </tr>
 <?php 
 }
 require('mysql/unconn.php');
 ?>
</table>
<script language="javascript">
function rstequip(v1){
	var url = "rst_save.php?deptcode=<?php echo($deptcode);?>&mecode=" + v1;
	if(confirm("Restore this equipment ?")==true){
		window.location.href=url;
	}
}
</script>
