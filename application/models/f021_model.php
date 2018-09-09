<?php

class f021_model extends CI_Model{
    public function getEvaluacion($id_persona = null) {
        $this->db->select('*');
        $this->db->from('tab_eva_detalle_persona');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA = tab_eva_detalle_persona.ID_PERSONA');
        if (isset($id_persona)) {
            $this->db->where('tab_personas.ID_PERSONA', $id_persona);
        }
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
     public function insertar($id_persona, $valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $suma) {
        $datos['ID_PERSONA'] = $id_persona;
        $datos['VALOR1'] = $valor1;
        $datos['VALOR2'] = $valor2;
        $datos['VALOR3'] = $valor3;
        $datos['VALOR4'] = $valor4;
        $datos['VALOR5'] = $valor5;
        $datos['VALOR6'] = $valor6;
        $datos['VALOR7'] = $valor7;
        $datos['VALOR8'] = $valor8;
        $datos['VALOR9'] = $valor9;
        $datos['SUMA'] = $suma;
        
        $this->db->insert('tab_eva_detalle_persona', $datos);
    }
     public function actualizar($id_persona, $valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $suma) {
        
        $datos['VALOR1'] = $valor1;
        $datos['VALOR2'] = $valor2;
        $datos['VALOR3'] = $valor3;
        $datos['VALOR4'] = $valor4;
        $datos['VALOR5'] = $valor5;
        $datos['VALOR6'] = $valor6;
        $datos['VALOR7'] = $valor7;
        $datos['VALOR8'] = $valor8;
        $datos['VALOR9'] = $valor9;
        $datos['SUMA'] = $suma;
        
        $this->db->where('ID_PERSONA', $id_persona);
        $this->db->update('tab_eva_detalle_persona', $datos);
    }
}
