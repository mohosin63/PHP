<?php
// echo "<pre>";
// print_r($_SERVER);

?>

<?php
echo "Document Root:".$_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo "User Agent:".$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "IP Address:".$_SERVER['REMOTE_ADDR'];
echo "<br>";
echo "REF Address:".$_SERVER['HTTP_REFERER'];
echo "<br>";
echo "Ref Address:".$_SERVER['REQUEST_URI'];

?>