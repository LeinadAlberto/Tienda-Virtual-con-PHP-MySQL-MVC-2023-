<?php 

    class Home extends Controller {

        public function __construct() {
            parent::__construct();
            session_start();
        }

        public function index() {
            $data["title"] = "Página Principal";
            $this->views->getView("home", "index", $data);
        }
        
    }

?>