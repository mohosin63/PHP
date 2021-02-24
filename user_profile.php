<?
function Userprofile(){
	$user[]="Janson";
	$user[]="Janson@example.com";
	$user[]="English";
	$user[]="Male";
	return $user;
}
list($name,$email,$language,$Gender)=Userprofile();
echo "Name:{$name},email:{$email},language:{$language}Gender:{$Gender}";
?>