<?php


class f002 extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
    }
    
     public function f002() {

         $dato['PERSONAS'] = $this->usuarios_model->get_personas2('3');
        $this->load->view('f002/f002_view.php',$dato);
    }
}
