<?php

class Vacio_model extends CI_Model {

    public function llena_tablas($tabla) {
        $this->db->select('*');
        $this->db->from($tabla);
        $consulta = $this->db->get();
        return $consulta->result();
    }



    public function llena_tablasid($tabla, $campo, $id) {

        $this->db->select('*');
        $this->db->from($tabla);
        $this->db->where($campo, $id);
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function busca_activos($id, $tabla, $campo) {
        $roles = $this->db->select('*')->get_where($tabla, array(
                    $campo => $id
                    
                ))->row();
        return $roles;
    }

    public function busca_submenu_rol($rol, $id) {
        $roles = $this->db->select('*')->get_where('tab_ingreso', array(
                    'ID_ROL' => $rol,
                    'ID_SUBMENU' => $id
                ))->row();
        return $roles;
    }

   
   

}
