<html >
<head>
<title>Registration </title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="validate.js"></script>
</head>
<body>

	<form name="frmregister"action="registerAction.php" method="post" onSubmit="return validate();"	>
		<table class="form" border="0">
			<tr>
				<th><label for="name"><strong>Name:</strong></label></th>
				<td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="name"><strong>Username:</strong></label></th>
				<td><input class="inp-text" name="username" id="username" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="name"><strong>Password:</strong></label></th>
				<td><input class="inp-text" name="password" id="password" type="password" size="30" /></td>
			</tr>
			<tr>
			<td></td>
				<td class="submit-button-right">
				<input class="send_btn" type="submit" value="Submit" alt="Submit" title="Submit" />
				
				<input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" /></td>
				
			</tr>
		</table>
	</form>
<div style="padding: 35px 0 0 300px;"> <a href="index.php">Go back to Loggin </a> </div>
</body>
</html>
