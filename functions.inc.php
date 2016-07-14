<?
function add_drug($id)
{
global $oo3var;
$value = $oo3var;

if($value)
{
$val = explode("s",$value);

if(in_array($id,$val)) return;

$value = $value."s".$id;
}
else
	$value=$id;

setcookie("oo3var",$value);

}

function drop_drug($id)
{
global $oo3var;
$value = $oo3var;

if($value)
{
$val = explode("s",$value);
$t=-1;

for($s=0;$s<count($val);$s++)
{
if($val[$s]==$id)
	$t=$s;
}

if($t>-1)
{
	$val[$t]="k";
	$value=implode("s",$val);

}

$value=str_replace("ks","",$value);
$value=str_replace("sk","",$value);
$value=str_replace("k","",$value);

setcookie("oo3var",$value);
}

}



function print_korz()
{
global $val,$p,$tmp,$oo3cc;
$all_summ=0;

$cl = substr($oo3cc,0,strlen($oo3cc)-1);
$colvs = explode("s",$cl);

if(count($val)<1)
{
echo("<br><br><br><br><br><br><br><br><br><br><br>");
return;
}

if(count($val)==1)
{
if(!is_numeric($val[0]))
{
echo("<br><br><br><br><br><br><br><br><br><br><br>");

return;
}
}
?>
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#E9E9E9">
<tr valign="top">
<td><br><img SRC="i/korzina.jpg" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td>

	<form name="oform" action="poisk.php" method="POST">
	<input type='hidden' name='drop' value=''>
	<input type='hidden' name='pg' value='<?echo($p)?>'>
	<input type='hidden' name='tmp' value='<?echo($tmp)?>'>
<!-- table 1 -->
	    <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#E6F9F5">
		<tr height="20" align="center" bgcolor="#D4D4D4">
		    <td><i>препарат</i></td>
		    <td><i>кол-во</i></td>
		    <td><i>цена</i></td>
		    <td><i>сумма</i></td>
		    <td><i>уд.</i></td>
		</tr>
		<tr height="1" bgcolor="#FF0000"><td colspan="5"></td></tr>

<?
for($z=0;$z<count($val);$z++)
{
if(is_numeric($val[$z]))
{
$id = $val[$z];
$res = mysql_query("select name, price from preps where id='".$id."'");
if(mysql_num_rows($res))
{
$row = mysql_fetch_array($res);
$name = $row[name];
$price = $row[price];

$colvo = 1;

for($m=0;$m<count($colvs);$m++)
{
		$h = explode("=",$colvs[$m]);
		if($h[0]==$id)
		$colvo = $h[1];
}

$sum = $price * $colvo;
$all_summ +=$sum;
$sum = str_replace(",",".",$sum);


?>
		<tr align="center" height="24">
		    <td><?echo($name)?></td>
		    <td>
<input size="3" onKeyDown="reCall('<?echo($id)?>')" onKeyUp="reCall('<?echo($id)?>')" onClick="reCall('<?echo($id)?>')" id="q<?echo($id)?>" value="<?echo($colvo)?>">
		    </td>
		    <td id="p<?echo($id)?>"><?echo($price)?></td>
		    <td id="sum<?echo($id)?>"><?echo($sum)?></td>
		    <td><a TITLE="удалить из корзины" OnClick="DropKItem(<?echo("'$id','$name'")?>);"><div style='cursor:hand;'><b>X</b></div></a></td>
		</tr>
  <tr height="1" bgcolor="#BFBFBF"><td colspan="5"></td></tr>

<?
}
}
}
$all_summ = str_replace(",",".",$all_summ);
?>

<tr height="1" bgcolor="#FF0000"><td colspan="5"></td></tr>
			<tr height="30" bgcolor="#D4D4D4" align="center">
			    <td><i>Итого:</i></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td id="total"><?echo($all_summ)?></td>
			    <td>&nbsp;</td>
			</tr>

			    <tr height="20" valign="TOP" bgcolor="#D4D4D4" align="center">
				<td colspan="5">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
				<td align="center">
<input type="button" class="butt" name="order" value="ОТПРАВИТЬ ЗАКАЗ" OnClick="ShowOrderForm();">
</td>
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
<script language="JavaScript">
var items = new Array();

<?
for($z=0;$z<count($val);$z++)
{
if(is_numeric($val[$z]))
	echo("items[items.length] = \"".$val[$z]."\";");
}

?>
Save_Qookie_Col();
</script>

</td>
</tr>
</table>
<br><br><br><br>
<?
}

function print_pager()
{
global $lim,$p,$tmp;

if(isset($tmp))
{
if($tmp!="")
{
$s = file($tmp);
$count_res = count($s);
}
else
{
$count_res = 1;
$lim=1;
}
}
else{
	$count_res = 1;
	$lim=1;
    }

if($count_res>$lim)
{
?>
<table width='100%'><tr  bgcolor='#E6F9F5'><td>
<?
$num_p = round($count_res/$lim);
if(($num_p*$lim)<$count_res)
{
$num_p++;
}

for($i=1;$i<=$num_p;$i++)
{
if($i!=$p)
echo("[<a href='poisk.php?pg=".$i."&tmp=".$tmp."'>".$i."</a>] &nbsp;");
else
	echo("<font color='black'>[$i]</font> &nbsp;");
}
?>
</td></tr></table>
<?
}
else
echo("<table width='100%'><tr  bgcolor='#E6F9F5'><td>&nbsp;</td></tr></table>");
}

function save_result($res)
{
global $tmp;
$tmpfile = tempnam('/tmp', "search_003");
$f = fopen($tmpfile,"w");
$tmp = $tmpfile;

while($row=mysql_fetch_array($res))
	{
	$string =$row[0]."@$@".$row[1]."@$@".$row[2]."@$@". "\n";
	fwrite($f,$string,strlen($string));
	}
fclose($f);

return $tmpfile;
}

function get_content()
{
$retval ="";
$rv;

$res = mysql_query("select upper(name) from preps");
if(mysql_num_rows($res))
{
while($row=mysql_fetch_array($res))
	{
		$retval .= $row[0] . "\n";
	}
}
	return $retval;
}

function my_search($tmpfile,$nidle)
{
$rank = strlen($nidle) - 5;
if($rank < 1)
$rank = 1;

if($rank > 8)
$rank = 5;

$cmd = "agrep -".$rank." \"".$nidle."\" ".$tmpfile;

$fp = popen($cmd, 'r');
$read = fread($fp, 1024);
pclose($fp);
return $read;
}

function print_result($pth)
{
//echo($pth);
global $lim,$p,$val;
?>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr height="1"><td colspan="3" bgcolor="#BFBFBF"></td></tr>
<tr valign="middle" height="20">
<td width="40%" bgcolor="#E9E9E9" align="center"><b>ПРЕПАРАТ</b></td>
<td width="40%" bgcolor="#E6F9F5" align="center"><b>ЦЕНА</b></td>
<td width="20%" bgcolor="#E9E9E9" align="center"><b>ЗАКАЗАТЬ</b></td>
</tr>
<tr height="1"><td colspan="3" bgcolor="#BFBFBF">
<form name='frmSub' action='poisk.php' method='post'>
<input type='hidden' name='add' value=''>
<input type='hidden' name='pg' value='<?echo($p)?>'>
<input type='hidden' name='tmp' value='<?echo($pth)?>'>
</form>
</td></tr>
<?
$lines = file($pth);
$nl = $lim * $p;
$nf = $nl - ($lim-1);

if($nl>count($lines))
   $nl=count($lines);

$s=count($lines);
for($i=$nf-1;$i<$nl;$i++)
	{
	$lin = explode("@$@",$lines[$i]);
	$id=$lin[0];
	$name = $lin[1];
	$price=$lin[2];

if(in_array($id, $val))
{
$pic="<img src='/i/ful.gif' border='0' alt='уже в корзине' title='уже в корзине'>";
}
else
{
$pic="<a OnClick=\"document.forms['frmSub'].add.value=".$id."; document.forms['frmSub'].submit();\"><img style='cursor:hand;'src='/i/empty.gif' border='0' alt='поместить в корзину' title='поместить в корзину'></a>";
//$pic="<img class='hands' src='/i/empty.gif' OnClick=\"document.forms['frmSub'].add.value=".$id."; document.forms['frmSub'].submit();\"  border='0' alt='поместить в корзину' title='поместить в корзину'>";

}

	echo("<tr align='center'>
	 <td width='60%' bgcolor='#E9E9E9' align='left'>&nbsp;&nbsp;".$name."</td>
	 <td width='20%' bgcolor='#E6F9F5'>".$price."</td>
	 <td width='20%' bgcolor='#E9E9E9'>".$pic."</td>
	</tr>
	<tr height='1'><td colspan='3' bgcolor='#BFBFBF'></td></tr>");
	}
?>
</td></tr>
</table>
<?
}

function new_search($search)
{

$glas = Array("а","е","и","о","у","э","ю","я","ы","ё");

foreach($glas as $gl)
$search = str_replace("$gl","_",$search);


        return $search;
}


function search_results($search)
{
global $tmp;
setlocale (LC_ALL, "ru_RU.KOI8-R");

$search = addslashes(strip_tags($search));

if(strlen($search)<3)
{
echo("<table width='100%'><tr><td align='center' bgcolor='#E9E9E9'>К сожалению ничего не найдено<br><br>
<a href='#vopros' style='padding: 2px; background-color: rgb(185, 214, 207); text-decoration: none;' title='Задать вопрос' onclick='window.open(\"q.php\",\"vopros\",\"scrollbars=no,resizable=no,location=no,menubar=no,toolbar=no,status=no,width=350,height=390\")'>&nbsp;<b>Задать вопрос</b>&nbsp;</a><br>&nbsp;</td></tr></table>");
return;
}

$res = mysql_query("select id, name, price from preps where name='".$search."' limit 500");
if(mysql_num_rows($res))
{
$pth = save_result($res);
print_result($pth);
}
else
{
$res = mysql_query("select id, name, price from preps where name like('%".$search."%') limit 500");
if(mysql_num_rows($res))
{
echo("<table width='100%'><tr><td align='center' bgcolor='#E9E9E9'>Возможно вы искали что-то подобное:</td></tr></table>");
$pth = save_result($res);
print_result($pth);
}
else
{
$search = new_search($search);

$res = mysql_query("select id, name, price from preps where name like('%".$search."%') limit 500");
if(mysql_num_rows($res))
{
echo("<table width='100%'><tr><td align='center' bgcolor='#E9E9E9'>Возможно вы искали что-то подобное:</td></tr></table>");
$pth = save_result($res);
print_result($pth);
}
else
	echo("<table width='100%'><tr><td align='center' bgcolor='#E9E9E9'>К сожалению ничего не найдено<br><br>
<a href='#vopros' style='padding: 2px; background-color: rgb(185, 214, 207); text-decoration: none;' title='Задать вопрос' onclick='window.open(\"q.php\",\"vopros\",\"scrollbars=no,resizable=no,location=no,menubar=no,toolbar=no,status=no,width=350,height=390\")'>&nbsp;<b>Задать вопрос</b>&nbsp;</a><br>&nbsp;</td></tr></table>");
}

}

}?>
