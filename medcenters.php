<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include('h.inc'); 
include("connect.inc.php");

if(isset($pg))
{
        $page = $pg;
}
else
        $page = 1;

$lim = 20;
$num_all=0;
$cur_num=0;

$res = mysql_query("select count(*) from centers");
$row = mysql_fetch_array($res);
$count_res = $row[0];

$cur_num = ($page-1) * $lim;
?>
<TD>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/medcenters.gif" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top">
<td bgcolor="#E9E9E9" height="100%" align='center'>
<br>
<?
$res = mysql_query("select rplace, address, rtime, phone, osnsved from centers group by rplace order by vis desc, rplace limit $cur_num, $lim");
if(mysql_num_rows($res))
{
?>
<TABLE border="1" cellpadding="2" cellspacing="0" STYLE="border:1px;" width="98%">
<TR bgcolor="#D7D7D7">
   <TD align="center"><i><b>название</b></i></TD>
   <TD align="center"><i><b>рабочее время</b></i></TD>
   <TD align="center"><b><i>телефон</b></i></TD>
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
   <TD align="center"><i><?=$naz?><br><br><?=$adr?></i><b><?=$block?></TD>
   <TD align="center"><i><?=$rt?></i></TD>
   <TD align="center"><i><?=$tel?></i></TD>
   <TD align="center"><i><?=$prim?></i></TD>
</TR>
<?	
}
?>
</TABLE><center><br>
<?
}

?>
<?
$num_p = round($count_res/$lim);
if(($num_p*$lim)<$count_res)
{
$num_p++;
}
for($i=1;$i<=$num_p;$i++)
{
if($i!=$page)
echo("[<a href='medcenters.php?pg=".$i."'>".$i."</a>] &nbsp;");
else
        echo("[<font color='black'>$i</font>] &nbsp;");
}
?>
<br>&nbsp;
</td>
</tr>
</table>
</TD>
</TR>
<?include('f.inc'); ?>
