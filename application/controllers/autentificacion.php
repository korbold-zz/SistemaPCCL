<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class autentificacion extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model("usuarios_model");
        $this->load->model("evaluacion_model");
        
        $this->load->model("evaluacion_examinadores_model");

        $this->load->library('grocery_CRUD');
        $this->load->helper('date');
    }

    public function index() {


        $this->load->view('login.php');
    }

    public function validar_personas() {
        $datos = $this->usuarios_model->buscar_personas($_POST['cedula']);

        if ($datos) {
            $this->session->set_flashdata('mostrarMensaje', TRUE);
            redirect("");
        } else {
            $cedula = $_REQUEST['cedula'];

            $this->usuarios_model->insertarCedula($cedula, '0');
            $datos = $this->usuarios_model->buscar_personas($cedula);

            $usuario = $_REQUEST['usuario'];
            $clave = $_REQUEST['clave'];
            $this->usuarios_model->insertarUsuario($usuario, $clave, $datos->ID_PERSONA);
            $user = $this->usuarios_model->buscar_usuario($datos->ID_PERSONA);
            $this->usuarios_model->insertarInsignia($user->ID_USUARIO);
            redirect("");
        }
    }

    public function validar() {
        $persona = $this->usuarios_model->buscar_autentificacion($_POST['usuario'], md5($_POST['clave']));
        if ($persona) {

            $usuario = $this->usuarios_model->prioridadUsuario($persona->ID_USUARIO);

            if ($usuario) {
                $this->load->view('menu_view.php');
            } else {

                $estado = $this->usuarios_model->buscarEstado($persona->ID_PERSONA);

                if ($estado) {
                    redirect("autentificacion/menu/$persona->ID_PERSONA/$persona->ID_USUARIO");
                    
                } else {
                    $provincia = $this->usuarios_model->get_provincias();
                    $provincia = $this->usuarios_model->get_provincias();
                    $canton = $this->usuarios_model->get_cantones();
                    $genero = $this->usuarios_model->get_generos();
                    $edu_sup = $this->usuarios_model->get_edu_superior();
                    $data['EXP'] = $this->usuarios_model->get_exp_prof();
                    $data['PROF'] = $this->usuarios_model->get_perf_pro();
                    $data['FORMACION'] = $this->usuarios_model->get_formacion();

                    $data['PROVINCIAS'] = $provincia;
                    $data['CANTONES'] = $canton;
                    $data['GENEROS'] = $genero;
                    $data['EDUSUP'] = $edu_sup;
                    $data['C'] = $this->usuarios_model->get_personas($persona->ID_PERSONA);
                    
                   
                    $this->session->set_userdata('ID_PERSONA_ACTUAL',$persona->ID_PERSONA);
                    $this->load->view('personas/registro.php', $data);
                
                    echo $persona->ID_PERSONA;
                }
            }
        } else {
            $this->session->set_flashdata('mostrarMensajeConfirmacion', TRUE);
            redirect("");
        }
    }

    public function salir() {
        $this->session->unset_userdata('id_usuario');
        $this->session->unset_userdata('datos');
        $this->session->unset_userdata('ID_PERSONA_ACTUAL');
        $this->session->sess_destroy();
        redirect('/');
    }

    public function inicio() {

        $user = $this->session->userdata('user');
        if ($user == "ADMINISTRADOR") {
            $this->load->view('menu_view.php');
        } else {
            $id = $this->session->userdata('id_usuario');
             $dato['PENDIENTE'] = "NO";
                    $result = $this->evaluacion_examinadores_model->getEvaluacionPersonalPendiente($id);
                    if(isset($result) && count($result)>0 ){
                        $dato['PENDIENTE'] = "SI";
                    }
            $dato['PERSONAS'] = $this->usuarios_model->get_personas($id);
            $dato['RESULTADO'] = $this->evaluacion_model->calificacion($id);

            $this->load->view('personas/profile.php', $dato);
        }
    }

    public function menu($id = NULL, $id_user = NULL) {

        $usuario = $this->usuarios_model->prioridadUsuario($id_user);
        $user = array('id_usuario' => $id,
            'user' => $usuario->ID_ROL);
        $this->session->set_userdata($user);
        redirect('autentificacion/inicio');
    }

    public function insertar_persona() {

        $this->usuarios_model->insertar_personas($_POST['ci'], $_POST['prof'], $_POST['nombres'], $_POST['apellido_p'], $_POST['apellido_m'], $_POST['datepicker']
                , $_POST['genero'], $_POST['provincia'], $_POST['canton']
                , $_POST['calle_p'], $_POST['calle_s'], $_POST['nro_casa'], $_POST['nro_telefono']
                , $_POST['nro_celular'], $_POST['email']);

        $persona = $this->usuarios_model->buscar_personas($_POST['ci']);
        $expe = $_REQUEST['expe'];
        $entidad = $_REQUEST['entidad'];
        $cargo = $_REQUEST['cargo'];
        $act = $_REQUEST['act'];
        $fecha_inicialf = $_REQUEST['fecha_inicialf'];
        $fecha_finalf = $_REQUEST['fecha_finalf'];

        if (count($expe) > 0) {
            for ($i = 0; $i < count($expe); $i++) {

                $this->usuarios_model->insertar_experiencias($expe[$i], $persona->ID_PERSONA, $entidad[$i], $cargo[$i], $act[$i], $fecha_inicialf[$i], $fecha_finalf[$i]);
            }
        }

        $entity = $_REQUEST['entity'];
        $contacto = $_REQUEST['contacto'];
        $nro_tel = $_REQUEST['nro_tel'];
        $correo = $_REQUEST['correo'];

        if (count($entity) > 0) {
            for ($i = 0; $i < count($entity); $i++) {
                $dato = $entity[$i];
                $dato2 = $contacto[$i];
                $dato3 = $nro_tel[$i];
                $dato4 = $correo[$i];


                $this->usuarios_model->insertar_referencias($dato, $dato2, $dato3, $persona->ID_PERSONA, $dato4);
            }
        }





        $tipo_ex = $_REQUEST['tipo_ex'];
        $nombre_curso = $_REQUEST['nombre_curso'];
        $nombre_ie = $_REQUEST['nombre_ie'];
        $certificacion = $_REQUEST['certificacion'];
        $fecha_inicial = $_REQUEST['fecha_inicial'];
        $fecha_final = $_REQUEST['fecha_final'];
        $duracion = $_REQUEST['duracion'];
        if (count($tipo_ex) > 0) {
            for ($i = 0; $i < count($tipo_ex); $i++) {
                $dato = $tipo_ex[$i];
                $dato2 = $nombre_curso[$i];
                $dato3 = $nombre_ie[$i];
                $dato4 = $fecha_inicial[$i];
                $dato5 = $fecha_final[$i];
                $dato6 = $duracion[$i];
                $this->usuarios_model->insertar_formaciones($dato3, $dato, $persona->ID_PERSONA, $dato2, $dato4, $dato5, $dato6);
            }
        }


        $nombre_t = $_REQUEST['nombre_t'];
        $nombre_i = $_REQUEST['nombre_i'];
        $numero_reg = $_REQUEST['numero_reg'];
        $nombreEdusup = $_REQUEST['nombreEdusup'];
        if (count($nombre_t) > 0) {
            for ($i = 0; $i < count($nombre_t); $i++) {
                $dato = $nombre_t[$i];
                $dato2 = $nombre_i[$i];
                $dato3 = $numero_reg[$i];
                $dato4 = $nombreEdusup[$i];

                $this->usuarios_model->insertar_edu_sup($dato4, $dato2, $dato, $dato3, $persona->ID_PERSONA);
            }
        }

        redirect('');
    }

    public function ingreso_persona() {
        try {
            $id = $this->session->userdata('id_usuario');
            $crud = new grocery_CRUD();
            $crud->set_table('tab_personas');
            $crud->set_subject('Editar');
            if (isset($id)) {
                $crud->where('ID_PERSONA', $id);
            }
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Editar";
            $this->load->view('repositorio/v_repositorio.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

}
