<?PHP
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML><HEAD><TITLE>������ ������ - ���������� ������ 003</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=koi8-r">
<META http-equiv="Content-Language" content="ru">
<meta HTTP-EQUIV="imagetoolbar" content="no">
<meta name="author" content="Nick Pepper (c) 2004">
<meta name="keywords" content="������,���������� ������">
<meta name="description" content="���� ���������� ������ 003">
<META NAME="rating" CONTENT="General">
<META NAME="revisit-after" CONTENT="15 days">
<META NAME="ROBOTS" CONTENT="ALL">
<META NAME="DC.Title" CONTENT="���������� ������ 003">
<META NAME="DC.Creator" CONTENT="Nick Pepper (c) 2004">
<META NAME="DC.Subject" CONTENT="���������� ������ 003">
<META NAME="DC.Description" CONTENT="���������� ������ 003">
<link rel="stylesheet" type="text/css" href="css/1.css">
<link rel="SHORTCUT ICON" href="favicon.ico">
</HEAD>

<BODY leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" OnContextMenu="return false" STYLE="cursor:default">
<script type="text/javascript">
<!--
d=document;
function valid() {
var rvalue;

var l = d.faq_add.email.value;

if(l!="")
{
if ((l.indexOf('@', 0) == -1) || (l.indexOf('.', 0) == -1) || (l.length <= 4) || (l.indexOf(' ', 0) != -1))
{
alert("���� 'E-mail' ��������� �����������");
return false;
}
}

var n = d.faq_add.name.value;
var t = d.faq_add.mytxt.value;

if (n == "" || t == "")
{
alert('���� "���" � "������" ����������� � ����������.');
rvalue = false;
}
else rvalue = true;

return rvalue;
}
//-->
</script>

<?
if(isset($submit))
{

$name = addslashes(strip_tags($name));
$email = addslashes(strip_tags($email));
$mytxt = addslashes(strip_tags($mytxt));

if((strlen($mytxt)>90000)||(strlen($email)>254)||(strlen($name)>254))
{
die("�� ����� ������� ����� ������. ���������� ���������� ���������� (����� 255,255,90000)");
}
include("connect.inc.php");

mysql_query("insert into questions set name='$name', mail='$email', quest='$mytxt', idate=now(), itime=now()");

$message .= $mytxt;

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/plain;charset=koi8-r\n";
$headers .= "From: $name <$email>\n";

$to = "klimow@mail.wplus.net";
//$to = "ice@bsn.ru";
mail($to, "����� ������ �� ���������� ����� 003.spb.ru", $message,$headers);

echo("<script language='JavaScript'>window.opener.location.reload();</script>");

die('
<table border="0" width="350" cellpadding="8" cellspacing="0" bgcolor="#E9E9E9" height="100%">
<tr valign="top">
<td>
<br><br>
<p align="center">��� ������ ��� ������� ��������</p>
</td>
</tr>
</table>
</BODY></HTML>


');

}
?>

<table border="0" width="350" cellpadding="8" cellspacing="0" bgcolor="#E9E9E9" height="100%">
<tr valign="top">
<td>
<form action="q.php" method="post" name="faq_add" onSubmit="return valid()">
<p align="justify">� ��� ���� �������? �� ����� ���� �������� �� ���, �������� �� ����� ����� � ������ �� �����. ������ ��������� ��� ���� �����, �� ������� ��� ����� ����������� �����, �� ������� ��� ������ �����.</p>
	<table>
	<tr>
		<td>���� ���:</td>
		<td><input type="text" name="name" class="input" maxlength="100"></td>
	</tr>
	<tr>
		<td>��� e@mail:</td>
		<td><input type="text" name="email" class="input" maxlength="100"></td>
	</tr>
	<tr>
		<td colspan="2">�� ��� ����������� �������:<br>
			<textarea cols="25" rows="6" style="width:100%" name="mytxt" class="input"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input type="submit" value="��������� ������" class="butt" name='submit'></td>
	</tr>
	</table>
</form>
</td>
</tr>
</table>
</BODY></HTML>