<?

$sites = array( "www.yahoo.com" , "www.google.com",
	"www.facebook.com");
foreach ($sites as $x) {
	$result = "<a href='https://$x' target='_blank'>$x</a>";
	echo $result . " | ";

}
?>

<Script>
	var xyz = 5;
	x++
	document.write(xyz);
</Script>