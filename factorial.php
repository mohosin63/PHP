<?
function factorial($n){


if ($n < 0) 	
	return -1; //worng value

if ($n== 0) 
	return 1; //termination con
	return($n * factorial($n -1));

}
echo factorial(5);
?>