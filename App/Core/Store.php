<?php 

 class Store{

    //Store::store($url_temp, "images/profiles","hortiz");

    public static function store($source, $destination, $filename){
        //$file = $_FILES[$source]["name"]; //nombre del archivo
        //$url_temp = $_FILES[$source]["tmp_name"]; //nombre temporal del archivo
        $url_insert = $_SERVER['DOCUMENT_ROOT'] . "/Public/Assets/" . $destination; //ruta donde se guardará el archivo
        $url_target = $url_insert . "/" . $filename;

        if (!file_exists($url_insert)) {
            mkdir($url_insert, 0777, true); //el true permet afegir directoris o carpetes de forma recursiva
        }

        if (move_uploaded_file($source, $url_target)) {
            echo "El fitxer " . htmlspecialchars(basename($filename)) . " s'ha carregat amb èxit!";
        } else {
            echo "Error al carregar el fitxer.";
        }
    
}
 }
?>