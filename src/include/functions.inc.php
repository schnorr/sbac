<?

function sbac_root_css_local ()
{
	echo "
<link rel=\"stylesheet\" href=\"css/sbac.css\" type=\"text/css\">
";
}


function sbac_root_top_start ($title)
{
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\"> 
<html>
<head>
<title>$title</title>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=ISO-8859-1\">
";
}

function sbac_root_top_end ($bodyparams, $style)
{
	echo "</head>\n";
	if ($bodyparams == ""){
		echo "<body>\n";
	}else{
		echo "<body $bodyparams>\n";
	}
	echo "<center>\n";
	echo "<div id=$style>\n";
}
/* EOF aux functions */


function sbac_root_top_local ($title)
{
	sbac_root_top_start ($title);
	sbac_root_css_local ();
	sbac_root_top_end ("", "corpo");
}



function sbac_root_bottom_local ()
{
	echo "<div id=rodape>
<table>
<tr>
<td>Co-sponsored by<br><!--<a href=\"http://tab.computer.org/tcca/\">-->TCCA and TCSC of</td>
<td>and</td>
<td>Conference Proceedings<br>are published by</td>
<td>Promoted by</td>
</tr>
<tr>
<td><img src=\"images/small/IEEE_computer_society_logo.jpg\" ALT=\"IEEE\"></td>
<td><img src=\"images/small/ifip-logo.jpg\" ALT=\"IFIP\"></td>
<td><img src=\"images/small/MBblack.jpg\" ALT=\"IEEE2\"></td>
<td><img src=\"images/small/logoSBC.jpg\" ALT=\"SBC\"></td>
</tr>
</table>";
	echo "
</div>
</div>
</center>
";
	echo "
</body>
</html>";
}


function sbac_root_header ($title)
{
	echo "<div id=cabecalho>\n";
	echo "<br>";
	echo $title;
	echo "</div>";
}

function sbac_root_comeca_texto() {
	echo "<div id=texto>";
}

function sbac_root_termina_texto() {
	echo "</div>";
}


?>
