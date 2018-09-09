<?php

class Usuario_model extends CI_Model {

    public function personas($id) {

        $periodo = $this->db->select('*')->get_where('tab_personas', array(
                    'id_persona' => $id
                ))->row();
        return $periodo;
    }

    public function usuarios() {
        $this->db->select('*');
        $this->db->from('th_empleados');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function personas_lista() {
        $this->db->select('*');
        $this->db->from('tab_personas');
        $this->db->order_by("APELLIDO_PATERNO", "Asc");
        $this->db->order_by("APELLIDO_MATERNO", "Asc");
        $this->db->order_by("PRIMER_NOMBRE", "Asc");
        $this->db->order_by("SEGUNDO_NOMBRE", "Asc");
        $this->db->limit(3);
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function personas_clientes($id) {

        $pn = $this->db->select('*')->get_where('tab_clientes_naturales', array(
                    'id_persona' => $id
                ))->row();
        return $pn;
    }

    public function personas_cedula($id) {

        $pc = $this->db->select('*')->get_where('tab_clientes', array(
                    'id_cliente' => $id
                ))->row();
        return $pc;
    }

    public function insertar_usuario($idp, $idc) {
        $datos['ID_PERSONA'] = $idp;
        $datos['ESTADO'] = 'P';
        $datos['FECHA_REGISTRO'] = date('Y-m-d H:i:s');
        $datos['NOMBRE_USUARIO'] = trim($idc);
        $password = trim($idc);
        $salt = 'itca';
        $datos['CLAVE_USUARIO'] = sha1(md5($salt . $password));



        $this->db->insert('th_empleados', $datos);
    }

    public function usuario_encontrado($id) {

        $pc = $this->db->select('*')->get_where('th_empleados', array(
                    'id_persona' => $id
                ))->row();
        return $pc;
    }

    public function personas_cedula_lik($id) {
        $this->db->select('*');

        $this->db->from('tab_personas');

        $this->db->join('tab_clientes_naturales', 'tab_personas.ID_PERSONA = tab_clientes_naturales.ID_PERSONA', 'inner');
        $this->db->join('tab_clientes', 'tab_clientes_naturales.ID_CLIENTE = tab_clientes.ID_CLIENTE', 'inner');



        $condicion = "tab_clientes.NRO_DOCUMENTO like '$id%' OR " .
                "concat(tab_personas.APELLIDO_PATERNO,' ',tab_personas.APELLIDO_MATERNO,' ',tab_personas.PRIMER_NOMBRE) like '%$id%'   ";

        $this->db->where($condicion);

        $this->db->order_by('tab_personas.APELLIDO_PATERNO,tab_personas.APELLIDO_MATERNO,tab_personas.PRIMER_NOMBRE,tab_personas.SEGUNDO_NOMBRE');

        $this->db->limit(3);

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function editar_empleado($id, $es, $pro) {
        if ($pro == 1) {
            $this->db->set("ESTADO", $es);
            $this->db->where('ID_PERSONA', $id);
            $this->db->update('th_empleados');
        } else {
            $cedula = $this->busca_cedula_empleado($id);
            $cedula = $cedula[0];
            $password = trim($cedula->NRO_DOCUMENTO);
            $salt = 'itca';
            $d = sha1(md5($salt . $password));
            $this->db->set("CLAVE_USUARIO", $d);

            $this->db->where('ID_PERSONA', $id);
            $this->db->update('th_empleados');
        }
    }

    public function busca_cedula_empleado($id) {
        $this->db->select('*');
        $this->db->from('th_empleados');
        $this->db->join('tab_personas', 'th_empleados.ID_PERSONA = tab_personas.ID_PERSONA');
        $this->db->join('tab_clientes_naturales', 'tab_personas.ID_PERSONA = tab_clientes_naturales.ID_PERSONA');
        $this->db->join('tab_clientes', 'tab_clientes_naturales.ID_CLIENTE = tab_clientes.ID_CLIENTE');
        $this->db->where("tab_personas.ID_PERSONA", $id);
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function cambio_clave($id, $d) {
        $this->db->set("CLAVE_USUARIO", $d);
        $this->db->where('ID_PERSONA', $id);
        $this->db->update('th_empleados');
    }

}
