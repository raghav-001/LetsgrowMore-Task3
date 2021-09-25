<?php 
	session_start();
	if(isset($_POST["Submit"])){
	$userid="";
	$password="";
	$db = mysqli_connect('localhost','root','','selab') or die("Could not connect to tables");
	$userid=mysqli_real_escape_string($db,$_POST["userid"]);
	$password=mysqli_real_escape_string($db,$_POST["password"]);
	if(empty($userid)) echo "<script>window.open('login2.php','_self');alert('Enter the username');</script>";
	if(empty($password)) echo "<script>alert('Enter the password');</script>";
	if($_POST['Admin']=="Admin")
	{	
		$query="select * from teachers where teacherid='$userid' and password='$password'";
		$conrows=mysqli_query($db,$query);
		$rows=mysqli_num_rows($conrows);
		$query_1="select * from teachers where teacherid='$userid'";
		$res=mysqli_query($db,$query_1);
		$name=$res -> fetch_array(MYSQLI_ASSOC);
		$_SESSION["name"]=$name["teacher_name"];
	}
	if($_POST['Admin']=="User")
	{
		$query="select * from students where studentid='$userid' and password='$password'";
		$conrows=mysqli_query($db,$query);
		$rows=mysqli_num_rows($conrows);
		$query_1="select * from students where studentid='$userid'";
		$res=mysqli_query($db,$query_1);
		$name=$res -> fetch_array(MYSQLI_ASSOC);
		$_SESSION["name"]=$name["studentname"];
	}
	if($rows==1)
	{	
		$_SESSION['id']=$userid;
		$_SESSION['user']=$_POST['Admin'];
		
			
		if ($_SESSION["user"]=="Admin") echo "<script>window.open('homepage1.php','_self')</script>";
		else echo "<script>window.open('homepage2.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('Invalid user credentials')</script>";
	}
	}
?>