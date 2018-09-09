<?php


class hoja_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
         
     public function get_estado_persona() {
        $this->db->select('*');
        $this->db->from('tab_personas');
        $this->db->where('ESTADO_TAREA','1');
         $this->db->order_by('ID_PERSONA DESC');
        $consulta = $this->db->get();
        return $consulta->result();
    }
     public function get_calificar($id) {
        $this->db->select('*');
        $this->db->from('tab_personas');
        $this->db->where('ID_PERSONA',$id);
        
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
     public function f011($id_persona) {
        $this->db->select('*');
        $this->db->from('tab_codigos');
        $this->db->join('tab_encabezado', 'tab_encabezado.ID_ENCABEZADO=tab_codigos.ID_ENCABEZADO');
        $this->db->join('tab_archivos', 'tab_archivos.ID_ARCHIVO=tab_codigos.ID_ARCHIVO');
        $this->db->where('tab_codigos.ID_PERSONA',$id_persona);
        $this->db->where('tab_archivos.ID_ARCHIVO','2');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function ingresof011($id_persona, $fecha_emision, $fecha_final) {
        $datos['ID_PERSONA'] = $id_persona;
        $datos['ID_ARCHIVO'] = '2';
        $datos['ID_ENCABEZADO'] = '2';
        $datos['CODIGO'] = "ITCA-F011-".$id_persona;
        $datos['FECHA_EMISION'] = $fecha_emision;
        $datos['FECHA_FINAL'] = $fecha_final;
        $this->db->insert('tab_codigos', $datos);
    }

}
