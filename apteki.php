<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");

//ini_set(error_reporting,E_ALL);

function my_ord($s)
{
$num =0;
$s = strtolower($s);

		switch($s)
		{
			case "а":
			$num +=1;
			break;
			case "б":
			$num +=2;
			break;
			case "в":
			$num +=3;
			break;
			case "г":
			$num +=4;
			break;
			case "д":
			$num +=5;
			break;
			case "е":
			$num +=6;
			break;
			case "ё":
			$num +=7;
			break;
			case "ж":
			$num +=8;
			break;
			case "з":
			$num +=9;
			break;
			case "и":
			$num +=10;
			break;
			case "й":
			$num +=11;
			break;
			case "к":
			$num +=12;
			break;
			case "л":
			$num +=13;
			break;
			case "м":
			$num +=14;
			break;
			case "н":
			$num +=15;
			break;
			case "о":
			$num +=16;
			break;
			case "п":
			$num +=17;
			break;
			case "р":
			$num +=18;
			break;
			case "с":
			$num +=19;
			break;
			case "т":
			$num +=20;
			break;
			case "у":
			$num +=21;
			break;
			case "ф":
			$num +=22;
			break;
			case "х":
			$num +=23;
			break;
			case "ц":
			$num +=24;
			break;
			case "ч":
			$num +=25;
			break;
			case "ш":
			$num +=26;
			break;
			case "щ":
			$num +=27;
			break;
			case "ъ":
			$num +=28;
			break;
			case "ы":
			$num +=29;
			break;
			case "ь":
			$num +=30;
			break;
			case "э":
			$num +=31;
			break;
			case "ю":
			$num +=32;
			break;
			case "я":
			$num +=33;
			break;

			$num += ord($s);
   		}

return $num;
}

function my_sort($array)
{
$c = count($array);

for($s=0;$s<$c;$s++)
{
for($i=$c-1;$i>0;$i--)
{

if($array[$i]!=$array[$i-1])
{
$k=0;
while(my_ord($array[$i]{$k})==my_ord($array[$i-1]{$k}))
{
$k++;
if(($k=strlen($array[$i]))||($k=strlen($array[$i-1])))
{
if(strlen($array[$i])<strlen($array[$i-1]))
{
	$pe=$array[$i-1];
        $array[$i-1] = $array[$i];
        $array[$i]=$pe;
	}
$k=0;
break;
}

}

	if(my_ord($array[$i]{$k})<my_ord($array[$i-1]{$k}))
        {
	$pe=$array[$i-1];
        $array[$i-1] = $array[$i];
        $array[$i]=$pe;
        }
}
}
}
return $array;
}


if(isset($pg))
{
        $page = $pg;
}
else
        $page = 1;


if(!isset($bl))
	$pb = "Адмиралтейский";
else{
	
	if(isset($c)){
		
		if($c==1) {
				$pb = base64_decode($bl);
				$clear = 1;
			  }
		else
			{
			$pb = $bl;
			$page = 1;
			}
		}
	else
		$pb = $bl;
}

$lim = 20;
$num_all=0;
$cur_num=0;

include('h.inc'); 
include("connect.inc.php");

$res = mysql_query("select count(*) from drugsts where block='$pb'");
$row = mysql_fetch_array($res);
$count_res = $row[0];

if($clear==1)
	$cur_num = ($page-1) * $lim;
?>
<TD>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/apteki.gif" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td bgcolor="#E9E9E9" height="100%" align='center'>
<?
$res = mysql_query("select distinct block from drugsts where block!='' and block is NOT NULL");
if(mysql_num_rows($res))
{
?>
<br>
<form method="post">
<input type='hidden' name='c' value='0'>
&nbsp;&nbsp;&nbsp;&nbsp;Район:&nbsp;<select name='bl' class='input' OnChange="form.submit();">
<?
   while($row = mysql_fetch_array($res))
	$arr_bl[]=$row[0];

setlocale(LC_ALL, "ru_RU.KOI8-R");	

$arr_bl = my_sort($arr_bl);

for($i=0;$i<count($arr_bl);$i++)
{
$block = $arr_bl[$i];
	if($block!='ИНВАР.')
			{
	if($block != $pb)
		echo("<option value='$block'>$block</option>");
	else
		echo("<option value='$block' selected>$block</option>");
			}
	}
?>
</select>
</form>
&nbsp;
<?
}
if($pb!="")
$res = mysql_query("select name, addr, rtime, phone, note from drugsts where block='$pb' limit $cur_num, $lim");
else
$res = mysql_query("select name, addr, rtime, phone, note from drugsts where block='Адмиралтейский' or block is NULL limit $cur_num, $lim");

if(mysql_num_rows($res))
{
?>
<TABLE border="1" cellpadding="2" cellspacing="0" STYLE="border:1px;" width="98%">
<TR bgcolor="#D7D7D7">
   <TD align="center"><i><b>название</b></i></TD>
   <TD align="center"><i><b>адрес</b></i></TD>
   <TD align="center"><i><b>Телефон</b></i></TD>
   <TD align="center"><i><b>рабочее время</b></i></TD>
   <TD align="center"><i><b>примечание</b></i></TD>
</TR>

<?
	while($row = mysql_fetch_array($res))
	{

$ar = Array(".",",","-");

$vl = Array("naz","adr","rt","tel","prim");


for($i=0;$i<count($vl);$i++)
{
	if($row[$i])
		$$vl[$i] = $row[$i];
	else
		$$vl[$i] = "&nbsp";

	foreach($ar as $l)
                $$vl[$i] = str_replace($l,$l." ", $$vl[$i]);

}
?>
<TR bgcolor="#D7D7D7">
   <TD align="center"><i><?=$naz?></i></TD>
   <TD align="center"><i><?=$adr?></i></TD>
   <TD align="center"><i><?=$tel?></i></TD>
   <TD align="center"><i><?=$rt?></i></TD>
   <TD align="center"><i><?=$prim?></i></TD>
</TR>
<?}?>
</TABLE><center><br>
<?
}

?>
<?
if($count_res>$lim){
$num_p = round($count_res/$lim);
if(($num_p*$lim)<$count_res)
{
$num_p++;
}
for($i=1;$i<=$num_p;$i++)
{
if($i!=$page)
echo("[<a href='apteki.php?pg=".$i."&bl=".base64_encode($pb)."&c=1'>".$i."</a>] &nbsp;");
else
        echo("[<font color='black'>$i</font>] &nbsp;");
}
}
?>
<br>&nbsp;
</td>
</tr>
</table>
</TD>
</TR>
<?include('f.inc'); ?>
