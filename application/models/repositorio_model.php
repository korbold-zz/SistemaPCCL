<?php


class repositorio_model extends CI_Model {
    
     public function get_respositorio($id,$id_archivo) {
        $this->db->select('*');
        $this->db->from('tab_respositorio_interno');
        $this->db->where('tab_respositorio_interno.ID_PERSONA',$id);
        $this->db->where('tab_respositorio_interno.ID_ARCHIVO',$id_archivo);
        
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
     public function insertar_persona($id_persona,$archivo) {
         
        $datos['ID_PERSONA'] = $id_persona;
        $datos['ID_ARCHIVO'] = $archivo;
        $datos['FECHA'] = date('Y-m-d ');
        $this->db->insert('tab_respositorio_interno', $datos);
    }
    
   
        
         public function insertarUsuario($usuario, $clave,$id_persona) {
          $datos['NOMBRE_USUARIO'] = $usuario;
        $datos['CLAVE'] = md5($clave);
        $datos['ID_PERSONA'] = $id_persona;
        $this->db->insert('tab_usuarios', $datos);
    }
    
    
    public function insertarInterno($id) {
       
        $datos['FECHA'] = date('Y-m-d');
        
        $this->db->where('tab_respositorio_interno.ID_PERSONA', $id);
        $this->db->update('tab_respositorio_interno', $datos);
    }
    
}
