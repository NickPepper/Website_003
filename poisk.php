<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include("connect.inc.php");
include("functions.inc.php");
if(isset($add))
{
        if(is_numeric($add))
                add_drug($add);
}

if(isset($drop))
{
        if(is_numeric($drop))
                drop_drug($drop);
}

include("h.inc");

$value = $oo3var;

if(isset($add))
	$value = $value ."s". $add;

$val=explode("s",$value);

if(isset($drop))
{
	for($z=0;$z<count($val);$z++)
	{
	  if($val[$z]==$drop)
		{
		$val[$z]="k";
		}
	}

}

?>
<TD>
<!-- right table begins -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/search.gif" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td bgcolor="#E9E9E9" align="justify" STYLE="padding:18px">
<FORM name="search"  method="POST">����� ��������:&nbsp;&nbsp;<INPUT type="text" name="search" class="input" maxlength="100" value="">&nbsp;&nbsp;<INPUT type="submit" name="submit" value="�����" class="butt">&nbsp;&nbsp;<INPUT type="button" name="help" value="���������" class="butt" onClick='window.open("help.html","help","scrollbars=no,resizable=no,location=no,menubar=no,toolbar=no,status=no,width=550,height=200")'>
</FORM>
<p align="justify">����� �� ������ ����������� ������������ �������� ��� �������� ����� �� �������� ������������� ����������.<br><b><i>&laquo;��������-������ 003&raquo;</i></b> ������� ��� ���������� ����� � �������� ��� ������� ����������� �������� � ����������� �������.<br>���������, ���������� � <b><i>&laquo;��������-������ 003&raquo;</i></b>, ����� ��� ����������� �����������. ������ �������� �������� 003 ����������� ����������� � �������� ���� ������������ �������� � ����������� �������.</p>
<p align="justify">��� �������� ��������� �� ��� ����������� ������� ��������, ���������������, ����� ����������. ��� ������, ���������� ���������� ���������� ������ 003 � ������� <b><i>&laquo;�������� �������� �� ���&raquo;</i></b>, ����� ����������� ��������.</p>
<p align="justify">��������� � ������������ � �������� �������� �� ��� ��� � ������ ������� ��� ��� ����� �������������� � �������� <a href="dostavka.php"><b><i>&laquo;� ��������&raquo;</i></b></a>  � <a href="bronirovanie.php"><b><i>&laquo;������������ ��������&raquo;</i></b></a>.</p>
<p align="justify">����� ������� �� �������� �������� � ������������ �������� � ������� ������� �������������.</p>
<p align="justify">�������� �������� ������������ � 11 �� 22 �����.</p>
<p align="justify"><b>��������!</b> ��������-������ 003 �� ��������� ������ �� �������� ������������� �������, �������� � ������ ����������� �������� �� �������� ���������� (����������������� � ��������), � ����� ����������, �������� � �������� �������������, ������������ ������� � �� �����������.</p>
</td>
</tr>
<?
if((isset($search))||(isset($tmp))||(isset($pg)))
{
if(($search!="")||($tmp!="")||($pg!=""))
{
//echo("SEARCH is $search TMP $temp PG $pg")
?>
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/searchres.gif" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr>
<td valign='top'>
<?
global $p,$lim,$tmp;
$lim = 10;
$count_res = 0;
if(!isset($pg))
$p=1;
else
$p=$pg;
if(!isset($tmp))
$tmp="";

if(isset($search))
search_results($search);
else
{
if($tmp!="")
	print_result($tmp);
}
}
else
{
echo("
<tr valign='top'>
<td>
");
}
}
else
{
echo("
<tr valign='top'>
<td>
");
}
?>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td bgcolor="#E9E9E9">
<?
print_korz();
?>
</td>
</tr>
<tr><td bgcolor="#E9E9E9">
<br><br><br><br><br><br><br><br></td></tr>
</table>
<?print_pager()?>
</td>
</tr>
</table>
</TD>
</TR>
<!-- right table ends -->
<?include("f.inc")?>
