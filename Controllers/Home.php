<?php 

    class Home extends Controller {

        public function __construct() {
            parent::__construct();
            session_start();
        }

        public function index() {
            $data["title"] = "Página Principal";
            $data["categorias"] = $this->model->getCategorias();
            /* echo "<pre>";
            print_r($data);
            exit;
            echo "</pre>"; */
            $this->views->getView("home", "index", $data);
        }
        
    }

?>