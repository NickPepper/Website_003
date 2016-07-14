<?PHP
header("Last-Modified: " . gmdate("D, d M Y H:i:s", mktime(11,0,0,date("m"),date("d") - date("w") + 1,date("Y"))) . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include('h.inc');
?>
<TD>
<!-- right table begins -->
<table border="0" cellpadding="0" cellspacing="0" width="575" height="100%">
<tr valign="top">
<td><IMG SRC="i/search.gif" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top" height="100%">
<td bgcolor="#E9E9E9" align="justify" STYLE="padding:18px"><small>Сведения из аптек, в которых возможно бронирование лекарств и оформление их доставки.</small><br><br>
<FORM name="search" action="" method="GET">Найти препарат:&nbsp;&nbsp;<INPUT type="text" name="search" class="input" maxlength="100" value="">&nbsp;&nbsp;<INPUT type="submit" name="submit" value="ПОИСК" class="butt">&nbsp;&nbsp;<a href="#help" onMouseover="window.status='';return true" onMouseout="window.status=''" onClick='window.open("help.html","help","scrollbars=no,resizable=no,location=no,menubar=no,toolbar=no,status=no,width=550,height=200")'>
<font color="#FF0000">ПОДСКАЗКА</font></a>
</FORM>
</td>
</tr>
<tr valign="top">
<td><IMG SRC="i/searchres.gif" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
<tr valign="middle" height="20">
<td width="40%" bgcolor="#E9E9E9" align="center">ПРЕПАРАТ</td>
<td width="40%" bgcolor="#E6F9F5" align="center">ЦЕНА</td>
<td width="20%" bgcolor="#E9E9E9" align="center">ЗАКАЗАТЬ</td>
</tr>
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
</table>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td width="40%" bgcolor="#E9E9E9">&nbsp;</td>
<td width="40%" bgcolor="#E6F9F5"><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR></td>
<td width="20%" bgcolor="#E9E9E9">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
<!-- right table ends -->
</TD>
<TD width="1" bgcolor="#222222"></TD>
</TR>
<?PHP include('f.inc'); ?>