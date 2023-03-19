<?php 

    class Principal extends Controller {

        public function __construct() {
            parent::__construct();
            session_start();
        }

        public function index() {
            
        }

        /* Vista Acerca de Nosotros */
        public function about() {
            $data["title"] = "Nuestro Equipo";
            $this->views->getView("principal", "about", $data);
        }

        /* Vista Tienda */
        public function shop() {
            $data["title"] = "Nuestros Productos";
            $this->views->getView("principal", "shop", $data);
        }

        /* Vista Detalle de Producto */
        public function detail($id_producto) {
            $data["title"] = "Detalle Producto";
            $this->views->getView("principal", "detail", $data);
        }

        /* Vista Contacto */
        public function contactos($id_producto) {
            $data["title"] = "Contactos";
            $this->views->getView("principal", "contact", $data);
        }
    }

?>