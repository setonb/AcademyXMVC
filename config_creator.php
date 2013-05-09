<?php
	extract($_REQUEST);
	if(isset($submit)){
		$handle = fopen('config.php', 'w');
		fwrite($handle, "<?php\n")
		fwrite($handle, "\$hostname = $hostname\n");
		fwrite($handle, "\$username = $username\n");
		fwrite($handle, "\$password = $password\n");
		fwrite($handle, "\$database = $database");
		fwrite($handle, "?>");
		header("Location: /");
	} else {
?>
		<html>
		<head>
			<title>The Cake is a Lie!</title>
		</head>
		<body>
			<form>
				<label>Hostname Name: </label>
				<input type="text" name="hostname" />
				<label> User Name: </label>
				<input type="text" name="username" />
				<label>Password: </label>
				<input type="text" name="password" />
				<label>Database Name: </label>
				<input type="text" name="database" />
				<input type=submit name="submit" value="Submit" />
			</form>
		</body>
		</html>
<?php
	}
?>