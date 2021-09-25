<?php 
session_start();
$db = mysqli_connect('localhost','root','','selab') or die("Could not connect to tables");
$userid=$_SESSION['id'];
$classes="select * from studentclass where studentid='$userid'";
$classq=mysqli_query($db,$classes);
$i=0;
while($classrow=mysqli_fetch_array($classq))
{
	$classinfo[$i]['coursecode']=$classrow['coursecode'];
	$classinfo[$i]['coursename']=$classrow['coursename'];
	$classinfo[$i]['mark1']=$classrow['marks1'];
	$classinfo[$i]['mark2']=$classrow['mark2'];
	$classinfo[$i]['mark3']=$classrow['mark3'];
	
	$i++;
}
?>