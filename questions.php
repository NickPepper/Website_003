<?
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Content-Type: text/html; charset=koi8-r");
include("connect.inc.php");

$res = mysql_query("select count(name) from questions");
if(mysql_num_rows($res))
{
$row = mysql_fetch_array($res);
$count_res = $row[0];
}
$lim = 5;

if(!isset($pg))
$pg=1;
	else
{
if(!is_numeric($pg))
$pg=1;
}


function print_questions()
{

global $pg, $lim;

$cn = ($pg - 1) * $lim;
$res = mysql_query("select name, mail, idate, itime, quest, answer from questions order by idate, itime desc limit $cn,$lim");

if(mysql_num_rows($res))
{
	while($row = mysql_fetch_array($res))
	{
	$name = $row[name];
	$mail = $row[mail];
	$idate = $row[idate];
	$itime = $row[itime];
	$quest = $row[quest];
	$answer = $row[answer];

if($mail)
{
?>
<span class="newsHead">&nbsp;<?echo($name)?>&nbsp;</span>&nbsp;&nbsp;
<a href="mailto:i<?echo($mail)?>">(<?echo($mail)?>)</a>&nbsp;&nbsp;<font color="#9D9D9D">//<?echo($idate." ".$itime)?></font>
<p class="question" align="justify"><?echo(nl2br($quest))?></p>
<p class="answer" align="justify"><?echo(nl2br($answer))?></p>
<br>
<?
}
else
{
?>
<span class="newsHead">&nbsp;<?echo($name)?>&nbsp;</span>&nbsp;&nbsp;
<font color="#9D9D9D">//<?echo($idate." ".$itime)?></font>
<p class="question" align="justify"><?echo(nl2br($quest))?></p>
<p class="answer" align="justify"><?echo(nl2br($answer))?></p>
<br>
<?
}

	}

}
else
	echo("<center><h1>Мы ждем ваших вопросов</h1></center>");

}

function print_pager()
{
global $lim, $count_res,$pg;


echo("<p align='justify'>&nbsp;");

if($count_res>$lim)
{
$num_p = round($count_res/$lim);
if(($num_p*$lim)<$count_res)
{
$num_p++;
}

for($i=1;$i<=$num_p;$i++)
{
if($i!=$pg)
echo("[<a href='questions.php?pg=".$i."'>".$i."</a>] &nbsp;");
else
        echo("[<font color='black'>$i</font>] &nbsp;");
}
}
echo("</p>");
}


include("h.inc");
?>
<!-- right table ends -->
<!-- right table begins -->
<TD>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr valign="top">
<td bgcolor="#E9E9E9"><IMG SRC="i/questions.jpg" border="0" width="575" height="22" ALT=""></td>
</tr>
<tr valign="top" height="100%">
<td bgcolor="#E9E9E9" align="justify" STYLE="padding:18px">
<?print_pager();?>
<p align="left">
<a href="#vopros" style="background-color:#B9D6CF; text-decoration:none; padding:2px" TITLE="Задать вопрос" onClick='window.open("q.php","vopros","scrollbars=no,resizable=no,location=no,menubar=no,toolbar=no,status=no,width=350,height=390")'>&nbsp;<b>Задать вопрос</b>&nbsp;</a></p>
<?
print_questions();
print_pager();
?>
</td>
</tr>
</table>
</TD>
</TR>

<?
include("f.inc");
?>
