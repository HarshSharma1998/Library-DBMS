<?php
$conn = mysqli_connect("localhost","root","","library");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
$sql="select * from books";
$result = $conn->query($sql) or die($conn->error);
echo"<br><br>";
echo"<h3 style='color:mediumseagreen'>Account Details_2<h3>";
echo "<table style='width:100%;border-collapse: collapse;    background-color: #f1f1c1;border: 1px solid black;    text-align: left;'>
<tr>
<th>B_ID</th>
<th>TITLE</th>
<th>AUTHOR</th>
<th>EDITION</th>
<th>COURSE</th>
<th>PUBLICATION</th>
<th>STATUS</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['B_ID'] . "</td>";
echo "<td>" . $row['TITLE'] . "</td>";
echo "<td>" . $row['AUTHOR']."</td>";
echo "<td>" . $row['EDITION'] . "</td>";
echo "<td>" . $row['COURSE'] . "</td>";
echo "<td>" . $row['PUBLICATION']."</td>";
echo "<td>" . $row['STATUS'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"<br><br>";


$FID=$_SESSION['FID'];
$sql="select B_ID from issue_faculty where F_ID='$FID'";
$result = $conn->query($sql) or die($conn->error);
while($row = mysqli_fetch_array($result))
{
$bid=$row['B_ID'];
$sql="select * from books where B_ID='$bid'";
$result = $conn->query($sql) or die($conn->error);
echo"<br><br>";
echo"<h3 style='color:mediumseagreen'>Account Details2<h3>";
echo "<table style='width:100%;border-collapse: collapse;    background-color: #f1f1c1;border: 1px solid black;    text-align: left;'>
<tr>
<th>B_ID</th>
<th>TITLE</th>
<th>AUTHOR</th>
<th>EDITION</th>
<th>COURSE</th>
<th>PUBLICATION</th>
<th>STATUS</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['B_ID'] . "</td>";
echo "<td>" . $row['TITLE'] . "</td>";
echo "<td>" . $row['AUTHOR']."</td>";
echo "<td>" . $row['EDITION'] . "</td>";
echo "<td>" . $row['COURSE'] . "</td>";
echo "<td>" . $row['PUBLICATION']."</td>";
echo "<td>" . $row['STATUS'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"<br><br>";}
}
