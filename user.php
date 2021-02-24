<?
$users = file("user.txt");
foreach ($users as $user) {
	list($name, $proppsion,$address) = explode("|",$user);
	printf("Name: %s <br>", $name);
	printf("proppsion: %s <br>", $proppsion);
	printf("Address: %s <br>", $address);
	echo("<hr>");
}
?>