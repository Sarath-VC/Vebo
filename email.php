<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
/*$to ="cevmca2015@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = $_POST['mail'];

mail($to,$subject,$txt,$headers);*/
include('connection.php');
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = $_POST['mail'];
$sql="insert into feedback(email,subject,content)";
?>
</body>
</html>