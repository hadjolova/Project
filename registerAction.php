<html>
<head>
<title>Registration</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php
include "dbConfig.php";
if($_POST[ 'name' ]!="") {
$name = mysql_real_escape_string($_POST["name"]);
$username = mysql_real_escape_string($_POST["username"]);
$password = mysql_real_escape_string($_POST["password"]);

$sql = "insert into users set name='".$name."', username='".$username."', password='".md5($password)."' ";
$sql = mysql_query($sql);



$msg = '
<p class = "tanx">Thank you for completing your online registration form!.';
}else{
$msg = "Your enquiry sending failed";
}	

?>
<div class="thanks-text">
<?php echo $msg?>

<div class="tut"> <a href="index.php">Go back to Loggin </a> </div>
</div>
</body>
</html>
