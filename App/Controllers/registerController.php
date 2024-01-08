<?php

    include_once(__DIR__ . "/../Core/Controller.php");

    class registerController extends Controller{
            
            public function index(){

                $this->render("auth/create", [], "site");
            }
        }

?>