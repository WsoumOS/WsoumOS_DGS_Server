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
		<a href=".">
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
	$output = shell_exec("sudo apt install -y cockpit-machines");
	echo "<div class='msg'>cockpit-machines installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="ldap"){
	$output = shell_exec("sudo apt install -y slapd ldap-utils");
	echo "<div class='msg'>ldap installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="phpldapadmin"){
	$output = shell_exec("wget http://deb.debian.org/debian/pool/main/p/phpldapadmin/phpldapadmin_1.2.6.3-0.2_all.deb
sudo apt install -y ./phpldapadmin_1.2.6.3-0.2_all.deb");
	echo "<div class='msg'>phpldapadmin installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="lam"){
	$output = shell_exec("wget http://prdownloads.sourceforge.net/lam/ldap-account-manager_8.1-1_all.deb && sudo apt install -y -f ./ldap-account-manager_8.1-1_all.deb");
	echo "<div class='msg'>lam installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="dhcp"){
	$output = shell_exec("sudo apt install -y isc-dhcp-server");
	echo "<div class='msg'>dhcp installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="dns"){
	$output = shell_exec("sudo apt install -y bind9");
	echo "<div class='msg'>dns installed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="quagga"){
	$output = shell_exec("sudo apt install -y quagga");
	echo "<div class='msg'>quagga installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="ftp"){
	$output = shell_exec("sudo apt install -y vsftpd");
	echo "<div class='msg'>ftp installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="nfs"){
	$output = shell_exec("sudo apt install -y nfs-kernel-server");
	echo "<div class='msg'>nfs installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="samba"){
	$output = shell_exec("sudo apt install -y samba");
	echo "<div class='msg'>samba installed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="proxy"){
	$output = shell_exec("sudo apt install -y squid");
	echo "<div class='msg'>proxy installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="webmin"){
	$output = shell_exec("sudo apt install -y webmin");
	echo "<div class='msg'>webmin installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="mail"){
	$output = shell_exec("sudo apt install -y postfix");
	echo "<div class='msg'>mail installed ".$output."</div>";
	
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="nagios"){
	$output = shell_exec("sudo apt install -y nagios4");
	echo "<div class='msg'>nagios installed ".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="openvpn"){
	$output = shell_exec("sudo apt install -y openvpn");
	echo "<div class='msg'>openvpn installed ".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="voip"){
	$output = shell_exec("sudo apt install -y asterisk");
	echo "<div class='msg'>voip installed ".$output."</div>";
	
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="torrent"){
	$output = shell_exec("sudo apt install -y transmission-cli transmission-daemon");
	echo "<div class='msg'>cockpit-machines installed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="mysql"){
	$output = shell_exec("sudo apt install -y mysql");
	echo "<div class='msg'>mysql installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="phpmyadmin"){
	$output = shell_exec("sudo apt install -y phpmyadmin");
	echo "<div class='msg'>phpmyadmin installed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="djando"){
	$output = shell_exec("sudo apt install -y python3 python3-pip ; pip3 install django");
	echo "<div class='msg'>djando installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="nodejs"){
	$output = shell_exec("sudo apt install -y nodejs");
	echo "<div class='msg'>nodejs installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="openstack"){
	$output = shell_exec("sudo apt install -y openstack");
	echo "<div class='msg'>openstack installed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="install" && $_GET["package"]=="snort"){
	$output = shell_exec("sudo apt install -y snort");
	echo "<div class='msg'>snort installed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="cockpit-machines"){
	$output = shell_exec("sudo apt remove -y cockpit-machines");
	echo "<div class='msg'>cockpit-machines removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="ldap"){
	$output = shell_exec("sudo apt remove -y slapd ldap-utils");
	echo "<div class='msg'>ldap removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="phpldapadmin"){
	$output = shell_exec("sudo apt remove -y phpldapadmin");
	echo "<div class='msg'>phpldapadmin removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="lam"){
	$output = shell_exec("sudo apt remove -y ldap-account-manager");
	echo "<div class='msg'>lam removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="dhcp"){
	$output = shell_exec("sudo apt remove -y isc-dhcp-server");
	echo "<div class='msg'>dhcp removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="dns"){
	$output = shell_exec("sudo apt remove -y bind9");
	echo "<div class='msg'>dns removed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="quagga"){
	$output = shell_exec("sudo apt remove -y quagga");
	echo "<div class='msg'>quagga removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="ftp"){
	$output = shell_exec("sudo apt remove -y vsftpd");
	echo "<div class='msg'>ftp removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="nfs"){
	$output = shell_exec("sudo apt remove -y nfs-kernel-server");
	echo "<div class='msg'>nfs removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="samba"){
	$output = shell_exec("sudo apt remove -y samba");
	echo "<div class='msg'>samba removed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="proxy"){
	$output = shell_exec("sudo apt remove -y squid");
	echo "<div class='msg'>proxy removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="webmin"){
	$output = shell_exec("sudo apt remove -y webmin");
	echo "<div class='msg'>webmin removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="mail"){
	$output = shell_exec("sudo apt remove -y postfix");
	echo "<div class='msg'>mail removed ".$output."</div>";
	
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="nagios"){
	$output = shell_exec("sudo apt remove -y nagios4");
	echo "<div class='msg'>nagios removed ".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="openvpn"){
	$output = shell_exec("sudo apt remove -y openvpn");
	echo "<div class='msg'>openvpn removed ".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="voip"){
	$output = shell_exec("sudo apt remove -y asterisk");
	echo "<div class='msg'>voip removed ".$output."</div>";
	
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="torrent"){
	$output = shell_exec("sudo apt remove -y transmission-cli transmission-daemon");
	echo "<div class='msg'>cockpit-machines removed <br/>".$output."</div>";
	
	
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="mysql"){
	$output = shell_exec("sudo apt remove -y mysql");
	echo "<div class='msg'>mysql removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="phpmyadmin"){
	$output = shell_exec("sudo apt remove -y phpmyadmin");
	echo "<div class='msg'>phpmyadmin removed <br/>".$output."</div>";
	
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="djando"){
	$output = shell_exec("pip3 uninstall django ; sudo apt remove -y python3 python3-pip");
	echo "<div class='msg'>djando removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="nodejs"){
	$output = shell_exec("sudo apt remove -y nodejs");
	echo "<div class='msg'>nodejs removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="openstack"){
	$output = shell_exec("sudo apt remove -y openstack");
	echo "<div class='msg'>openstack removed <br/>".$output."</div>";
	
} elseif($_GET["action"]=="remove" && $_GET["package"]=="snort"){
	$output = shell_exec("sudo apt remove -y snort");
	echo "<div class='msg'>snort removed <br/>".$output."</div>";
	
	
	
	
} elseif($_GET["action"]=="update"){
	$output = shell_exec("sudo apt -y update");
	echo "<div class='msg'>packages updated <br/>".$output."</div>";
	
} elseif($_GET["action"]=="upgrade"){
	$output = shell_exec("sudo apt -y upgrade");
	echo "<div class='msg'>packages upgraded <br/>".$output."</div>";
	
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

		<a target="_blank" href="/nagios4/" class="card">
			<h2>Nagios</h2>
			<p>Nagios supervision tool</p>
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

		<a href="?action=install&package=mysql" class="card install">
			<h2>Install MySQL</h2>
			<p>Install Mysql database</p>
		</a>

		<a href="?action=install&package=phpmyadmin" class="card install">
			<h2>Install PhpMyadmin</h2>
			<p>Install Mysql administration tool</p>
		</a>
	
		<a href="?action=install&package=cockpit-machines" class="card install">
			<h2>Install Cockpit-machines</h2>
			<p>Install VM management tool</p>
		</a>
	
		<a href="?action=install&package=dhcp" class="card install">
			<h2>Install DHCP</h2>
			<p>Install isc-dhcp-server</p>
		</a>
	
		<a href="?action=install&package=dns" class="card install">
			<h2>Install DNS</h2>
			<p>Install bind9</p>
		</a>
	
		<a href="?action=install&package=quagga" class="card install">
			<h2>Install Quagga</h2>
			<p>Install quagga</p>
		</a>
	
		<a href="?action=install&package=ftp" class="card install">
			<h2>Install FTP</h2>
			<p>Install vsftpd</p>
		</a>
	
		<a href="?action=install&package=nfs" class="card install">
			<h2>Install NFS</h2>
			<p>Install nfs-kernel-server</p>
		</a>
	
		<a href="?action=install&package=samba" class="card install">
			<h2>Install Samba</h2>
			<p>Install samba</p>
		</a>
	
		<a href="?action=install&package=proxy" class="card install">
			<h2>Install Proxy</h2>
			<p>Install squid proxy</p>
		</a>
	
		<a href="?action=install&package=mail" class="card install">
			<h2>Install E-Mail</h2>
			<p>Install postfix</p>
		</a>
	
		<a href="?action=install&package=nagios" class="card install">
			<h2>Install Nagios</h2>
			<p>Install nagios</p>
		</a>
	
		<a href="?action=install&package=openvpn" class="card install">
			<h2>Install OpenVPN</h2>
			<p>Install openvpn</p>
		</a>
	
		<a href="?action=install&package=voip" class="card install">
			<h2>Install VOIP</h2>
			<p>Install asterisk</p>
		</a>
	
	
		<a href="?action=install&package=djando" class="card install">
			<h2>Install Djando</h2>
			<p>Install djando</p>
		</a>
	
		<a href="?action=install&package=nodejs" class="card install">
			<h2>Install NodeJS</h2>
			<p>Install nodejs</p>
		</a>
	
		<a href="?action=install&package=openstack" class="card install">
			<h2>Install OpenStack</h2>
			<p>Install openstack</p>
		</a>
	
		<a href="?action=install&package=snort" class="card install">
			<h2>Install Snort</h2>
			<p>Install snort</p>
		</a>
		
		
		
	<!--/div>
	<div class="container"-->

		<a href="?action=remove&package=ldap" class="card remove">
			<h2>Remove LDAP</h2>
			<p>Remove Lightweight Directory Access Protocol</p>
		</a>

		<a href="?action=remove&package=lam" class="card remove">
			<h2>Remove Ldap-account-manager</h2>
			<p>Remove LDAP management tool</p>
		</a>

		<a href="?action=remove&package=phpldapadmin" class="card remove">
			<h2>Remove PhpLDAPadmin</h2>
			<p>Remove LDAP administration tool</p>
		</a>

		<a href="?action=remove&package=mysql" class="card remove">
			<h2>Remove Mysql</h2>
			<p>Remove MySQL</p>
		</a>

		<a href="?action=remove&package=phpmyadmin" class="card remove">
			<h2>Remove PhpMyadmin</h2>
			<p>Remove Mysql administration tool</p>
		</a>
	
		<a href="?action=remove&package=cockpit-machines" class="card remove">
			<h2>Remove Cockpit-machines</h2>
			<p>Remove VM management tool</p>
		</a>
	
		<a href="?action=remove&package=dhcp" class="card remove">
			<h2>Remove DHCP</h2>
			<p>Remove isc-dhcp-server</p>
		</a>
	
		<a href="?action=remove&package=dns" class="card remove">
			<h2>Remove DNS</h2>
			<p>Remove bind9</p>
		</a>
	
		<a href="?action=remove&package=quagga" class="card remove">
			<h2>Remove Quagga</h2>
			<p>Remove quagga</p>
		</a>
	
		<a href="?action=remove&package=ftp" class="card remove">
			<h2>Remove FTP</h2>
			<p>Remove vsftpd</p>
		</a>
	
		<a href="?action=remove&package=nfs" class="card remove">
			<h2>Remove NFS</h2>
			<p>Remove nfs-kernel-server</p>
		</a>
	
		<a href="?action=remove&package=samba" class="card remove">
			<h2>Remove Samba</h2>
			<p>Remove samba</p>
		</a>
	
		<a href="?action=remove&package=proxy" class="card remove">
			<h2>Remove Proxy</h2>
			<p>Remove squid proxy</p>
		</a>
	
		<a href="?action=remove&package=mail" class="card remove">
			<h2>Remove E-Mail</h2>
			<p>Remove postfix</p>
		</a>
	
		<a href="?action=remove&package=nagios" class="card remove">
			<h2>Remove Nagios</h2>
			<p>Remove nagios</p>
		</a>
	
		<a href="?action=remove&package=openvpn" class="card remove">
			<h2>Remove OpenVPN</h2>
			<p>Remove openvpn</p>
		</a>
	
		<a href="?action=remove&package=voip" class="card remove">
			<h2>Remove VOIP</h2>
			<p>Remove asterisk</p>
		</a>
	
	
		<a href="?action=remove&package=djando" class="card remove">
			<h2>Remove Djando</h2>
			<p>Remove djando</p>
		</a>
	
		<a href="?action=remove&package=nodejs" class="card remove">
			<h2>Remove NodeJS</h2>
			<p>Remove nodejs</p>
		</a>
	
		<a href="?action=remove&package=openstack" class="card remove">
			<h2>Remove OpenStack</h2>
			<p>Remove openstack</p>
		</a>
	
		<a href="?action=remove&package=snort" class="card remove">
			<h2>Remove Snort</h2>
			<p>Remove snort</p>
		</a>
	
		<a href="?action=update" class="card update">
			<h2>Update Packages</h2>
			<p>Update System Packages</p>
		</a>
	
		<a href="?action=upgrade" class="card update">
			<h2>Upgrade Packages</h2>
			<p>Upgrade System Packages</p>
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
