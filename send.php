<? php
$emal = $_POST['email'];
$subject = "Your password";


session_start();
$connect = mysql_connect("localhost","root","");
mysql_select_db("loginsys");
$txt = mysql_query("SELECT password FROM users WHERE email='$email'");

mail($to,$subject,$txt);


?>