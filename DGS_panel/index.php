<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Server Manager</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			height: 100vh;
			width: 100%;
			background-color: #f2f2f2;
		}

		.card {
			margin: 10px;
			padding: 10px;
			background-color: white;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			border-radius: 5px;
			text-align: center;
			width: 200px;
			height: 200px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			text-decoration: none;
			color: black;
			transition: all 0.3s ease;
		}

		.card:hover {
			transform: scale(1.05);
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
		}
	</style>
</head>
<body>
	<div class="container">
		<a target="_blank" href="http://<?php echo $_SERVER["SERVER_NAME"]; ?>:9090" class="card">
			<h2>Cockpit</h2>
			<p>Server management</p>
		</a>

		<a target="_blank" href="http://<?php echo $_SERVER["SERVER_NAME"]; ?>:10000" class="card">
			<h2>Webmin</h2>
			<p>Server administration</p>
		</a>

		<a target="_blank" href="/lam/" class="card">
			<h2>Ldap-account-manager</h2>
			<p>LDAP management</p>
		</a>

		<a target="_blank" href="/phpldapadmin/" class="card">
			<h2>PhpLDAPadmin</h2>
			<p>LDAP administration</p>
		</a>

		<a target="_blank" href="/phpmyadmin/" class="card">
			<h2>PhpMyadmin</h2>
			<p>Mysql administration tool</p>
		</a>
		
	<!--/div>
	<div class="container"-->

		<a href="/?action=install&package=ldap" class="card">
			<h2>Install LDAP</h2>
			<p>Install Lightweight Directory Access Protocol</p>
		</a>

		<a href="/?action=install&package=lam" class="card">
			<h2>Install Ldap-account-manager</h2>
			<p>Install LDAP management tool</p>
		</a>

		<a href="/?action=install&package=phpldapadmin" class="card">
			<h2>Install PhpLDAPadmin</h2>
			<p>Install LDAP administration tool</p>
		</a>

		<a href="/?action=install&package=phpmyadmin" class="card">
			<h2>Install PhpMyadmin</h2>
			<p>Install Mysql administration tool</p>
		</a>
	
		<a href="/?action=install&package=cockpit-machines" class="card">
			<h2>Install cockpit-machines</h2>
			<p>Install VM management tool</p>
		</a>
		
	</div>
</body>
</html>
