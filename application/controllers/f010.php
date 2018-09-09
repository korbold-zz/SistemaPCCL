<?php

class f010 extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
    }
    
      public function f010() {

         $dato['PERSONAS'] = $this->usuarios_model->get_personas2('5');
         
        $this->load->view('f010/f010_view.php',$dato);
    }
}
