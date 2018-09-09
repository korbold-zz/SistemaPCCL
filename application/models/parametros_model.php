<?php

class parametros_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
      
    public function get_usuarios() {
        $this->db->select('*');
        $this->db->from('tab_usuarios');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    
    

   
   
    
    
    
   
    
    
   
}
