
<!-- <a href="suppper_Global.php?id=50&name=Alim">Click Here</a> -->

<?
// echo $_GET['id'];
// echo "<br>";
// echo $_GET['name'];

// $_GET['age'] = 25;
// echo "<pre>";
// print_r($_GET);


?>


<form action="" method="post">
<input type="text" name="fullname"><br>
<input type="text" name="age"><br>
<input type="submit" name="submit" value="SUBMIT"><br>
</form>
<?
print_r($_POST);
?>