<?php
//  $primes = array(2,3,4,5,6,7,8,9,10,11,45,40);
// $randomNumber = rand(1,50);
// echo($randomNumber);
// echo("<br>");
// echo $x = in_array($randomNumber, $primes);
?>

<?
$primes = array(2,3,4,5,6,7,8,9,10,11,45,40);
for ($count= 1; $count < 1000 ; $count++) { 
	$randomNumber = rand(1,50);
	if (in_array($randomNumber, $primes)) {
		//printf("prime number found! %d <br/>" , $randomNumber);
		echo("prime number:$randomNumber <br>");
		break;
	}else{
		//printf("Non-prime number found:%d <br/>" , $randomNumber);
		echo("No-prime:$randomNumber <br>");
	}
}
?>