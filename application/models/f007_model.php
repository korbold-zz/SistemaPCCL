<?php


class f007_model extends CI_Model {
     public function __construct() {
        $this->load->database();
    }
    
    public function f007() {
        $this->db->select('*');
        $this->db->from('Tab_personas');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO=Tab_personas.ID_CARGO');
       $this->db->join('Tab_educacion_superior', 'Tab_educacion_superior.ID_PERSONA=Tab_personas.ID_PERSONA');
       $this->db->where('Tab_cargos.ID_CARGO', '6');
       
        $consulta = $this->db->get();
        
        return $consulta->result();
    }
}
