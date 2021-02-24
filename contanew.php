<?
$username = array("Grace" , "Doris" , "Gary" , "Nate" , "missing" ,"tom");
for ($x=0; $x < count($username) ; $x++) { 
	if ($username[$x] == "missing") continue; 
		printf("staff member: %s <br/>" , $username[$x]);
	
}
?>