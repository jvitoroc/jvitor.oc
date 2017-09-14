<?php
header('Content-type: application/json');
error_reporting(0);
$fields = array();
$error = false;

$messageErrors = array(
	"emptymessage"=> array(
							'pt' => 'Preciso de uma mensagem!',
							'en' => "You didn't write a message!"),
	"emailNotValid" => array(
							'pt' => 'O email não é válido!',
							'en' => 'The given email is not valid!'),
	"emptyemail" => array(
							'pt' => 'Você não inseriu o seu email!',
							'en' => "You did'nt write your email!"),
	"emptyname" => array(
							'pt' => 'Você não inseriu o seu nome!',
							'en' => "You did'nt write your name!"),
	"emptysubject" => array(
							'pt' => 'Você não inseriu um assunto!',
							'en' => "You did'nt write a subject!"),
	"messageNotValid" => array(
							'pt' => 'Mensagem muito pequena!',
							'en' => "Message is too small!")
);

foreach($_POST as $field => $value){
	if($field === 'submit')
		continue;
	if(!(strlen($value) > 0 && isset($_POST[$field]))){
		$fields[$field] = $messageErrors['empty' . $field]['pt'];
		$error = true;
	}
}

if(isset($_POST['email']) && strlen($_POST['email']) >= 1) 
	if (strpos($_POST['email'], '@') === false) {
		$fields['email'] = $messageErrors['emailNotValid']['pt'];
		$error = true;
	}

if (strlen($_POST['message']) < 20 && strlen($_POST['message']) >= 1) {
	$fields['message'] = $messageErrors['messageNotValid']['pt'];
	$error = true;
}

$fields['error'] = $error;

if($error){

	echo json_encode($fields);

}else{

	$to      = 'lopogax@gmail.com';
	$subject = $_POST['subject'];
	$message = str_replace("\n.", "\n..", $_POST['message']);
	$message = $message . 'From: '. $_POST['email'] . "\n";
	$headers = 'From: '. $_POST['email'] . "\r\n" .
    'Reply-To: '. $_POST['email'] . "\r\n";

	if(!mail($to, $subject, $message, $headers)){
		$fields['error'] = false;
		$fields['success'] = 'no';

		echo json_encode($fields);
	}else{
		$fields['success'] = 'yes';
		echo json_encode($fields);
	}
}

