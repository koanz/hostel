<?php 

	class RenderHTMLmessage{

		public function getRenderHTML($nombre, $email, $telefono, $mssg){
			// Message format
			$htmlFormat = '<html>';
				$htmlFormat .='<body>';
					$htmlFormat .= '<div style="width: 80%; margin: 0 auto; -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2); box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2); margin-bottom: 20px;">';
						$htmlFormat .= '<div style="width: 100%; height: 90px; background-color: #ee6e73; margin: 0; padding-top: 25px;">';
							$htmlFormat .= '<h1 style="text-align: center; color: #fff;"><strong>Notificación</strong></h1>';
						$htmlFormat .= '</div>';
						$htmlFormat .= '<div style="width: 100%; height: auto; margin: 0; padding-top: 25px; padding-bottom: 25px;">';
							$htmlFormat .= '<div style="width: 90%; margin: 0 auto;">';
								$htmlFormat .= '<h2 style="color: #4b4b4b;">Mensaje</h2>';
								$htmlFormat .= '<p style="color: #4b4b4b;"><strong>De:</strong> '.$nombre.'</p>';
								$htmlFormat .= '<p style="color: #4b4b4b;"><strong>E-mail:</strong> '.$email.'</p>';
								$htmlFormat .= '<p style="color: #4b4b4b;"><strong>Teléfono:</strong> '.$telefono.'</p>';
								$htmlFormat .= '<p style="color: #4b4b4b; text-align: justify;"><strong>Mensaje:</strong> ';
									$htmlFormat .= $mssg;
								$htmlFormat .= '</p>';
							$htmlFormat .= '</div>';
						$htmlFormat .= '</div>';
					$htmlFormat .= '</div>';
				$htmlFormat .= '</body>';
			$htmlFormat .= '</html>';

			return $htmlFormat;
		}
	}