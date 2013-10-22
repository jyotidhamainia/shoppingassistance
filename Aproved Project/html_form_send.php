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
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "jyotismile2009@gmail.com";
     
    $email_subject = "query form submissions";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['address']) ||
		!isset($_POST['comments']))		 {
			 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
	$address = $_POST['address']; //required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
	 $email_message .= "Address: ".clean_string($address)."\n";
	
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
  
  <!-- place your own success html below -->
  
</p>
<p><strong>Thank you for contacting us. We will be in touch with you very soon.</strong></p>
<?php
}
die();
?>
</body>
</html>