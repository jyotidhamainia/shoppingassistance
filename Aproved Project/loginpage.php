<!doctype html>
<html>

    <head>
<title>Nitt shopping assistance</title>

        <style type="text/css">
body {background-image:url('back1.jpg');
background-repeat:repeat;}

h1{
text-align:center;
color:white}
body {font-family:Arial, Sans-Serif;} 
#container {width:300px; margin:0 auto;}
p{
color:white
}
form label
 {
display:inline-block; width:140px;
}
/* You could add a class to all the inputboxes instead, if you like. That would be safer, and more backwards-compatible */          
form input[type="text"],form input[type="password"],form input[type="email"] 
{width:160px;}
form .line {clear:both;}
form .line.submit {text-align:right;}
</style>
</head>
<body>
<h1><strong><img src="Nitt.png" alt="Nitt logo" width="100" height="100" color="white"><font color="white">  NATIONAL INSTITUTE OF TECHNOLOGY TIRUCHIRAPALLI</h1>
<h1><strong><font color="white"> </h2>
<h1><strong><font color="red"> Welcome to Shopping Assistance</h1>
<div id="container">
<form action="reg.php" method="post">
<h1>Create Login</h1>
<div class="line"><label for="First name">First name* : </label><input type="text" id="fname" /></div>
<div class="line"><label for="Second name">Second name* : </label><input type="text" id="sname" /></div>
<!-- You may want to consider adding a "confirm" password box also -->
<div class="line"><label for="Username"> Username* : </label><input type="text" id="uname" /></div>
<div class="line"><label for="Password">Password* : </label><input type="password" id="pwd" /></div>
<div class="line"><label for="email">Email *: </label><input type="email" id="email" /></div>
<div class="line"><label for="tel">Telephone: </label><input type="text" id="tel" /></div>
<div class="line"><label for="add">Address *: </label><input type="text" id="add" /></div>
<div class="line submit"><input type="submit" value="Submit" /></div>
<p>Note: Please make sure your details are correct before submitting and that all fields marked with are completed!.</p>
</form>
 </div>
   </body>
    </html