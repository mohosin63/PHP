<form action="" method="POST">
	Name:<input type="text" name="name" ><br>
	<input type="submit" value="submit">
</form>
<?
$secretNumber = 52;
if ($_POST['name'] == $secretNumber) {
	echo "Congratulation";
}else{
 echo "Sorry";
}
?>
