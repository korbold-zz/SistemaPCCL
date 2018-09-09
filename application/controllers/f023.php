<?php


class f023 extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
    }
    
     public function reportes() {

        
        $this->load->view('f023/f023_view.php');
    }
}
