<?PHP
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include('h.inc');
?>
<TD>
<!-- right table begins -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/search.jpg" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td bgcolor="#E9E9E9" align="justify" STYLE="padding:18px"><small>Сведения из аптек, в которых возможно бронирование лекарств и оформление их доставки.</small><br><br>
<FORM name="search" action="" method="GET">Найти препарат:&nbsp;&nbsp;<INPUT type="text" name="search" class="input" maxlength="100" value="">&nbsp;&nbsp;<INPUT type="submit" name="submit" value="ПОИСК" class="butt">&nbsp;&nbsp;<a href="#help" onMouseover="window.status='';return true" onMouseout="window.status=''" onClick='window.open("help.html","help","scrollbars=no,resizable=no,location=no,menubar=no,toolbar=no,status=no,width=550,height=200")'>
<font color="#FF0000">ПОДСКАЗКА</font></a>
</FORM>
</td>
</tr>
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/searchres.gif" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="middle" height="20" bgcolor="#D4D4D4" align="center">
<td width="55%"><i>препарат</i></td>
<td width="30%"><i>цена</i></td>
<td width="15%">&nbsp;</td>
</tr>
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
</table>
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">
<tr valign="middle" align="center">
<td width="55%">Клофелин Упса</td>
<td width="30%">126 р.</td>
<td width="15%"><a href="javascript:void(0)">в корзину</a></td>
</tr>
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
<tr valign="middle" align="center">
<td width="55%">LSD-25</td>
<td width="30%">142000,49 р.</td>
<td width="15%"><a href="javascript:void(0)">в корзину</a></td>
</tr>
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
<tr valign="middle" align="center">
<td width="55%">Озверин Велесова</td>
<td width="30%">10,49 р.</td>
<td width="15%"><a href="javascript:void(0)">в корзину</a></td>
</tr>
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
<tr valign="middle" align="center">
<td width="55%">Cannabis <small>(расфасованный)</small></td>
<td width="30%">1500 р.</td>
<td width="15%"><a href="javascript:void(0)">в корзину</a></td>
</tr>
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
</table>
</td>
</tr>
</table>
<!-- right table ends -->

<!-- ***************** K O R Z I N A ******************************************** -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">
<tr valign="top">
<td bgcolor="#E9E9E9"><BR><IMG SRC="i/korzina.jpg" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td>

	<form name="oform" action="" method="POST">
<!-- table 1 -->
	    <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#E6F9F5">
		<tr height="20" align="center" bgcolor="#D4D4D4">
		    <td><i>название</i></td>
		    <td><i>кол-во</i></td>
		    <td><i>цена</i></td>
		    <td><i>сумма</i></td>
		    <td><i>уд.</i></td>
		</tr>
			    <tr height="1" bgcolor="#FF0000"><td colspan="5"></td></tr>
		<tr align="center" height="24">
		    <td>Клофелин Упса</td>
		    <td>1</td>
		    <td>126 р.</td>
		    <td>126 р.</td>
		    <td><a href="javascript:void(0)" TITLE="удалить из корзины"><b>X</b></a></td>
		</tr>
			    <tr height="1" bgcolor="#BFBFBF"><td colspan="5"></td></tr>
		<tr align="center" height="24">
		    <td>LSD-25</td>
		    <td>1</td>
		    <td>142000,49 р.</td>
		    <td>142000,49 р.</td>
		    <td><a href="javascript:void(0)" TITLE="удалить из корзины"><b>X</b></a></td>
		</tr>
			    <tr height="1" bgcolor="#BFBFBF"><td colspan="5"></td></tr>
		<tr align="center" height="24">
		    <td>Озверин Велесова</td>
		    <td>1</td>
		    <td>10,49 р.</td>
		    <td>10,49 р.</td>
		    <td><a href="javascript:void(0)" TITLE="удалить из корзины"><b>X</b></a></td>
		</tr>
			    <tr height="1" bgcolor="#BFBFBF"><td colspan="5"></td></tr>
		<tr align="center" height="24">
		    <td>Cannabis</td>
		    <td>3</td>
		    <td>1500 р.</td>
		    <td>4500 р.</td>
		    <td><a href="javascript:void(0)" TITLE="удалить из корзины"><b>X</b></a></td>
		</tr>
			    <tr height="1" bgcolor="#FF0000"><td colspan="5"></td></tr>

			<tr height="30" bgcolor="#D4D4D4" align="center">
			    <td><i>Итого:</i></td>
			    <td><b>6</b></td>
			    <td>&nbsp;</td>
			    <td><b>146636,98 р.</b></td>
			    <td>&nbsp;</td>
			</tr>

			    <tr height="20" valign="TOP" bgcolor="#D4D4D4" align="center">
				<td colspan="5">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
				<td align="center"><input type="submit" class="butt" name="order" value="ОТПРАВИТЬ ЗАКАЗ"></td>
				</tr>
				</table>
				</td>
				</tr>


		<tr height="10" valign="TOP" bgcolor="#D4D4D4" align="center">
		    <td colspan="5">&nbsp;</td>
		</tr>

	    </table>

<!-- END table 1 -->

	<!-- END of средняя таблица 2 -->
	
	<form>

</td>
</tr>
</table>
<!-- **************** END OF KORZINA ********************************** -->

</TD>
</TR>
<?PHP include('f.inc'); ?>