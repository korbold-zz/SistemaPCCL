<?php

class hoja extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
//        if (!$this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
        $this->load->model("hoja_model");
    }

    

}
