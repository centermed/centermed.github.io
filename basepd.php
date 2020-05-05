<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_basepd = "localhost";
$database_basepd = "basepd";
$username_basepd = "admin";
$password_basepd = "123";
$basepd = mysql_pconnect($hostname_basepd, $username_basepd, $password_basepd) or trigger_error(mysql_error(),E_USER_ERROR); 

$link = mysqli_connect($hostname_basepd,$username_basepd,$password_basepd);

if($link)
			{
				echo "База подключена", "<br>"; 
			}
			else
			{
				echo "База не подключена";
			}


mysqli_query($link, "SET NAMES cp1251;") or exit(mysql_error());

mysqli_query($link, "SET CHARACTER SET cp1251;") or exit(mysql_error());

?>