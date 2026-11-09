<?php 

require_once __DIR__ . "/../models/viewsModel.php";

/**
 * clase del controlador de las vistas
 */
class viewsController extends viewsModel
{

	// controlador para obtener plantilla 
	public function obtener_plantilla_controlador(){
		return require_once __DIR__ . "/../views/template.php";
	}

	// controlador para obtener las vistas

	public function obtener_vistas_controlador(){
		if (isset($_GET['views'])) {
			$ruta=explode("/",$_GET['views']);

			$respuesta=viewsModel::obtener_vistas_modelo($ruta[0]);
		} else {
			$respuesta="./views/content/web/home-view.php";
		}

		return $respuesta;

	}
}