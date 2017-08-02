<?php
include ("conn.php");
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$sql = "insert into message (firstname, lastname, email, subject, msg) values ('$firstname', '$lastname', '$email', '$subject', '$message')";
mysql_query($sql);

echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
echo"<script type='text/javascript' charset='utf-8' >alert('留言信息成功，我会尽快回复您的！请点击ok，刷新页面。');location.href='index.html';</script>";


?>