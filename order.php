<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include("connect.inc.php");

function my_die($string)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>���������� ������ - ���������� ������ 003</title>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=koi8-r">
<meta http-equiv="Content-Language" content="ru">
<meta HTTP-EQUIV="imagetoolbar" content="no">
<meta name="author" content="Nick Pepper (c) 2004">
<meta name="keywords" content="����� ���������,���������� ������">
<meta name="description" content="���� ���������� ������ 003">
<meta NAME="rating" CONTENT="General">
<meta NAME="revisit-after" CONTENT="15 days">
<meta NAME="ROBOTS" CONTENT="ALL">
<meta NAME="DC.Title" CONTENT="���������� ������ 003">
<meta NAME="DC.Creator" CONTENT="Nick Pepper (c) 2004">
<meta NAME="DC.Subject" CONTENT="���������� ������ 003">
<meta NAME="DC.Description" CONTENT="���������� ������ 003">
<link rel="stylesheet" type="text/css" href="css/1.css">
<link rel="SHORTCUT ICON" href="favicon.ico">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" width="575" cellpadding="0" cellspacing="0" bgcolor="#D4D4D4" height="100%">
<tr>
<td align='center'>
<?echo($string)?>
</td>
</tr>
</table>
<?
die();
}

if(isset($submit))
{
$cfio = base64_encode($fio);
$ctel = base64_encode($telefon);
$cmail= base64_encode($u_email);
setcookie("oo3uf",$cfio,time()+(1000000));
setcookie("oo3ut",$ctel,time()+(1000000));
setcookie("oo3ue",$cmail,time()+(1000000));

if($allid!="")
{
$ai = substr($allid,0,strlen($allid)-1);
$ids = explode("s",$ai);
$total_sum =0;

if((strlen($fio)>255)||(strlen($telefon)>255)||(strlen($u_email)>255))
{
my_die("������! �� ����� ������ ������� ������� �����");
}

if(!mysql_query("insert into orders set fio='$fio', tel='$telefon',email='$u_email', idate=now(), itime=now()"))
my_die("������! �������� ������ ��� ������ � ����� ������");

$last_id = mysql_insert_id();

$message  = "<html><body><table width='100%' border=1>
<tr><td><b>����� N $last_id</b> ��������: <b>$fio</b> �������: $telefon E-mail: <b>$u_email</b></td></tr><tr><td>�������:
<table>
";


	for($i=0;$i<count($ids);$i++)
	{
$res=mysql_query("select name, price from preps where id='".$ids[$i]."'");
	if(mysql_num_rows($res)>0)
	{
	$row = mysql_fetch_array($res);
		$nm = "q".$ids[$i];
		$colvo = $$nm;
		$name = $row[name];
		$price = $row[price];
		$total_sum+=($price*$colvo);
mysql_query("insert into order_items set id_ord='$last_id', name='$name', price='$price', col='$colvo'");
$message.= "<tr><td>��������:  <b>$name <td>����: <b>$price<td>���-��: $colvo";
	}

	}
mysql_query("update orders set sum='$total_sum' where id='$last_id'");

}


$message .= "</table></td></tr><tr><td>�����: <b>$total_sum</table></body></html>";

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=koi8-r\n";
$headers .= "From: 003 <mailer@003.spb.ru>\n";

mail("deliv@hotmail.ru", "����� ����� �� ����� 003.spb.ru", $message,$headers) or my_die("� ��������� ��� ����� �� ����� ���� ������ ������ � ����� � ������������ ����������� �� �������. ���������� ��������� ������� �����.");

my_die("��� ����� ������ � ��������� � ������� ���������. ����� ������ ������ $last_id");
}


$value = $oo3var;
$cols = $oo3cc;
$all_summ=0;

$cl = substr($oo3cc,0,strlen($oo3cc)-1);
$colvs = explode("s",$cl);
$val=explode("s",$value);

if(count($val)<1)
die();

if(count($val)==1)
{
if(!is_numeric($val[0]))
	die();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>���������� ������ - ���������� ������ 003</title>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=koi8-r">
<meta http-equiv="Content-Language" content="ru">
<meta HTTP-EQUIV="imagetoolbar" content="no">
<meta name="author" content="Nick Pepper (c) 2004">
<meta name="keywords" content="����� ���������,���������� ������">
<meta name="description" content="���� ���������� ������ 003">
<meta NAME="rating" CONTENT="General">
<meta NAME="revisit-after" CONTENT="15 days">
<meta NAME="ROBOTS" CONTENT="ALL">
<meta NAME="DC.Title" CONTENT="���������� ������ 003">
<meta NAME="DC.Creator" CONTENT="Nick Pepper (c) 2004">
<meta NAME="DC.Subject" CONTENT="���������� ������ 003">
<meta NAME="DC.Description" CONTENT="���������� ������ 003">
<link rel="stylesheet" type="text/css" href="css/1.css">
<link rel="SHORTCUT ICON" href="favicon.ico">
<script language="JavaScript">
<!--
function valid()
{
var d=document;
var fio = d.forms['oform'].fio.value;
var tl = d.forms['oform'].telefon.value;
var ml = d.forms['oform'].u_email.value;
var re = /[a-zA-Z_0-9]{1,}\@[a-zA-Z_0-9]{1,}\.[a-zA-Z_0-9]{2,}/;


if((fio=="")||(tl=="")||(ml==""))
{
alert('���� "�.�.�." , "���������� �������" � "Email �����"  ����������� � ����������!');
return false;
}

if(!re.exec(ml))
{
alert('���� "Email �����" ��������� �����������');
return false;
}

if(fio.length>255)
{
alert('� ���� "�.�.�." ������� ������� ����� ������ (255 �������� ��������)');
return false;
}

if(tl.length>255)
{
alert('� ����"���������� �������" ������� ������� ����� ������. (255 �������� ��������)');
return false;
}

d.cookie='oo3cc=';
d.cookie='oo3var=';
window.opener.location="poisk.php";
return true;
}
//-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" width="575" cellpadding="0" cellspacing="0" bgcolor="#D4D4D4" height="100%">
<tr valign="top">
<td><img SRC="i/zakaz.jpg" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td>
<form name="oform" action="order.php" method="POST" OnSubmit="return valid();">
<table border="0" cellpadding="0" cellspacing="0" width="575" bgcolor="#E6F9F5">
		<tr height="20" align="center" bgcolor="#D4D4D4">
		    <td><i>��������</i></td>
		    <td><i>���-��</i></td>
		    <td><i>����</i></td>
		    <td><i>�����</i></td>
		</tr>

<?
if(isset($oo3uf))
$fio = base64_decode($oo3uf);

if(isset($oo3ut))
$telefon = base64_decode($oo3ut);

if(isset($oo3ue))
$u_email = base64_decode($oo3ue);

$ids = "";
for($z=0;$z<count($val);$z++)
{
if(is_numeric($val[$z]))
{
$id = $val[$z];
$ids .=$id."s";
$res = mysql_query("select name, price from preps where id='".$id."'");
if(mysql_num_rows($res))
{
$row = mysql_fetch_array($res);
$name = $row[name];
$price = $row[price];

$colvo = 1;

for($m=0;$m<count($colvs);$m++)
{
		$h = explode("=",$colvs[$m]);
		if($h[0]==$id)
		$colvo = $h[1];
}

$sum = $price * $colvo;
$all_summ +=$sum;



?>
<tr height="1" bgcolor="#BFBFBF"><td colspan="4"></td></tr>
<tr align="center" height="24">
<td><input type="hidden" name="q<?echo($id)?>" value="<?echo($colvo)?>"> <?echo($name)?></td>
<td><?echo($colvo)?></td>
<td><?echo($price)?></td>
<td><?echo($sum)?></td>
</tr>
<?
}
}
}
?>
			<tr height="30" bgcolor="#D4D4D4" align="center">
			    <td colspan="4"><b><font color="#28796B">����� ����� ������: <?echo($all_summ)?></font></b></td>
			</tr>

			<tr bgcolor="#D4D4D4" align="center">
			    <td colspan="4">
				<table border="0" cellpadding="2" cellspacing="0">
				<tr><td align="right">�.�.�.:&nbsp;</td><td align="left"><input type="text" class="input" name="fio" value="<?echo($fio)?>" maxlength="100"></td></tr>
				<tr><td align="right">���������� �������:&nbsp;</td><td align="left"><input type="text" class="input" name="telefon" value="<?echo($telefon)?>" maxlength="100"><input type='hidden' name="allid" value="<?echo($ids)?>"></td></tr>
<tr><td align="right">Email �����:&nbsp;</td><td align="left"><input type="text" class="input" name="u_email" value="<?echo($u_email)?>" maxlength="100"></td></tr>			
</table>
				</td>
			</tr>

			    <tr height="40" valign="MIDDLE" bgcolor="#D4D4D4" align="center">
				<td colspan="4">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
				<td align="center"><br><input type="submit" class="butt" name="submit" value="��������� �����"><br></td>
				</tr>
				</table>
				</td>

				</tr>
	    </table>
<form>
</td>
</tr>
</table>
</body></html>
