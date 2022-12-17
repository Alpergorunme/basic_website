<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_POST['addd'] && $_POST['email']) {
	echo $ad=$_POST['addd'];
	echo "<br>";


	echo $email=$_POST['email'];
	
}
else {}

/*Denendi*/
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure="tls";
$mail->Port=587;
$mail->Host="smtp.gmail.com";
$mail->Username= "Hangi mailden gönderecekseniz o maili girin";
$mail->Password="hesaptan alınan şifre";
$mail->addAddress("$email");
$mail->Subject="Ornek Bilgilendirme mesajı";
$mail->Body="Tebrikler $ad.İslemin basarili";

if($mail->Send())
{

	echo "basarili";
	header("refresh:2;url=index.html");
}
else{
	echo "basarisiz";
}


 ?>

