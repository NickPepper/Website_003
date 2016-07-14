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
<FORM name="search"  method="POST">Найти препарат:&nbsp;&nbsp;<INPUT type="text" name="search" class="input" maxlength="100" value="">&nbsp;&nbsp;<INPUT type="submit" name="submit" value="ПОИСК" class="butt">&nbsp;&nbsp;<INPUT type="button" name="help" value="ПОДСКАЗКА" class="butt" onClick='window.open("help.html","help","scrollbars=no,resizable=no,location=no,menubar=no,toolbar=no,status=no,width=550,height=200")'>
</FORM>
<p align="justify">Здесь Вы можете осуществить бронирование лекарств или оформить заказ на доставку лекарственных препаратов.<br><b><i>&laquo;Интернет-аптека 003&raquo;</i></b> поможет Вам сэкономить время и средства при покупке необходимых лекарств и медицинских товаров.<br>Лекарства, заказанные в <b><i>&laquo;Интернет-аптеке 003&raquo;</i></b>, имеют все необходимые сертификаты. Служба доставки лекарств 003 гарантирует подлинность и качество всех поставляемых лекарств и медицинских товаров.</p>
<p align="justify">При доставке лекарства на дом соблюдаются условия хранения, транспортировки, сроки реализации. Все аптеки, являющиеся партнерами Справочной службы 003 в проекте <b><i>&laquo;Доставка лекарств на дом&raquo;</i></b>, имеют необходимые лицензии.</p>
<p align="justify">Подробнее о бронировании и доставке лекарств на дом или в другое удобное для вас место рассказывается в разделах <a href="dostavka.php"><b><i>&laquo;О доставке&raquo;</i></b></a>  и <a href="bronirovanie.php"><b><i>&laquo;Бронирование лекарств&raquo;</i></b></a>.</p>
<p align="justify">Прием заказов на доставку лекарств и бронирование лекарств в аптеках ведется круглосуточно.</p>
<p align="justify">Доставка лекарств производится с 11 до 22 часов.</p>
<p align="justify"><b>Внимание!</b> Интернет-аптека 003 не принимает заказы на доставку лекарственных средств, входящих в Списки постоянного Комитета по контролю наркотиков (сильнодействующие и ядовитые), а также препаратов, входящих в перечень наркотических, психотропных средств и их прекурсоров.</p>
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
