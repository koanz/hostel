<?php
	namespace Libs;

	class HTMLformattEmail{

		public function getRenderHTMLwithMessage($name, $phone, $email, $message){
			// Message format: Debería agregar etiquedas html y body fijo. Solo el contenido debería de cambiar..
			$htmlFormatt = '<html>';
				$htmlFormatt .='<body>';
					$htmlFormatt .= '<div style="width: 80%; margin: 0 auto; -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2); box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2); margin-bottom: 20px;">';
						$htmlFormatt .= '<div style="width: 100%; height: 90px; background-color: #ee6e73; margin: 0; padding-top: 25px;">';
							$htmlFormatt .= '<h1 style="text-align: center; color: #fff;"><strong>Notificación</strong></h1>';
						$htmlFormatt .= '</div>';
						$htmlFormatt .= '<div style="width: 100%; height: auto; margin: 0; padding-top: 25px; padding-bottom: 25px;">';
							$htmlFormatt .= '<div style="width: 90%; margin: 0 auto;">';
								$htmlFormatt .= '<h2 style="color: #4b4b4b;">Mensaje</h2>';
								$htmlFormatt .= '<p style="color: #4b4b4b;"><strong>De:</strong> '.$name.'</p>';
								$htmlFormatt .= '<p style="color: #4b4b4b;"><strong>Teléfono:</strong> '.$phone.'</p>';
								$htmlFormatt .= '<p style="color: #4b4b4b;"><strong>E-mail:</strong> '.$email.'</p>';
								$htmlFormatt .= '<p style="color: #4b4b4b; text-align: justify;"><strong>Mensaje:</strong> ';
									$htmlFormatt .= $message;
								$htmlFormatt .= '</p>';
							$htmlFormatt .= '</div>';
						$htmlFormatt .= '</div>';
					$htmlFormatt .= '</div>';
				$htmlFormatt .= '</body>';
			$htmlFormatt .= '</html>';

			return $htmlFormatt;
		}
	}