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
<H1>О ДОСТАВКЕ</H1>
<p align="justify">&laquo;Служба-003&raquo; осуществляет прием заказов и доставку лекарственных препаратов на дом или в офис. Оформить заказ можно по телефону &laquo;003&raquo; или на сайте в рубрике <a href="poisk.php" ID="bllink" name="bllink"><b><i>&laquo;Заказ лекарств&raquo;</i></b></a>.</p>
<p align="justify">Сайт "Справочной службы-003"- это <a href="poisk.php"><b><i>Интернет-аптека Санкт-Петербурга</i></b></a>, в которой представлен широчайший ассортимент  лекарств - более 9000 наименований. Кроме этого в <a href="poisk.php"><b><i>Интернет-аптеке</i></b></a> большой выбор средств медицинского назначения, лечебной косметики и средств гигиены, биологически активных добавок различных производителей.</p>
<p align="justify">Нашими партнерами в этом проекте являются аптечные сети &laquo;Натур Продукт&raquo;, &laquo;Фармакор&raquo;, &laquo;Фармация&raquo;.</p>
<p align="justify">Прием заказов ведется круглосуточно.</p>
<p align="justify">Доставка осуществляется с 11 до 22 часов.</p>
<p align="justify">Условия доставки лекарств:<br><br>
<table border="1" cellpadding="4" cellspacing="0" width="100%" bordercolor="#00AC94" STYLE="border:1px;" bgcolor="#D7D7D7">
<tr>
<td><i>Название аптеки</i></td>
<td><i>Бесплатная доставка</i></td>
<td><i>Платная доставка</i></td>
</tr>
<tr>
<td>&laquo;Натур Продукт&raquo;</td>
<td>От 500 рублей</td>
<td>От 200 рублей. Цена доставки 50 рублей по городу, пригород - 100 рублей.</td>
</tr>
<tr>
<td>&laquo;Фармакор&raquo;</td>
<td>От 500 рублей</td>
<td>От любой суммы. Цена доставки 200 рублей. Пригород по договоренности.</td>
</tr>
<tr>
<td>&laquo;Фармация&raquo;</td>
<td>От 500 рублей</td>
<td>-------------</td>
</tr>
</table>
</p>
<p align="justify"><b>Оплата покупки производится наличными курьеру, который доставит Ваш заказ. При получении заказа Вам выдают комплект документов (договор поручения, кассовый чек на стоимость покупки и, в случае платной доставки, кассовый чек за доставку).<br>Для заказа рецептурных лекарственных средств обязательно наличие выписанного врачом рецепта</b>.</p>
<p align="justify">&nbsp;</p>
</TD>
</TR>
</table>
<!-- right table ends -->
</TD>
</TR>
<?PHP include('f.inc'); ?>