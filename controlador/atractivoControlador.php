<?php

/* controlador encargado de la administraccion de atractivos */

//se incluyen las clases involucradas
include '../negocios/ServiciosNegocios.php';

//evento elegido por el cliente
$metodo = $_POST['metodo'];
switch ($metodo) {
    case 1:
        echo obtenerServicios();
        break;
    case 2:
        registrarAtractivo();
        break;
}

function obtenerServicios() {
    $servicosN = new ServiciosNegocios();
    $servicios = $servicosN->obtenerServicios();
    $codigoHtml = "";
    foreach ($servicios as $servicio) {
        $codigoHtml .="<tr>
                        <td>
                         <input type='checkbox' name='servicios[]' id='s" . $servicio->idServicio . "' value='" . $servicio->idServicio . "'/>
                         <label for='s" . $servicio->idServicio . "'><span></span></label>
                       </td>
                       <td>" . $servicio->descripcion . "</td>"
                . "</tr>";
    }
    return $codigoHtml;
}

function uploadImage() {
    //comprobamos que sea una petición ajax
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        //obtenemos el archivo a subir
        $file = $_FILES['fsPerfil']['name'];

        //comprobamos si existe un directorio para subir el archivo
        //si no es así, lo creamos
        if (!is_dir("../atractivoImagenes/")) {
            mkdir("../atractivoImagenes/", 0777);
        }

        //comprobamos si el archivo ha subido
        if ($file && move_uploaded_file($_FILES['fsPerfil']['tmp_name'], "../atractivoImagenes/" . $file)) {
            return "../atractivoImagenes/" . $file; //devolvemos el nombre del archivo para pintar la imagen
        }
    } else {
        throw new Exception("Error Processing Request", 1);
    }
    return "";
}

function subirImagenes() {

    //comprobamos que sea una petición ajax
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

        $cantidad = count($_FILES['fsGaleria']['name']);
        for ($i = 0; $i < $cantidad; $i++) {
            //obtenemos el archivo a subir
            $file = $_FILES['fsGaleria']['name'][$i];

            //comprobamos si existe un directorio para subir el archivo
            //si no es así, lo creamos
            if (!is_dir("../atractivoImagenes/")) {
                mkdir("../atractivoImagenes/", 0777);
            }

            //comprobamos si el archivo ha subido
            if ($file && move_uploaded_file($_FILES['fsGaleria']['tmp_name'][$i], "../atractivoImagenes/" . $file)) {
                $image = "../atractivoImagenes/" . $file; //devolvemos el nombre del archivo para pintar la imagen
            }
        }
    } else {
        throw new Exception("Error Processing Request", 1);
    }
}


function registrarAtractivo() {
    //uploadImage();
    //subirImagenes();
    echo 'Subio';
}
