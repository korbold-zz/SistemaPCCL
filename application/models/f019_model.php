<?php

class f019_model extends CI_Model {

    public function getPersonas($id_persona = null) {
        $this->db->select('*');
        $this->db->from('tab_personas');
        $this->db->join('tab_cargos', 'tab_cargos.ID_CARGO = tab_personas.ID_CARGO');
        if (isset($id_persona)) {
            $this->db->where('tab_personas.ID_PERSONA', $id_persona);
        }
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function getDatos($id_persona = null,$tabla,$where=null,$w1=null) {
        $this->db->select('ARCHIVO');
        $this->db->from($tabla);
        
        if (isset($id_persona)) {
            $this->db->where('ID_PERSONA', $id_persona);
            $this->db->where('ARCHIVO IS NOT NULL');
        }
        if (isset($where)) {
            $this->db->where($where, $w1);
            
        }
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function getExpediente($id_persona = null, $id=NULL) {
        $this->db->select('*');
        $this->db->from('tab_expediente');
         $this->db->join('tab_personas', 'tab_personas.ID_PERSONA = tab_expediente.ID_PERSONA');
        if (isset($id_persona)) {
            $this->db->where('tab_expediente.ID_PERSONA', $id_persona);
            $this->db->where('tab_expediente.ID', $id);
        }
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function insertar($id_persona, $item, $cumple ,$observacion) {
        $datos['ID_PERSONA'] = $id_persona;
        $datos['ITEM'] = $item;
        $datos['OBSERVACION'] = $observacion;
        $datos['CUMPLE'] = $cumple;
        $this->db->insert('tab_expediente', $datos);
    }

    public function actualizar($id_persona, $item,  $cumple,$observacion) {
        $datos['ITEM'] = $item;
        
        $datos['CUMPLE'] = $cumple;
        
        $this->db->where('ITEM', $item);
        $this->db->where('ID_PERSONA', $id_persona);
        $this->db->update('tab_expediente', $datos);
    }
    
    
    
    

}
