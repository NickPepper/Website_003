<?PHP
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include('h.inc');
?>
<TD>
<!-- right table begins -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/uslugi.gif" border="0" width="575" height="22" ALT=""></td>
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

<tr valign="top" height="100%">
<td bgcolor="#E9E9E9" align="justify" STYLE="padding:18px">
<p align="justify">�� ����� ����� �� ������� <a href="bronirovanie.php"><b><i>������������� � ������</i></b></a> ����������� ������������� �������� ��� �������� <a href="dostavka.php"><b><i>�������� ��������� �� ���</i></b></a>.</p>
<p align="justify">������������ � ���������� ������ �� �������� ������������� ���������� ������������ ������� <a href="poisk.php" ID="bllink" name="bllink"><b><i>&laquo;����� ��������&raquo;</i></b></a>. ��� ��������� �������� ����� ���������� ��� ��������� ����� "���������".</p>
<p align="justify">���� �� �� ����� ������������ ��� ���������, �� ��������� ��� ������ �� ����������� ����� (��. <a href="questions.php"><b><i>&laquo;���� �������&raquo;</i></b></a>), � ������� 24 ����� �� �������� �����, ��� �������� ���������� ������ �������� � ����������.</p>
<p align="justify">��������� � ������������ � �������� �������� �� ��� ��� � ������ ������� ��� ��� ����� �������������� � �������� <a href="dostavka.php"><b><i>&laquo;� ��������&raquo;</i></b></a>  � <a href="bronirovanie.php"><b><i>&laquo;������������ ��������&raquo;</i></b></a>.</p>

<p align="justify"><br><b>�� �������� � �� ����� ���������� ������ 003 �� ������:</b>
<UL>
<LI>�������� ��������� ���������� � ������� � ��������� ������������� ���������� � ������� ������ ������;</LI>
<LI>�������� ����� � �������� ������������� ���������� �� ��� ��� � ����;</LI>
<LI>������������� � ������ ����������� ������������� ��������;</LI>
<LI>�������� ��������� ���������� �� �������, ��������������� ������������ �������� � ������������������ ��������� ������;</LI>
<LI>������������ � ������������ ���� ���������� ���������� ����������, ������� ������� ��� ��������� � �������� ��������;</LI>
<LI>����� ���������� �� �����������, ����������� �������, � ���������� � ��������������.</LI>
</UL>
<b>����� ����� ������������� �� �������� 003 �� ������ ������� � ������ ������������� ������ ������� ������ ������.</b>
</p>
</td>
</tr>
</table>
<!-- right table ends -->
</TD>
</TR>
<?PHP include('f.inc'); ?>
