<html>
<head><style>
body{background-color:#CC3;
}
</style>

<?php 
include("connect.php") ;
?>
<div id="header" align="left"><div id="header_right" align="left">
<a href="login.php" id="header_logo" title="shopping.IN"></a>
<table width="1145" border="0">
  <tr>    <th width="486" scope="col">
   <a href="welcome.php" id="header_logo2" title="shop.IN"><img src="shop.png" alt="emandi.IN" width="288" height="82" class="logo" align="left" /></a></th>   
    <p><script type="text/javascript">/* <![CDATA[ */
$(document).ready(function(){$(".login-popup").fancybox({'width':730,'height':240,'autoScale':false,'autoDimensions':false}).trigger('click');});/* ]]> */</script>
    </p></th>
  </tr>
  <tr><div align="center">
  <table width="1143" height="30" border="1" bgcolor="#93C" bordercolor="#"  align="center">
    <tr>
      <td width="132">
      <div align="center"><b><a href="welcome.php" title="home" ><font color="#FFFFFF">Home </font></a></b></div></td>
      <td width="145">
        <div align="center"><b><a href="shop1.php" title="Soap"><font color="#FFFFFF" >Chintamani shop</font></a>
      </b></div></td>
      <td width="185"><div align="center"><b>
        <a href="shop2.php" title="shop2"><font color="#FFFFFF" >Gurunath shop</font></a>
      </b></div></td>
     


</tr>
</table>
</div></tr></tr><hr/>
<?php 
$sql="SELECT * FROM soap WHERE name='".$_POST['s']."' ";

												

$result=mysql_query($sql);
//$r1=mysql_fetch_query($result);

if(mysql_num_rows($result)==0)

	echo '<span style="font-size:
	25px">not available. ';

else
{
if(!$result)

	echo 'Not Available. ';
	else
	{
?>
<hr/>
<h1><stong>search result for</strong></h1>
<table align="center" width="70%" id="table1">
<tr style="background-color: skyblue;">
<th>Name</th>
<th>Quantity</th>
<th> Stock Available</th>
<th>price</th>
<th>Shop Name</th>

</tr>
<?php

	while($row = mysql_fetch_assoc($result))
	{
?>
<tr >
	<td align="center"><?php echo $row['name'] ?></td>
	<td align="center"><?php echo $row['quantity'] ?>(gm/ml)</td>
	<td align="center"><?php echo $row['avalaible'] ?></td>
	<td align="center"><?php echo $row['price'] ?>(Rs.)</td>
    <td align="center"><?php echo $row['shopname'] ?></td>
</tr>

<?php
}
?>
</table><br />


<?php 
}}


require_once('footer.php') ?>