<?php

    include_once(__DIR__ . "/../Core/Controller.php");

    class registerController extends Controller{
            
            public function index(){
                // $test = $_ENV['MY_EMAIL'];
                // echo "Hello $test";
                // die();
                $this->render("auth/create", [], "site");
            }


            public function store(){

                echo '<pre>';
                var_dump($_FILES);
                echo '</pre>';
                


            }
        }

?>