<?
$db_user="oo3spbru";
$db_passwd="sqrt27";
$db_name="oo3spbru";
$db_host="localhost";

mysql_connect($db_host,$db_user,$db_passwd)or die("<h3>В соеденении с Базой Данных отказано. Повторите попытку позже</h3>");

mysql_select_db($db_name)or die ("<h3>Проблемы с Базой данных. Повторите попытку позже</h3>");
?>
