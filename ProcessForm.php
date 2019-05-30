<?php 
	require_once 'vendor/autoload.php';
	require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
	require_once 'config/smtp.php';

	if(isInputsValid($_POST)){
		$name = $_POST['nombre'];
		$phone = $_POST['telefono'];
		$email = $_POST['email'];
		$message = $_POST['mensaje'];

		try{
			$transport = (new Swift_SmtpTransport($smtpData['smtpHost'], 25))->setUsername($smtpData['smtpUser'])
			->setPassword($smtpData['smtpPass']);

			$mailer = new Swift_Mailer($transport);
			$htmlEmail = (new \Libs\HTMLformattEmail())->getRenderHTMLwithMessage($name, $phone, $email, $message);

			$mssg = (new Swift_Message('Notificación: Hostel - Consulta'))
			->setFrom([$email => 'Hostel - Formulario de contacto'])
		  	->setTo(['cristiananzawa@gmail.com'])
		  	->setBody($htmlEmail, 'text/html');

			if($mailer->send($mssg))
				echo json_encode("Muchas gracias por comunicarse con nosostros!");
			else
				throw new Exception();
			
		}catch(Exception $e){
			echo json_encode("No se ha podido establecer la comunicaci&oacuten.<br>Vuelva a intentarlo nuevamente!");
		}
	}else{
		echo json_encode("Debe completar los&nbsp<strong>campos requeridos</strong>!");
	}
	
	function isInputsValid($inputs){
		return (isset($inputs['nombre']) && isset($inputs['email']) && isset($inputs['mensaje'])) ? true : false;
	}
?>