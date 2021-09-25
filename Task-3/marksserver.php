<?php 
session_start();
$db = mysqli_connect('localhost','root','','selab') or die("Could not connect to tables");
$clsnum=$_SESSION['clsnum'];
$stid=$_SESSION['stid'];
$classes="select * from studentclass where classnumber='$clsnum' and studentid='$stid'";
$classq=mysqli_query($db,$classes);
$classrow=mysqli_fetch_array($classq);
if(isset($_POST['mark']))
{
	$mark1=$_POST['mark1'];
	$mark2=$_POST['mark2'];
	$mark3=$_POST['mark2'];
	$insert="update studentclass set
	marks1='$mark1',
	mark2='$mark2',
	mark3='$mark3' where classnumber='$clsnum' and studentid='$stid'";
	$insertq=mysqli_query($db,$insert) or die("Connection Problem");
	
}

?>
