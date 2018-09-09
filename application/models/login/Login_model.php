<?php

class Login_model extends CI_Model {

    public function buscar_empleado($usuario, $clave) {
         $password = trim($clave);
        
        $user = $this->db->select('*')->get_where('tab_usuarios', array(
                    'NOMBRE_USUARIO' => trim($usuario),
                    'CLAVE' => $clave
                   
                ))->row();
        return $user;
    }
 
   
}
