<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>query page Document</title>
<style>
body{background:#CC3;
}
p{
	
		font:"Times New Roman", Times, serif;
	font-size:18px;
	
}
</style>
</head>

<body>
<div id="header" align="left"><div id="header_right" align="left">
<table width="1145" border="0">
  <tr>
    <th width="486" scope="col"><a href="welcome.php" id="header_logo2" title="shop.IN"><img src="shop.png" alt="shop.IN" width="288" height="82" class="logo" align="left" /></a></th>

            <p> <script type="text/javascript">/* <![CDATA[ */
$(document).ready(function(){$(".login-popup").fancybox({'width':730,'height':240,'autoScale':false,'autoDimensions':false}).trigger('click');});/* ]]> */</script>
      </p></th>
  </tr>
</table><hr/>
<div align="center">
  <table width="1143" height="30" border="1" bgcolor="#93C" bordercolor="#"  align="center">
    <tr>
      <td width="132">
      <div align="center"><b><a href="welcome.php" title="home" ><font color="#FFFFFF">Home </font></a></b></div></td>
      <h2>&nbsp;</h2>
<p>
<?php 
 if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['address']) ||
		!isset($_POST['comments']))		 {
			 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     else
		mail("jyotismile2009@gmail.com","something","First_name: ".$_POST['first_name']."Last_name: ".$_POST['last_name']."telephone: ".$_POST['telephone']."address: ".$_POST['address']."comment: ".$_POST['comments'],"from:".$_POST['email']);
?>
</p>
<p><strong>Thank you for contacting us. We will be in touch with you very soon.</strong></p>

</body>
</html>