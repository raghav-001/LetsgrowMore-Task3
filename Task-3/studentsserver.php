<?php
session_start();
$db = mysqli_connect('localhost','root','','selab') or die("Could not connect to tables");
$clsnum=$_SESSION['clsnum'];
$classes="select * from studentclass where classnumber='$clsnum'";
$classq=mysqli_query($db,$classes);
$i=0;
while($classrow=mysqli_fetch_array($classq))
{
	$classinfo[$i]['coursecode']=$classrow['coursecode'];
	$classinfo[$i]['coursename']=$classrow['coursename'];
	$classinfo[$i]['studentid']=$classrow['studentid'];
	$classinfo[$i]['studentname']=$classrow['studentname'];
	$i++;
}

if(isset($_POST['stid']))
{
	$_SESSION['stid']=$_POST['stid'];
	echo "<script>window.open('marks.php','_self')</script>";
}


?>