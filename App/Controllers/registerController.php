<?php

    include_once(__DIR__ . "/../Core/Store.php");
    include_once(__DIR__ . "/../Models/Usuari.php");

    class registerController extends Controller{
            
            public function index(){
                // $test = $_ENV['MY_EMAIL'];
                // echo "Hello $test";
                // die();
                // echo $_SERVER['DOCUMENT_ROOT'];
                // echo "<pre>";
                // var_dump($_FILES['profile_image']);
                // echo "</pre>";

                // die();

                $file = $_FILES[ 'profile_image' ][ 'name' ]; //nombre del archivo
                $url_temp = $_FILES[ 'profile_image' ][ 'tmp_name' ]; //nombre temporal del archivo
                $nameArray = explode('.', $file); //separa el nombre del archivo de la extensión
                $fileNameCustom = uniqid() . '.' . $nameArray[ 1 ]; //nombre del archivo personalizado
                Store::store($url_temp, "images/profiles", $fileNameCustom); //llama al método store de la clase Store

                $userModel = new Usuari();
                $user = $userModel->insert( [
                    'username' => $_POST[ 'username' ],
                    'first_name' => $_POST[ 'first_name' ],
                    'last_name' => $_POST[ 'last_name' ],
                    'email' => $_POST[ 'email' ],
                    'birthdate' => $_POST[ 'birthdate' ],
                    'profile_image' => $fileNameCustom,
                    'password' => $_POST[ 'password' ],
                    'verified' => false
                ] );

                $this->render("auth/create", [], "site");
            }


            public function store(){

                echo '<pre>';
                var_dump($_FILES);
                echo '</pre>';
                


            }
        }

?>