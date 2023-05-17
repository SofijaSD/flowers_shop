<html>
<head>
<title>Kontakt provera</title>
</head>
<body>

<?php

//podaci
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

echo "<h1> Provera </h1> <br/>";

if(preg_match("/^[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+([a-z]{2}|cat|com|edu|gov|info|int|jobs|mobi|net|org|pro|)$/",$email)) {

if(preg_match("/([\+]?[\d]{1,4} ?)?([\(]([\d]{2,3})[)] ?)?[0-9][0-9 \-]{6,}( ?([xX]|([eE]xt[\.]?)) ?([\d]{1,5}))?$/",$phone)) {

{
	if($phone>0) {
	echo "<b> Vaše ime: </b> ", $name, "<br/>";
	echo "<b> Prezime: </b> ", $surname, "<br/>";
	echo "<b> E-mail: </b> ", $email, "<br/>";
	echo "<b> Telefon: </b> ", $phone, "<br/>";
	echo "<b> Poruka: </b>", $message, "<br/>";
	echo "<b> Time of transaction </b>", date('H:i, jS F');
	}
	else
	{
	echo "Niste validno uneli podatke!";
	}
	
}
else
{
	echo "Pogresan broj telefona!";
}

}
else
{
	echo "Pogresan E-mail!";
}








?>
</body>