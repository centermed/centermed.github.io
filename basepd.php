<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_basepd = "localhost";
$database_basepd = "id13589731_basepd";
$username_basepd = "id13589731_centermed";
$password_basepd = "e#EHG(YqO(X)Uy8jTSYy";
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