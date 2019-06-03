<?php 
	
	function obtenerTraduccionES(){
		return $traduccionES = ({
			'navbar' => ({
				'referencia_1' => 'nosotros',
				'referencia_2' => 'servicios',
				'referencia_3' => 'habitaciones',
				'referencia_4' => 'ubicación',
				'referencia_5' => 'contactenos'
			}),
			'section' => ({
				'section_1' => ({
					'nosotros' => ({
						'titulo_1' 	=> 'nosotros',
						'contenido' => 'parrafo de descripcion acerca de nosotros.'
					})
				}),
				'section_2' => ({
					'servicios' => ({
						'titulo_1' 	  => 'servicios',
						'servicios_1' => ({
							'titulo' 	=> 'restaurante',
							'contenido' => 'parrafo de descripcion acerca del restaurante.'
						}),
						'servicios_2' => ({
							'titulo' 	=> 'wifi',
							'contenido' => 'parrafo de descripcion acerca del wifi.'
						}),
						'servicios_3' => ({
							'titulo' 	=> 'piscina',
							'contenido' => 'parrafo de descripcion acerca de la piscina.'
						})
					})
				}),
				'section_3' => ({
					'habitaciones' => ({
						'titulo_1'	   => 'habitaciones',
						'habitacion_1' => ({
							'titulo' 	 => 'habitaciones individuales',
							'contenido'  => 'parrafo de descripcion acerca de las habitaciones individuales.',
							'habitacion' => ({
								'titulo' 	=> 'titulo de la imagen de habitacion 1.',
								'contenido' => 'parrafo de descripcion acerca de la habitacion 1.'
							})
						}),
						'habitacion_2' => ({
							'titulo' 	=> 'habitaciones compartidas',
							'contenido' => 'parrafo de descripcion acerca de las habitaciones compartidas.',
							'habitacion' => ({
								'titulo' 	=> 'titulo de la imagen de habitacion 2.',
								'contenido' => 'parrafo de descripcion acerca de la habitacion 2.'
							})
						}),
						'habitacion_3' => ({
							'titulo' 	=> 'a/a',
							'contenido' => 'parrafo de descripcion acerca del aire aicondicionado.',
							'habitacion' => ({
								'titulo' 	=> 'titulo de la imagen de habitacion 3.',
								'contenido' => 'parrafo de descripcion acerca de la habitacion 3.'
							})
						})
					})
				}),
				'section_4' => ({
					'ubicacion' => ({
						'titulos' => ({
							'titulo' => 'ubicacion',
							'subtitulos' => ({
								'subtitulo_1' => ({
									'titulo' 	=> 'ubicación',
									'contenido' => ({
										'contenido_1' => 'av. nombre 000',
										'contenido_2' => 'ciudad - provincia'
									})
								})
							})
						})
					})
				}),
				'section_5' => ({
					'contactenos' => ({
						'titulo' => 'contactenos',
							'etiquetas' => ({
								'etiqueta_1' => 'nombre'
								'etiqueta_2' => 'teléfono',
								'etiqueta_3' => 'e-mail',
								'etiqueta_4' => 'mensaje'
							})
						}),
						'boton' => 'enviar'
					})
				})
			}),
		});
	}
	
?>