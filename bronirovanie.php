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
    document.getElementById("bllink").style.color = "#1122EE";
    document.getElementById("bllink2").style.color = "#EE1122";    
   }else{
     bllink.style.color = "#1122EE";
     bllink2.style.color = "#EE1122";     
   }
   FLAK=1;
} else {
   if (document.getElementById){
    document.getElementById("bllink").style.color = "#EE1122";
    document.getElementById("bllink2").style.color = "#1122EE";    
   }else{
    bllink.style.color = "#EE1122";
    bllink2.style.color = "#1122EE";    
   }
   FLAK=0;
}
lTimeout = setTimeout("Bl()", 500);
}
//-->
</SCRIPT>

<TR valign="top" height="100%">
<TD STYLE="padding:18px" bgcolor="#E9E9E9">
<H1>������������ ��������</H1>
<p align="justify">�������� �� �������� &laquo;003&raquo; ��� ������� ����� ����� ������� <a href="poisk.php" ID="bllink" name="bllink"><b>&laquo;����� ��������&raquo;</b></a>, �� ������� �������� ������ ������������� �������� � ������� ��� ��� ����� � ������� 24 ����� ����� ���������� ������.</p>
<p align="justify">������������ ���������� ������������ ������������� � ���������� ������ ��� �� ����� � ������� <a href="poisk.php" ID="bllink2" name="bllink2"><b>&laquo;����� ��������&raquo;</b></a>.</p>
<p align="justify">��������� � ������� ������������ ���������� ����� 500 ������� �����-���������� � ������ ������ ������.</p>
<p align="justify"><b>������� ������: ������� ��� ������� � ����� ����� ������, � ������� ������������ ��������, �������, ��� �� ��������� � &laquo;������-003&raquo; ������������ ���������, ������� ������� � �������� ��������</b>.</p>
<p align="justify">��������� ���������������� ��������� ������ ���� �� ����� 200 ������.</p>
<p align="justify">���������� &laquo;������-003&raquo; � ���� ������� �������� ���� ����� &laquo;��������&raquo; � &laquo;��������&raquo;.</p>
<p align="justify">��� ������ ��������������� ����������� ������������� ������� ����������� ������� ����������� ������ �������.</p>
<p align="justify">&nbsp;</p>
</TD>
</TR>
</table>
<!-- right table ends -->
</TD>
</TR>
<?PHP include('f.inc'); ?>
