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
<H1>БРОНИРОВАНИЕ ЛЕКАРСТВ</H1>
<p align="justify">Позвонив по телефону &laquo;003&raquo; или оформив заказ через рубрику <a href="poisk.php" ID="bllink" name="bllink"><b>&laquo;Заказ лекарств&raquo;</b></a>, Вы сможете выкупить нужный лекарственный препарат в удобное для Вас время в течение 24 часов после оформления заказа.</p>
<p align="justify">Бронирование препаратов производится круглосуточно у операторов службы или на сайте в рубрике <a href="poisk.php" ID="bllink2" name="bllink2"><b>&laquo;Заказ лекарств&raquo;</b></a>.</p>
<p align="justify">Ежедневно к услугам бронирования обращаются более 500 жителей Санкт-Петербурга и гостей нашего города.</p>
<p align="justify"><b>ПРАВИЛА ВЫКУПА: подойти без очереди в любой отдел аптеки, в которой забронирован препарат, сказать, что Вы оформляли в &laquo;Службе-003&raquo; бронирование препарата, назвать фамилию и выкупить препарат</b>.</p>
<p align="justify">Стоимость забронированного препарата должна быть не менее 200 рублей.</p>
<p align="justify">Партнерами &laquo;Службы-003&raquo; в этом проекте являются сети аптек &laquo;Фармакор&raquo; и &laquo;Фармация&raquo;.</p>
<p align="justify">Для выкупа забронированных рецептурных лекарственных средств обязательно наличие выписанного врачом рецепта.</p>
<p align="justify">&nbsp;</p>
</TD>
</TR>
</table>
<!-- right table ends -->
</TD>
</TR>
<?PHP include('f.inc'); ?>
