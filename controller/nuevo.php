<?php
	/**
	 * 
	 */
	class Nuevo extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->view->render('nuevo/index');
		}

		function registrarAlumno() {
		    $matricula = $_POST['matricula'];
		    $nombre = $_POST['nombre'];
		    $apellido = $_POST['apellido'];
		    $this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido]);
            echo 'Registra alumno';
        }
	}
?>