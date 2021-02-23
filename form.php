
<form action="" method="post">
<input type="text" name="fullname"><br>
<input type="text" name="age"><br>
<input type="submit" name="submit" value="SUBMIT"><br>
</form>
<?
//print_r($_POST);
$name=$_POST['fullname'];
$age=$_POST['age'];
echo "name is {$name} and age {$age}";
?>