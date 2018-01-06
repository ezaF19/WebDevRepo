<html>
<head>
</head>
<body>

<form action="dashboard.php" method="post">
<h1>Login</h1>
<?php
	if( isset($_GET['error']) ){
		echo '<p style="color: red"> please input complete info </p>';
	}
?>
<p>Username:
<br /><input type="text" name="username" /><p>
<p>Password:
<br /><input type="password" name="password" /><p>
<p>
	<input type="Submit" value="Login" />
	<input type="Reset" value="Clear" />
</p>
</form>

<?php
	//require "db.php";
?>

<p>Password: 12345 </P>
<?php echo  
<div id="menu"

</body>
</html>