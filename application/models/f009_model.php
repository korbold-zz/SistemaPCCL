<?php

class f009_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function f009() {
        $this->db->select('*');
        $this->db->from('Tab_detalle_certificacion');
        $this->db->join('Tab_certificacion', 'Tab_certificacion.ID_CERIFICACION=Tab_detalle_certificacion.ID_CERIFICACION');
       
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function detalle($id) {
        $this->db->select('*');
        $this->db->from('Tab_detalle__cert');
        $this->db->join('Tab_detalle_certificacion', 'Tab_detalle_certificacion.ID_DETALLE_CERTIFICACION=Tab_detalle__cert.ID_DETALLE_CERTIFICACION');
        $this->db->join('Tab_personas', 'Tab_personas.ID_PERSONA=Tab_detalle__cert.ID_PERSONA');
        $this->db->join('Tab_curso', 'Tab_curso.ID_CURSO=Tab_detalle__cert.ID_CURSO');
        $this->db->where('Tab_personas.ID_PERSONA', $id);
       
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function detalle_reporte() {
        $this->db->select('*');
        $this->db->from('Tab_detalle__cert');
        $this->db->join('Tab_detalle_certificacion', 'Tab_detalle_certificacion.ID_DETALLE_CERTIFICACION=Tab_detalle__cert.ID_DETALLE_CERTIFICACION');
        $this->db->join('Tab_personas', 'Tab_personas.ID_PERSONA=Tab_detalle__cert.ID_PERSONA');
        $this->db->join('Tab_curso', 'Tab_curso.ID_CURSO=Tab_detalle__cert.ID_CURSO');
      
       
        $consulta = $this->db->get();
        return $consulta->result();
    }
   
    

}
