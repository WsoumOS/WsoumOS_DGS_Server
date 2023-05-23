<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DGS Panel - Server Manager</title>
<style>
body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
	background: #f2f2f2;
}

.header {
	z-index: 100;
	left: 0;
	top: 0;
	right: 0;
	border-top: 0;
	/* padding-top: 8px; */
	width: 100%;
	/* height: 50px; */
	height: 60px;
	background: #54d1a1;
	/* box-shadow: 0 1px 7px rgba(0,0,0,.35); */
	box-shadow: 0 0.5px 7px rgba(0,0,0,0.35);
	/* border-radius: 0 0 5px 5px; */
}

/*	
.menu {
	
}
.menu ul {
	margin-left: 4%;
}
.menu ul li {
	float: left;
	padding: 8px;
	list-style: none;
}
.menu ul li a {
	text-decoration: none;
	color: #7f7f7f;
	border: 2px solid #7f7f7f;
	font-size: 18px;
	padding: 6px;
	border-radius: 7px;
}
.menu ul li a:hover {
	background: #fff;
	color: #7f7f7f;
	transition: 0.5s;
}
.logo {
	float: right;
	/* margin-top: 21px; *//*
	margin-right: 42px;
}
*/

/* .logo a {
	color: #7f7f7f;
	padding: 7px;
	font-size: 18px;
	text-decoration: none;
	border: 2px solid #7f7f7f;
	border-radius: 5px;
} */

.head {
	width: 94%;
	margin: 0 auto;
	padding-top: 10px;
}

.menu {
	font-family: "Droid Arabic Kufi" ,Open Sans, sans-serif;
	font-size: 17.5px;
	line-height: 22px;
	float: left;
	margin-left: 2%;
}

/*#404040*/

.button a:hover {
	background: #7cd3b2;
	transition: 0.5s;
}

.button {
	float: left;
	margin-right: 17px;
	direction: rtl;
	border-radius: 6px;
	transition: 0.8s;
}

.button a {
	float: left;
	text-decoration: none;
	color: #f3f3f3;
	font-size: 18px;
	padding: 7px;
	border: 2px solid #ffffff;
	border-radius: 6px;
}

.logo {
	float: right;
	/* margin-top: 4px; */
	margin-right: 2%;
}

.logo .logo_b {
	height: 40px;
}

.logo .logo_m {
    display: none;
    width: 40px;
}

.logo_b2 {
    font-family: "Droid Arabic Naskh" ,Open Sans, sans-serif;
    line-height: 48px;
    color: #f3f3f3;
    text-decoration: none;
    font-size: 31px;
    font-weight: bold;
    float: left;
    margin-top: -4px;
    margin-right: 11px;
}

.logo_b2:hover {
    text-decoration: underline;
}


.container {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	/* height: 100vh; */
	width: 100%;
	padding-top: 18px;
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

.install {
	background: #d7f4fa;
}


.footer {
	background: #fff;
	padding: 30px;
	padding-top: 20px;
	margin-top: 38px;
	/* margin-top: 10vh; */
	height: 60px;
	left: 0;
	right: 0;
	/* margin-top: 67px; */
	border-top: 1px solid rgba(211, 211, 211);
	/* border-radius: 5px 5px 0px 0px; */
	/* box-shadow: 2px 0 16px rgba(0,0,0,0.35); */
	/* position: relative; */
}

.fo_c {
	direction: rtl;
	text-align: center;
	color: #54d1a1;
	font-size: 18px;
}

.fo_b {
	/* width: 97%; */
}

.fo_u {
	margin: 22px;
	margin-top: 18px;
	/* margin-right: 28px; */
	/* float: right; */
	text-align: center;
	color: #bfbfbf;
}

.fo_u a:hover {
	text-decoration: underline;
	transition: 0.5s;
}

.fo_u a {
	font-family: "Droid Arabic Naskh" ,Open Sans, sans-serif;
	font-size: 13.4px;
	line-height: 30px;
	text-decoration: none;
	margin: 4px;
	color: #7b7b7b;
	transition: 0.5s;
}

.footerlinks {
    color: #bfbfbf;
}

.footerlinks a:hover {
	text-decoration: none;
	transition: 0.5s;
}

.footerlinks a {
	text-decoration: underline;
	font-size: 14px;
	line-height: 0;
	color: #4e4e4e;
	transition: 0.5s;
}

.copyright {
	font-size: 17px;
	direction: ltr;
}

</style>

</head>
<body>


<div class="header">

<div class="head">

	<div class="logo">
		<div class="hrif">
		<a href="/">
		<!--img class="logo_b" src="/img/" /-->
		<img class="logo_b" src="/img/ws-icon-2.png" />
		<!--img class="logo_m" src="/img/mini_logo_blow.png"-->
		</a>
		</div>
	</div>

<div class="menu">
		<div id="session" >
<div class="drop_list">
<div class="button"><div class="hrif"><a href="https://os.wsoum.ml/dgs/" target="_blank">DGS OS <i class="fas fa-sign-in-alt"></i></a></div></div>
<div class="button" style=" margin-left: 0px; margin-right: 0px; "><div class="hrif"><a href="https://github.com/WsoumOS/WsoumOS_DGS_Server/tree/main/DGS_panel" target="_blank">Github <i class="fas fa-sign-in-alt"></i></a></div></div>
</div>
		</div>
</div>

	</div>
	
</div>

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

		<a href="/?action=install&package=ldap" class="card install">
			<h2>Install LDAP</h2>
			<p>Install Lightweight Directory Access Protocol</p>
		</a>

		<a href="/?action=install&package=lam" class="card install">
			<h2>Install Ldap-account-manager</h2>
			<p>Install LDAP management tool</p>
		</a>

		<a href="/?action=install&package=phpldapadmin" class="card install">
			<h2>Install PhpLDAPadmin</h2>
			<p>Install LDAP administration tool</p>
		</a>

		<a href="/?action=install&package=phpmyadmin" class="card install">
			<h2>Install PhpMyadmin</h2>
			<p>Install Mysql administration tool</p>
		</a>
	
		<a href="/?action=install&package=cockpit-machines" class="card install">
			<h2>Install cockpit-machines</h2>
			<p>Install VM management tool</p>
		</a>
		
	</div>

<?php

echo '
<div class="footer">

<div class="fo_c">

<div class="copyright" >
DGS Panel &copy; '.date("Y").'
</div>

</div>



<div class="fo_b">

<div class="fo_u">

<a href="https://os.wsoum.ml//about">About</a> · <a href="https://os.wsoum.ml//terms">Terms</a> · <a href="https://os.wsoum.ml//privacy_policy">Privacy Policy</a> · <a href="https://os.wsoum.ml//privacy_policy#cookies">Cookies Ploicy</a>

</div>

</div>


</div>
';

?>

</body>
</html>
