<?PHP
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include('h1.inc');
?>
<TD>
<!-- right table begins -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/info.gif" border="0" width="575" height="22" ALT=""></td>
</tr>

<SCRIPT language="JavaScript">
<!--
var FLAK = 0;
var lTimeout = "";
lTimeout = setTimeout("Bl()", 10);

function Bl() {
if (FLAK==0) {
   if (document.getElementById){
    document.getElementById("bllink").style.color = "#1122EE"; // "#315047";
   }else{
     bllink.style.color = "#1122EE"; // "#315047";
   }
   FLAK=1;
} else {
   if (document.getElementById){
    document.getElementById("bllink").style.color = "#EE1122";
   }else{
    bllink.style.color = "#EE1122";
   }
   FLAK=0;
}
lTimeout = setTimeout("Bl()", 500);
}
//-->
</SCRIPT>

<TR valign="top" height="100%">
<TD STYLE="padding:18px" bgcolor="#E9E9E9">
<H1>� ��������</H1>
<p align="justify">&laquo;������-003&raquo; ������������ ����� ������� � �������� ������������� ���������� �� ��� ��� � ����. �������� ����� ����� �� �������� &laquo;003&raquo; ��� �� ����� � ������� <a href="poisk.php" ID="bllink" name="bllink"><b><i>&laquo;����� ��������&raquo;</i></b></a>.</p>
<p align="justify">���� "���������� ������-003"- ��� <a href="poisk.php"><b><i>��������-������ �����-����������</i></b></a>, � ������� ����������� ���������� �����������  �������� - ����� 9000 ������������. ����� ����� � <a href="poisk.php"><b><i>��������-������</i></b></a> ������� ����� ������� ������������ ����������, �������� ��������� � ������� �������, ������������ �������� ������� ��������� ��������������.</p>
<p align="justify">������ ���������� � ���� ������� �������� �������� ���� &laquo;����� �������&raquo;, &laquo;��������&raquo;, &laquo;��������&raquo;.</p>
<p align="justify">����� ������� ������� �������������.</p>
<p align="justify">�������� �������������� � 11 �� 22 �����.</p>
<p align="justify">������� �������� ��������:<br><br>
<table border="1" cellpadding="4" cellspacing="0" width="100%" bordercolor="#00AC94" STYLE="border:1px;" bgcolor="#D7D7D7">
<tr>
<td><i>�������� ������</i></td>
<td><i>���������� ��������</i></td>
<td><i>������� ��������</i></td>
</tr>
<tr>
<td>&laquo;����� �������&raquo;</td>
<td>�� 500 ������</td>
<td>�� 200 ������. ���� �������� 50 ������ �� ������, �������� - 100 ������.</td>
</tr>
<tr>
<td>&laquo;��������&raquo;</td>
<td>�� 500 ������</td>
<td>�� ����� �����. ���� �������� 200 ������. �������� �� ��������������.</td>
</tr>
<tr>
<td>&laquo;��������&raquo;</td>
<td>�� 500 ������</td>
<td>-------------</td>
</tr>
</table>
</p>
<p align="justify"><b>������ ������� ������������ ��������� �������, ������� �������� ��� �����. ��� ��������� ������ ��� ������ �������� ���������� (������� ���������, �������� ��� �� ��������� ������� �, � ������ ������� ��������, �������� ��� �� ��������).<br>��� ������ ����������� ������������� ������� ����������� ������� ����������� ������ �������</b>.</p>
<p align="justify">&nbsp;</p>
</TD>
</TR>
</table>
<!-- right table ends -->
</TD>
</TR>
<?PHP include('f.inc'); ?>