<html>
<head>
<title>Prijava na e-mail listu:</title>
</head>
<body>

<?php
//podaci provera
$email=$_POST['email'];

if(preg_match("/^[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+([a-z]{2}|cat|com|edu|gov|info|int|jobs|mobi|net|org|pro|)$/",$email)) {

{
	if($email>0) {
	echo "<b> E-mail: </b> ", $email, "<br/>";
	echo "<b> Time of transaction </b>", date('H:i, jS F');
	}
	else
	{
	echo "Niste validno uneli podatke!";
	}

}
else
{
	echo "Pogresan E-mail!";
}

















?>
</body>