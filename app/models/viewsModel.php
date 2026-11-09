<?php 

class viewsModel
{
    // Modelo para obtener vistas 

    protected static function obtener_vistas_modelo($vistas){


         /*Arreglo de las cms de admin y de la pagina oficial */

         // lista blanca de la página principal
        $listaBlancaweb=[];

        //lista blanca para el cms de admin
        $listaBlancaCMS=[];

        // comparamos primero la lista blanca de las paginas 
        if (in_array($vistas, $listaBlancaweb)) {
            if (is_file("./views/content/web/".$vistas."-view.php")) {
               $contenido = "./views/content/web/".$vistas."-view.php";
            }else {
                $contenido = "404"; 
            }
            
        // comparamos la lista blanca del cms
        }elseif (in_array($vistas, $listaBlancaCMS)) {
            if ($vistas == "admin") {
                $contenido = "./views/admin/login-view.php";
            }elseif (is_file("./views/content/admin/".$vistas."-view.php")) {
               $contenido = "./views/content/admin/".$vistas."-view.php";
            }else {
                $contenido = "404"; 
            }
        }elseif ($vistas = "index") {
            
        }else {
            $contenido = "404";
        }

        return $contenido;
    }
}