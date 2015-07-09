<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>check ip</title>
</head>

<body>
Host name: <?
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); 
//host name
echo $hostname;
?> 
<br />
IP Address: <?php echo $_SERVER["REMOTE_ADDR"]; ?>
<br />
<br />
Use <a href="https://ip-atlg.azurewebsites.net/iponly.php">this</a> for IP only.
</body>
</html>
