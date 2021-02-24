<?php
// $count = 1;
// while ( $count <= 10) {
// 	echo "The output: $count <br/>";
// 	$count++;
// }
?>

<?
//do while
// $count = 5;
// do{
// 	print "$count <br>";
// 	$count++;
// }while ($count < 10);
	

?>


<?
// for ($i=0; $i <=10 ; $i++) { 
// 	echo "$i is my number <br>";
// }
?>

<?

// $fruits = ["Apple" , "Mango" , "Orange"];
// echo "<ol>";
// //echo count($fruits);
// for ($i=0; $i<count($fruits) ; $i++) { 
// 	echo "<li>" . $fruits[$i] . "</li>";
	
// }
// echo "<ol>";
?>

<?
$fruits = ["Apple" , "Mango" , "Orange"];
$list = '';
for ($i=0; $i <count($fruits); $i++) { 
	$list .= "<li>" . $fruits[$i] . "</li>";
}
echo "<ol>$list</ol>";
?>
