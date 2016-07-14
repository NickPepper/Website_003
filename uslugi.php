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
<p align="justify">На нашем сайте Вы сможете <a href="bronirovanie.php"><b><i>забронировать в аптеке</i></b></a> необходимый лекарственный препарат или оформить <a href="dostavka.php"><b><i>доставку лекарства на дом</i></b></a>.</p>
<p align="justify">Бронирование и оформление заказа на доставку лекарственных препаратов производится рубрике <a href="poisk.php" ID="bllink" name="bllink"><b><i>&laquo;Заказ лекарств&raquo;</i></b></a>. Как правильно оформить заказ препаратов Вам расскажет графа "ПОДСКАЗКА".</p>
<p align="justify">Если Вы не нашли интересующее Вас лекарство, то отправьте нам запрос по электронной почте (см. <a href="questions.php"><b><i>&laquo;Ваши вопросы&raquo;</i></b></a>), в течение 24 часов Вы получите ответ, где возможно приобрести данный препарат в Петербурге.</p>
<p align="justify">Подробнее о бронировании и доставке лекарств на дом или в другое удобное для Вас место рассказывается в разделах <a href="dostavka.php"><b><i>&laquo;О доставке&raquo;</i></b></a>  и <a href="bronirovanie.php"><b><i>&laquo;Бронирование лекарств&raquo;</i></b></a>.</p>

<p align="justify"><br><b>По телефону и на сайте СПРАВОЧНОЙ СЛУЖБЫ 003 Вы можете:</b>
<UL>
<LI>получить подробную информацию о наличии и стоимости лекарственных препаратов в аптеках любого района;</LI>
<LI>оформить заказ и доставку лекарственных препаратов на дом или в офис;</LI>
<LI>забронировать в аптеке необходимое лекарственное средство;</LI>
<LI>получить подробную информацию об услугах, предоставляемых медицинскими центрами и косметологическими клиниками города;</LI>
<LI>ознакомиться с предлагаемой нами уникальной дисконтной программой, которая поможет Вам сохранить и укрепить здоровье;</LI>
<LI>найти информацию по ветеринарии, медицинской технике, о санаториях и профилакториях.</LI>
</UL>
<b>Кроме этого круглосуточно по телефону 003 Вы можете вызвать в случае необходимости машины частной скорой помощи.</b>
</p>
</td>
</tr>
</table>
<!-- right table ends -->
</TD>
</TR>
<?PHP include('f.inc'); ?>
