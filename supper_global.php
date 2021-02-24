<?php

//echo $_ENV['HOSTNAME'];
// echo "<pre>";
// $_ENV['fname'] = 'Abdul';
// $_ENV['lname'] = 'Alim';

// print_r($_ENV);
?>
<form action="" method="post">
	<input type="text" name="fullname"><br>
	<input type="submit" name="submit" value="SEND">
</form>

<?
print_r ($_REQUEST);

?>