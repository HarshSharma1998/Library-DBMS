<?php
session_start();
include 'pheader.php';
echo"
<br><br>
<form action='loggingin.php' method='POST'>
  <h2>Login to your account</h2>
	Userid:<br>
     <input type = 'text' name = 'S_ID' placeholder=' '>
     <input type='submit' value='Login'>
</form>";
?>
<body>
<img src="VIT11.jpg">
</body>
