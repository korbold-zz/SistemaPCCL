<?php

class usuarios_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function buscar_autentificacion($usuario, $clave) {
        $user = $this->db->select('*')->get_where('tab_usuarios', array(
                    'NOMBRE_USUARIO' => $usuario,
                    'CLAVE' => $clave
                ))->row();
        return $user;
    }

    public function buscar_personas($cedula) {
        $persona = $this->db->select('*')->get_where('tab_personas', array(
                    'CEDULA' => $cedula
                ))->row();
        return $persona;
    }

    public function buscar_usuario($user) {
        $persona = $this->db->select('*')->get_where('tab_usuarios', array(
                    'ID_PERSONA' => $user
                ))->row();
        return $persona;
    }

    public function insertarUsuario($usuario, $clave, $id_persona) {
        $datos['NOMBRE_USUARIO'] = $usuario;
        $datos['CLAVE'] = md5($clave);
        $datos['ID_PERSONA'] = $id_persona;
        $this->db->insert('tab_usuarios', $datos);
    }

    public function insertarCedula($cedula, $estado) {
        $datos['CEDULA'] = $cedula;
        $datos['ESTADO_TAREA'] = $estado;
        $this->db->insert('tab_personas', $datos);
    }

    public function archivo($id) {
        $this->db->select('*');
        $this->db->from('tab_encabezado');
        
        $this->db->where('tab_encabezado.ID_ENCABEZADO', $id);
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function f035($id_persona) {
        $this->db->select('*');
        $this->db->from('tab_codigos');
        $this->db->join('tab_encabezado', 'tab_encabezado.ID_ENCABEZADO=tab_codigos.ID_ENCABEZADO');
        $this->db->join('tab_archivos', 'tab_archivos.ID_ARCHIVO=tab_codigos.ID_ARCHIVO');
        $this->db->where('tab_codigos.ID_PERSONA', $id_persona);
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function ingresof035($id_persona, $fecha_emision, $fecha_final) {
        $datos['ID_PERSONA'] = $id_persona;
        $datos['ID_ARCHIVO'] = '1';
        $datos['ID_ENCABEZADO'] = '1';
        $datos['CODIGO'] = "ITCA-F035-" . $id_persona;
        $datos['FECHA_EMISION'] = $fecha_emision;
        $datos['FECHA_FINAL'] = $fecha_final;
        $this->db->insert('tab_codigos', $datos);
    }

    public function get_perf_pro() {
        $this->db->select('*');
        $this->db->from('Tab_denominacion_catalogo_perf_pro');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_formacion() {
        $this->db->select('*');
        $this->db->from('Tab_formaciones_generales');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_edu_superior() {
        $this->db->select('*');
        $this->db->from('Tab_formacion_edu_sup');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_exp_prof() {
        $this->db->select('*');
        $this->db->from('Tab_experiencias_profesionales');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function buscarEstado($clave) {
        $this->db->select('tab_personas.ESTADO_TAREA');
        $this->db->from('tab_personas');
        $this->db->join('tab_usuarios', 'tab_usuarios.ID_PERSONA = tab_personas.ID_PERSONA');
        $this->db->where('tab_usuarios.ID_PERSONA=' . $clave);
        $this->db->where('tab_personas.ESTADO_TAREA>=', '1');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function insertarInsignia($id_usuario) {

        $datos['ID_ROL'] = 2;
        $datos['ID_USUARIO'] = $id_usuario;
        $this->db->insert('tab_asignaciones_roles_usuarios', $datos);
    }

    public function prioridadUsuario($id_usuario) {
        $this->db->select('*');
        $this->db->from('tab_asignaciones_roles_usuarios');
        $this->db->join('tab_roles', 'tab_roles.ID_ROL = tab_asignaciones_roles_usuarios.ID_ROL');
        $this->db->where('tab_asignaciones_roles_usuarios.ID_USUARIO', $id_usuario);
        $this->db->where('tab_roles.ROL', 'ADMINISTRADOR');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_cantones() {
        $this->db->select('*');
        $this->db->from('tab_cantones');

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_provincias() {
        $this->db->select('*');
        $this->db->from('tab_provincias');

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_generos() {
        $this->db->select('*');
        $this->db->from('tab_generos');

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_experiencias() {
        $this->db->select('*');
        $this->db->from('tab_generos');

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_referencias_personales($id_per) {
        $this->db->select('*');

        $this->db->from('Tab_referencias_personales');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA =Tab_referencias_personales.ID_PERSONA ');

        $this->db->where('tab_personas.ID_PERSONA', $id_per);

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_EPedagogica($id_per) {
        $this->db->select('*');

        $this->db->from('Tab_detalles_experiencias_profesionales');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA =Tab_detalles_experiencias_profesionales.ID_PERSONA ');
        $this->db->join('Tab_experiencias_profesionales', 'Tab_experiencias_profesionales.ID_EXPE_PROFESIONAL = Tab_detalles_experiencias_profesionales.ID_EXPE_PROFESIONAL');
        $this->db->where('tab_personas.ID_PERSONA', $id_per);
        $this->db->where('Tab_experiencias_profesionales.NOMBRE_EXPE_PROFESIONAL', 'PEDAGOGICA');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_Eprofesional($id_per) {
        $this->db->select('*');

        $this->db->from('Tab_detalles_experiencias_profesionales');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA =Tab_detalles_experiencias_profesionales.ID_PERSONA ');
        $this->db->join('Tab_experiencias_profesionales', 'Tab_experiencias_profesionales.ID_EXPE_PROFESIONAL = Tab_detalles_experiencias_profesionales.ID_EXPE_PROFESIONAL');
        $this->db->where('tab_personas.ID_PERSONA', $id_per);
        $this->db->where('Tab_experiencias_profesionales.NOMBRE_EXPE_PROFESIONAL', 'PROFESIONAL');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_fEspecializada($id_per) {
        $this->db->select('*');

        $this->db->from('Tab_detalles_formaciones');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA =Tab_detalles_formaciones.ID_PERSONA ');
        $this->db->join('Tab_formaciones_generales', 'Tab_formaciones_generales.ID_FORMACION_GENERAL = Tab_detalles_formaciones.ID_FORMACION_GENERAL');
        $this->db->where('tab_personas.ID_PERSONA', $id_per);
        $this->db->where('Tab_formaciones_generales.NOMBRE_FORMACION', 'ESPECIALIZADA');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_fPedagogica($id_per) {
        $this->db->select('*');

        $this->db->from('Tab_detalles_formaciones');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA =Tab_detalles_formaciones.ID_PERSONA ');
        $this->db->join('Tab_formaciones_generales', 'Tab_formaciones_generales.ID_FORMACION_GENERAL = Tab_detalles_formaciones.ID_FORMACION_GENERAL');
        $this->db->where('tab_personas.ID_PERSONA', $id_per);
        $this->db->where('Tab_formaciones_generales.NOMBRE_FORMACION', 'PEDAGOGICA');
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_educacion($id_per) {
        $this->db->select('*');

        $this->db->from('Tab_educacion_superior');
        $this->db->join('tab_personas', 'tab_personas.ID_PERSONA =Tab_educacion_superior.ID_PERSONA ');
        $this->db->join('Tab_formacion_edu_sup', 'Tab_formacion_edu_sup.ID_FORMACION_EDU_SUP = Tab_educacion_superior.ID_FORMACION_EDU_SUP');
        $this->db->where('tab_personas.ID_PERSONA', $id_per);
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function get_personas($id_per=NULL) {
        $this->db->select('*');
        if (isset($id_per)) {
              $this->db->where('ID_PERSONA', $id_per);
        }
      
        $this->db->from('tab_personas');

        $consulta = $this->db->get();
        return $consulta->result();
    }
     
    
     public function get_personas1($id=null,$estado=NULL) {
        $this->db->select('*');
       
        $this->db->from('Tab_codigos');
        $this->db->join('Tab_personas', 'Tab_personas.ID_PERSONA = Tab_codigos.ID_PERSONA');
        $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO = Tab_personas.ID_CARGO');
        $this->db->join('Tab_archivos', 'Tab_archivos.ID_ARCHIVO = Tab_codigos.ID_ARCHIVO');
        
        if (isset($id)) {
            $this->db->where('Tab_personas.ESTADO_TAREA',$estado);
            $this->db->where('Tab_archivos.nombre_archivo',$id);
        }
        

        $consulta = $this->db->get();
        return $consulta->result();
    }
    
     public function get_personas2($estado) {
        $this->db->select('*');
       
        $this->db->from('Tab_personas');
      $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO = Tab_personas.ID_CARGO');
      
            $this->db->where('ESTADO_TAREA',$estado);
           
            
       
        

        $consulta = $this->db->get();
        return $consulta->result();
    }
     public function get_personas3($estado,$cargo=NULL) {
        $this->db->select('*');
       
        $this->db->from('Tab_personas');
//         $this->db->join('tab_eva_detalle_persona', 'tab_eva_detalle_persona.ID_PERSONA = Tab_personas.ID_PERSONA');
      
           $this->db->join('Tab_cargos', 'Tab_cargos.ID_CARGO = Tab_personas.ID_CARGO');
      
            $this->db->where('ESTADO_TAREA>=',$estado);
            if (isset($cargo)) {
               $this->db->where('Tab_cargos.CARGO',$cargo); 
            }
          
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    
    
     public function get_Archivo($id=null, $archivo=null) {
        $this->db->select('*');
       
        $this->db->from('Tab_codigos');
        $this->db->join('Tab_personas', 'Tab_personas.ID_PERSONA = Tab_codigos.ID_PERSONA');
        $this->db->join('Tab_archivos', 'Tab_archivos.ID_ARCHIVO = Tab_codigos.ID_ARCHIVO');
        
        if (isset($id)) {
            $this->db->where('Tab_personas.id_persona',$id);
        }
        if (isset($id)) {
            $this->db->where('Tab_archivos.nombre_archivo',$archivo);
        }

        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function insertar_experiencias($id, $id_persona, $entidad, $cargo, $act_cargo, $fecha_inicial, $fecha_final) {

        $datos['ID_EXPE_PROFESIONAL'] = $id;
        $datos['ID_PERSONA'] = $id_persona;
        $datos['ENTIDAD'] = $entidad;
        $datos['CARGO_EJERCIDO'] = $cargo;
        $datos['ACTIVIDAD_CARGO'] = $act_cargo;
        $datos['FECHA_INICIAL'] = $fecha_inicial;
        $datos['FECHA_FINAL'] = $fecha_final;


        $this->db->insert('Tab_detalles_experiencias_profesionales', $datos);
    }

    public function insertar_edu_sup($id, $institucion, $titulo, $registro, $id_persona) {
        $datos['INSTITUCION'] = $institucion;
        $datos['ID_FORMACION_EDU_SUP'] = $id;
        $datos['TITULO'] = $titulo;
        $datos['REGISTRO_SENECYT'] = $registro;
        $datos['ID_PERSONA'] = $id_persona;

        $this->db->insert('Tab_educacion_superior', $datos);
    }

    public function insertar_formaciones($ins, $id_formacion_general, $id_persona, $nombre_curso, $fecha_inicio, $fecha_final, $duracion) {
        $datos['INSTITUCION'] = $ins;
        $datos['ID_FORMACION_GENERAL'] = $id_formacion_general;

        $datos['NOMBRE_CURSO'] = $nombre_curso;
        $datos['FECHA_INICIO'] = $fecha_inicio;
        $datos['FECHA_FINAL'] = $fecha_final;
        $datos['ID_PERSONA'] = $id_persona;
        $datos['DURACION'] = $duracion;

        $this->db->insert('Tab_detalles_formaciones', $datos);
    }

    public function insertar_referencias($entidad, $contacto, $numero_telefono, $id_persona, $correo) {
        $datos['ENTIDAD'] = $entidad;
        $datos['CONTACTO'] = $contacto;
        $datos['NUMERO_TELEFONO'] = $numero_telefono;
        $datos['ID_PERSONA'] = $id_persona;
        $datos['CORREO'] = $correo;

        $this->db->insert('Tab_referencias_personales', $datos);
    }

    public function insertar_personas($id,$id_perfil, $nombres, $apellido_paterno, $apellido_materno, $fecha_nacimiento, $genero, $provincia, $canton, $calle_p, $calle_s, $nro_casa, $nro_telefono, $nro_celular, $correo) {
        $datos['ID_CARGO'] = "7";
        $datos['ID_ESTADO_RESPOSABILIDAD'] = "1";
        $datos['ID_DENOMINACION_CATALOGO_PERF_PRO'] = $id_perfil;

        $datos['ESTADO_TAREA'] = "1";
        $datos['ID_GENERO'] = $genero;
        $datos['ID_PROVINCIA'] = $provincia;
        $datos['ID_CANTON'] = $canton;

        $datos['NOMBRES'] = $nombres;
        $datos['APELLIDO_PATERNO'] = $apellido_paterno;
        $datos['APELLIDO_MATERNO'] = $apellido_materno;

        $datos['E_MAIL'] = $correo;
        $datos['FECHA_NACIMIENTO'] = $fecha_nacimiento;
        $datos['NUMERO_TELEFONO'] = $nro_telefono;
        $datos['NUMERO_CELULAR'] = $nro_celular;
        $datos['CALLE_PRINCIPAL'] = $calle_p;
        $datos['NRO_CASA'] = $nro_casa;
        $datos['CALLE_SECUNDARIA'] = $calle_s;
        $this->db->where('CEDULA', $id);
        $this->db->update('tab_personas', $datos);
    }

    

}
