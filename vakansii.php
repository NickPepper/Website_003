<?PHP
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include('h.inc');
include("connect.inc.php");
?>
<TD>
<!-- right table begins -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/vakansii.jpg" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top" height="100%">
<td bgcolor="#E9E9E9" align="justify" STYLE="padding:18px">
<?
$res = mysql_query("select * from vocations") or die("Ошибка в запросе");
while($row=mysql_fetch_array($res))
{
?>
<p align="justify">
<table border="1" cellpadding="4" cellspacing="0" width="100%" bordercolor="#00AC94" STYLE="border:1px;" bgcolor="#D7D7D7">
<tr>
<td><b>Название вакансии</b></td>
<td width='80%'><?=$row[1]?></td>
</tr>
<tr>
<td><b>Пол</b></td>
<td><?=$row[2]?></td>
</tr>
<tr>
<td><b>Возраст</b></td>
<td><?=$row[3]?></td>
</tr>
<tr>
<td><b>Образование</b></td>
<td><?=$row[4]?></td>
</tr>
<tr>
<td><b>Тип работы</b></td>
<td><?=$row[5]?></td>
</tr>
<tr>
<td><b>Зарплата</b></td>
<td><?=$row[6]?></td>
</tr>
<tr>
<td><b>Требования к кандидату</b></td>
<td><?=$row[7]?></td>
</tr>
<tr>
<td><b>Должностные обязанности</b></td>
<td><?=$row[8]?></td>
</tr>
<tr>
<td><b>Условия труда</b></td>
<td><?=$row[9]?></td>
</tr>
<tr>
<td><b>Контактное лицо и тел.</b></td>
<td><?=$row[10]?></td>
</tr>
</table>
</p>
<p align="justify">&nbsp;</p>
<?}?>
</td>
</tr>
</table>
<!-- right table ends -->
</TD>
</TR>
<?PHP include('f.inc'); ?>
