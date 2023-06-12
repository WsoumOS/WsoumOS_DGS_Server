<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DGS Panel - Server Manager</title>
	<link rel="stylesheet" href="style.css" />

</head>
<body>


<div class="header">

<div class="head">

	<div class="logo">
		<div class="hrif">
		<a href="/">
		<!--img class="logo_b" src="/img/" /-->
		<img class="logo_b" src="img/ws-icon-2.png" />
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

<?php


//	by default apache cockpit ***cockpit-navigator
if($_GET["action"]=="install" && $_GET["package"]=="cockpit-machines"){
	$output = shell_exec("sudo apt install cockpit-machines");
	echo "<div class='msg'>cockpit-machines installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="ldap"){
	$output = shell_exec("sudo apt install slapd ldap-utils");
	echo "<div class='msg'>ldap installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="phpldapadmin"){
	$output = shell_exec("wget http://deb.debian.org/debian/pool/main/p/phpldapadmin/phpldapadmin_1.2.6.3-0.2_all.deb
sudo apt install ./phpldapadmin_1.2.6.3-0.2_all.deb");
	echo "<div class='msg'>phpldapadmin installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="lam"){
	$output = shell_exec("wget http://prdownloads.sourceforge.net/lam/ldap-account-manager_8.1-1_all.deb && sudo apt install -f ./ldap-account-manager_8.1-1_all.deb");
	echo "<div class='msg'>lam installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="dns"){
	$output = shell_exec("sudo apt install bind9");
	echo "<div class='msg'>dns installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="proxy"){
	$output = shell_exec("sudo apt install squid");
	echo "<div class='msg'>proxy installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="webmin"){
	$output = shell_exec("sudo apt install webmin");
	echo "<div class='msg'>webmin installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="mail"){
	$output = shell_exec("sudo apt install sendmail");
	echo "<div class='msg'>mail installed ".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="torrent"){
	$output = shell_exec("sudo apt install transmission-cli transmission-daemon");
	echo "<div class='msg'>cockpit-machines installed <br/>".$output."</div>";
	
	
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="mysql"){
	$output = shell_exec("sudo apt install mysql");
	echo "<div class='msg'>mysql installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="phpmyadmin"){
	$output = shell_exec("sudo apt install phpmyadmin");
	echo "<div class='msg'>phpmyadmin installed <br/>".$output."</div>";
	
} else {
	
}


//(mail)-	sudo apt install sendmail	postfix
//dhcp  sudo apt install isc-dhcp-server
//VsFTPD/samba	
//jango
//nodejs
//npm
//ruby	ruby-on-rails

//Composer  sudo apt install curl php-cli php-mbstring git unzip && curl -sS https://getcomposer.org/installer -o composer-setup.php && sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

//certbot  sudo apt install certbot python3-certbot-apache

//+VPN[openvpn]
//+WDS-linux-Clonezilla  
//Clonezilla
// +VOIP[asterisk]


//sudo apt install git  gitlab    
//(linux server Open Game Panel)  

//flarum-form
// *phproject +Owncloud
// wordpress DokuWiki

//torrent traker
//sudo apt install tor


?>

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

		<a href="?action=install&package=ldap" class="card install">
			<h2>Install LDAP</h2>
			<p>Install Lightweight Directory Access Protocol</p>
		</a>

		<a href="?action=install&package=lam" class="card install">
			<h2>Install Ldap-account-manager</h2>
			<p>Install LDAP management tool</p>
		</a>

		<a href="?action=install&package=phpldapadmin" class="card install">
			<h2>Install PhpLDAPadmin</h2>
			<p>Install LDAP administration tool</p>
		</a>

		<a href="?action=install&package=phpmyadmin" class="card install">
			<h2>Install PhpMyadmin</h2>
			<p>Install Mysql administration tool</p>
		</a>
	
		<a href="?action=install&package=cockpit-machines" class="card install">
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

<a href="https://os.wsoum.ml/about">About</a> · <a href="https://os.wsoum.ml/terms">Terms</a> · <a href="https://os.wsoum.ml/privacy_policy">Privacy Policy</a> · <a href="https://os.wsoum.ml/privacy_policy#cookies">Cookies Ploicy</a>

</div>

</div>


</div>
';

?>

</body>
</html>