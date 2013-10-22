<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>query Document</title>
</head>
<style>
body{
	background-color:#CC3;
}
h1{
	font-size:24px;
}
</style>
<body>
<div id="header" align="left"><div id="header_right" align="left">
<a href="index.php" id="header_logo" title="shopping.IN"></a>
<table width="1145" border="0"><hr>
 <th width="486" scope="col"><a href="welcome.php" id="header_logo2" title="shop.IN"><img src="shop.png" alt="shop.IN" width="288" height="82" class="logo" align="left" /></a>
      <p align="right">&nbsp;</p>
         </th>
      
      <p>
             <script type="text/javascript">/* <![CDATA[ */
$(document).ready(function(){$(".login-popup").fancybox({'width':730,'height':240,'autoScale':false,'autoDimensions':false}).trigger('click');});/* ]]> */</script>
      </p>    </th>
  </tr>
</table>
<hr/>
<p><strong><u><i>Enter your details and Requirements</i></u></strong></p>
<form name="htmlform" method="post" action="html_form_seend.php">
<table width="450px">
</tr>
<tr>
 <td valign="top">
  <label for="first_name">First Name </label>
 :</td>
 <td valign="top">
  <input  type="text" name="first name" maxlength="50" size="30" required>
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="last_name">Last Name </label>
 :</td>
 <td valign="top">
  <input  type="text" name="last name" maxlength="50" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address :</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" required>
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 :</td>
 <td valign="top">
   <p>
     <input  type="text" name="telephone" maxlength="30" size="30" required>
   </p></td>
</tr>
<tr>
<td valign="top">
<label for="address">Address </label> 
:
</td>
<td align="top">
<p>
<input type="text" name="address" maxlength="30" size="30" required />
<tr>
 <td valign="top">
  <label for="comments">Comments </label>
 :</td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit" required>
  
  <input type="reset">
 </td>
</tr>
</table>
</form>
</p>
<p>
<?php
include("footer.php");
?>
</p>
</body>
</html>