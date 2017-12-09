<?php
$conn = mysqli_connect("localhost","root","","library");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
$S_ID=$_POST['S_ID'];
$sql="select * from student where S_ID='$S_ID'"; 
$result=$conn->query($sql);
$_SESSION['SID']=$S_ID;
if(!$row=$result->fetch_assoc())
{
echo "your username incorrect";
}
else{
header("Location: accountdetails.php");
}
}

?>
