
<?php


 $city = trim($_GET['city']);
 
 
 
 ?>

<?php
$ip = $_SERVER['REMOTE_ADDR']; // get the user IP (if not using a VPN...) 
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json?token=xxxxxxxxxxxxxx"));
if($details->city == "London") {    
  
}
 ?>
       
