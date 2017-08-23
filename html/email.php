<?php
$fields = array();
$error = false;

$messageErrors = array(
	"emptymessage"=> "Você não inseriu uma mensagem!",
	"emailNotValid" => "O email inserido não é valido!",
	"emptyemail" => "Você não inseriu o seu email!",
	"emptyname" => "Você não inseriu o seu nome!",
	"emptysubject" => "Você não inseriu o assunto!",
	"messageNotValid" => "A mensagem que você inseriu é muito pequena!"
);

foreach($_POST as $field => $value){
	if($field === 'submit')
		continue;
	if(!(strlen($value) > 0 && isset($_POST[$field]))){
		$fields[$field] = $messageErrors['empty' . $field];
		$error = true;
	}
}

if(isset($_POST['email']) && strlen($_POST['email']) >= 1) 
	if (strpos($_POST['email'], '@') === false) {
		$fields['email'] = $messageErrors['emailNotValid'];
		$error = true;
	}

if (strlen($_POST['message']) < 20 && strlen($_POST['message']) >= 1) {
	$fields['message'] = $messageErrors['messageNotValid'];
	$error = true;
}

$fields['error'] = $error;

if($error){

	echo json_encode($fields);

}else{

	$email_envio = 'email'; 
	$email_pass = 'password';

	require ('../PHPMailer/PHPMailerAutoload.php');

	$mail = new PHPMailer;
	$mail->CharSet = 'UTF-8';

	$mail->isSMTP();
	$mail->Host = 'tls://smtp.gmail.com:587';
	$mail->SMTPAuth = true;
	$mail->Username = $email_envio;
	$mail->Password = $email_pass;


	$mail->From = $_POST["email"];

	$mail->addAddress("lopogax@gmail.com");

	$mail->FromName = $_POST["name"];
	$mail->AddReplyTo("lopogax@gmail.com", 'joao');

	$mail->WordWrap = 70;

	$mail->Subject = $_POST["subject"];

	$mail->Body = $_POST["message"];

	if(!$mail->send()){
		$fields['error'] = $mail->ErrorInfo;
		$fields['success'] = 'no';

		echo json_encode($fields);
	}else{
		$fields['success'] = 'yes';
		echo json_encode($fields);
	}
}

