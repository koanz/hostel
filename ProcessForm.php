<?php 
	require_once 'vendor/autoload.php';
	require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
	require_once 'config/smtp.php';
	require_once 'renderHTMLmessage.php';

	if(checkInputs($_POST)){
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$mssg = $_POST['mensaje'];

		try{
			$transport = (new Swift_SmtpTransport($smtpData['smtpHost'], 25))->setUsername($smtpData['smtpUser'])
			->setPassword($smtpData['smtpPass']);

			$mailer = new Swift_Mailer($transport);
			$renderHTMLmessage = (new renderHTMLmessage())->getRenderHTML($nombre, $email, $telefono, $mssg);

			// Create a message
			$message = (new Swift_Message('Notificación: Hostel - Consulta'))
			->setFrom([$email => 'Hostel - Formulario de contacto'])
		  	->setTo(['cristiananzawa@gmail.com'])
		  	->setBody($renderHTMLmessage, 'text/html');

			// Send the message
			if($mailer->send($message)){
				echo json_encode("Muchas gracias por comunicarse con nosostros!");
			}else{
				echo json_encode("No se ha podido establecer la comunicaci&oacuten.<br>Vuelva a intentarlo nuevamente!");
			}
		}catch(Exception $e){
			//echo throw new Exception("No se ha podido establecer la comunicación.<br>Vuelva a intentarlo nuevamente!");
			echo json_encode("No se ha podido establecer la comunicaci&oacuten.<br>Vuelva a intentarlo nuevamente!");
		}
	}else{
		echo json_encode("Debe completar los&nbsp<strong>campos requeridos</strong>!");
	}
	
	function checkInputs($request){
		if(isset($request['nombre']) && isset($request['email']) && isset($request['mensaje'])){
			return true;
		}
		
		return false;
	}
?>