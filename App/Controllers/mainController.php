<?php 

    include_once(__DIR__ . "/../Core/Controller.php");
    class mainController extends Controller{
            
            public function home(){
                //echo "Estic a la home";
                //header("Location: 404.php");
                //require_once(__DIR__ . "/../Views/home.view.php");
                $this->render("home", [], "site");
            }

            public function list(){
                //echo "Estic al llistat";
                //require_once(__DIR__ . "/../Views/list.view.php");
                $this->render("list", [], "site");
            }

            public function create(){
                // echo "Estic al formulari de creació";
                //require_once(__DIR__ . "/../Views/create.view.php");
                $this->render("create", [], "site");
            }

            public function update(){
                // echo "Estic al formulari d'actualització";
                //require_once(__DIR__ . "/../Views/update.view.php");
                $this->render("update", [], "site");
            }
    }

?>
