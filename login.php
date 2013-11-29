<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password)
{
	$connect=mysql_connect("localhost","root","") or die("Couldn't connect!");
	mysql_select_db("logindb") or die("Couldn't find db"); 

	$query=mysql_query("SELECT*FROM users WHERE username='$username'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
		}
		if($username==$dbusername&&$password==$dbpassword)
		{
			echo "You're in!<a href='Home.php'>Click</a>here to enter the site!";
			$_SESSION['username']=$username;
		}
		else
		echo "Incorrect password!";
		
	}
	else
		die("That user doesn't exist!");
}
	else
	die("Please enter and username and a password!");
	
	?>
