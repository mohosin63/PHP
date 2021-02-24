<?
// $x = function(){
// 	//echo "Hello,this is anoymous function";
// };
// $x();

// function myFunc(){
// 	echo "This is normal function";
// }
// $y = "myFunc";
// $y();

?>


<?
// $a = 15;
// $example = function(){
// 	global $a;
// 	$a += 100;
// 	echo $a ."<br>";
// };
// $example();
// echo $a."<br>";
?>


<?
// $a = 15;
// $example = function() use($a){
// 	$a += 100;
// 	echo $a . "<br>";
// };
// $example();
// echo $a . "<br>";

?>

<?
$a = 15;
$example = function() use (&$a){
	$a += 100;
	echo $a."<br>";
};
$example();
echo $a."<br>";
?>