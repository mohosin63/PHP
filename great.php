<form action="" method="POST">
	<input type="text" name="Marks"><br>
	<input type="Submit" name="Submit" value="SEND">

</form>
<?php

if ($_POST['Marks']<=4) {
	echo "Faill";
}elseif ($_POST['Marks']<7) {
	echo "Pass";
}elseif ($_POST['Marks']<9) {
	echo "Good";
}elseif ($_POST['Marks']<11) {
	echo "Ex";
}else{
	echo "Invalid";
}
?>