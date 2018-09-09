<?php


class f003 extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
          $this->load->model('usuarios_model');
    }
    
     public function f003() {

         $dato['PERSONAS'] = $this->usuarios_model->get_personas2('4');
         
        $this->load->view('f003/f003_view.php',$dato);
    }
     
}
