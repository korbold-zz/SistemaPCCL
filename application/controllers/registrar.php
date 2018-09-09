<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class registrar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
//        if (!$this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
        $this->load->model("parametros_model");
        $this->load->model("f019_model");
    }

    public function personas() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_personas');
            $crud->set_subject('Personas');
            $crud->unset_fields('ID_ESTADO_RESPOSABILIDAD');
            $crud->display_as('ID_PROVINCIA', 'PROVINCIA');
            $crud->set_relation('ID_PROVINCIA', 'tab_provincias', 'provincia');
            $crud->display_as('ID_CANTON', 'CANTÓN');
            $crud->set_relation('ID_CANTON', 'tab_cantones', 'canton');
            $crud->display_as('ID_GENERO', 'GÉNERO');
            $crud->set_relation('ID_GENERO', 'tab_generos', 'nombre_genero');
            $crud->display_as('ID_CARGO', 'CARGO');
            $crud->set_relation('ID_CARGO', 'tab_cargos', 'cargo');
            $crud->display_as('ID_CARGO', 'CARGO');
            $crud->set_relation('ID_CARGO', 'tab_cargos', 'cargo');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Administrar Datos Personas";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function estudios_superiores() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_formacion_edu_sup');

            $crud->set_subject('Estudios Superiones');
//            $crud->display_as('ID_GENERO', 'GÉNERO');
//            $crud->set_relation('ID_GENERO', 'tab_generos', 'nombre_genero');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Estudios Superiones";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function detalle_formaciones_superiores() {
        try {

            $crud = new grocery_CRUD();
            $crud->set_table('tab_educacion_superior');
            $crud->set_subject('Formacion Superior');

            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');
            $crud->display_as('ID_FORMACION_EDU_SUP', 'FORMACION SUPERIOR');
            $crud->set_relation('ID_FORMACION_EDU_SUP', 'tab_formacion_edu_sup', 'nombre_formacion_edu_sup');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');
            $crud->display_as('ID_FORMACION_GENERAL', 'FORMACION');

            if (isset($id)) {

                $crud->where('tab_educacion_superior.ID_PERSONA', $id);
            }
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Estudios Superiores";
            if (isset($id)) {
                $this->load->view('repositorio/v_repositorio.php', $datos);
            } else {
                $this->load->view('template_grocery.php', $datos);
            }
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function detalle_formaciones_superiores1() {
        try {
            $id = $this->session->userdata('id_usuario');
            $crud = new grocery_CRUD();
            $crud->set_table('tab_educacion_superior');
            $crud->set_subject('Formacion Superior');

            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');
            $crud->display_as('ID_FORMACION_EDU_SUP', 'FORMACION SUPERIOR');
            $crud->set_relation('ID_FORMACION_EDU_SUP', 'tab_formacion_edu_sup', 'nombre_formacion_edu_sup');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');
            $crud->display_as('ID_FORMACION_GENERAL', 'FORMACION');
//             $crud->field_type('ID_FORMACION_GENERAL', 'readonly');
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_fields('ID_PERSONA');
           



            if (isset($id)) {

                $crud->where('tab_educacion_superior.ID_PERSONA', $id);
            }
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Estudios Superiores";
            if (isset($id)) {
                $this->load->view('repositorio/v_repositorio.php', $datos);
            } else {
                $this->load->view('template_grocery.php', $datos);
            }
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function InsertarEstudio() {
        $id_persona = $this->session->userdata('id_usuario');
        $item = "Documentos de respaldo Educación superior / Formación educación formal";
        $cumple = "SI";
        $observacion = "";
        $this->f019_model->insertar($id_persona, $item, $cumple, $observacion);
    }

    public function experiencias_profesionales() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_experiencias_profesionales');
            $crud->set_subject('Experiencia Profesional');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Experiencia Profesional";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function formacion_profesional() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_formaciones_generales');
            $crud->set_subject('Formación Profesional');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Formación Profesional";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function detalle_experiencias_profesionales() {
        try {

            $crud = new grocery_CRUD();
            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');
            $crud->set_table('tab_detalles_experiencias_profesionales');
            $crud->set_subject('Experiencia Profesional');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');

            $crud->set_relation('ID_EXPE_PROFESIONAL', 'tab_experiencias_profesionales', 'nombre_expe_profesional');

            $crud->display_as('ID_EXPE_PROFESIONAL', 'TIPO DE EXPERIENCIA PORFESIONAL');
            $crud->display_as('ID_FORMACION_GENERAL', 'FORMACION');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Datalle Experiencia Profesional";




            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function detalle_experiencias_profesionales1() {
        try {
            $id = $this->session->userdata('id_usuario');
            $crud = new grocery_CRUD();
            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');
            $crud->set_table('tab_detalles_experiencias_profesionales');
            $crud->set_subject('Experiencia Profesional');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');

            $crud->set_relation('ID_EXPE_PROFESIONAL', 'tab_experiencias_profesionales', 'nombre_expe_profesional');

            $crud->display_as('ID_EXPE_PROFESIONAL', 'TIPO DE EXPERIENCIA PORFESIONAL');
            $crud->display_as('ID_FORMACION_GENERAL', 'FORMACION');
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_fields('ID_PERSONA');
          


            if (isset($id)) {
                $crud->where('tab_detalles_experiencias_profesionales.ID_PERSONA', $id);
            }
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Datalle Experiencia Profesional";
            if (isset($id)) {
                $this->load->view('repositorio/v_repositorio.php', $datos);
            } else {
                $this->load->view('template_grocery.php', $datos);
            }
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function Insertarexperiencia() {
        $id_persona = $this->session->userdata('id_usuario');
        $item = "Documentos de respaldo - Experiencia profesional";
        $cumple = "SI";
        $observacion = "";
        $this->f019_model->insertar($id_persona, $item, $cumple, $observacion);
    }

    public function detalle_formacion_profesional() {
        try {

            $crud = new grocery_CRUD();
            $crud->set_table('tab_detalles_formaciones');
            $crud->set_subject('Formacion Profesional');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');

            $crud->set_relation('ID_FORMACION_GENERAL', 'Tab_formaciones_generales', 'NOMBRE_FORMACION');

            $crud->display_as('ID_FORMACION_GENERAL', 'FORMACION');
            if (isset($id)) {
                $crud->where('tab_detalles_formaciones.ID_PERSONA', $id);
            }

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Datalle Formacion Profesional";
            if (isset($id)) {
                $this->load->view('repositorio/v_repositorio.php', $datos);
            } else {
                $this->load->view('template_grocery.php', $datos);
            }
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function detalle_formacion_profesional1() {
        try {
            $id = $this->session->userdata('id_usuario');
            $crud = new grocery_CRUD();
            $crud->set_table('tab_detalles_formaciones');
            $crud->set_subject('Formacion Profesional');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_field_upload('ARCHIVO', 'assets/uploads/files');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');

            $crud->set_relation('ID_FORMACION_GENERAL', 'Tab_formaciones_generales', 'NOMBRE_FORMACION');

            $crud->display_as('ID_FORMACION_GENERAL', 'FORMACION');
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_fields('ID_PERSONA');
            $crud->callback_after_update(array($this, 'Insertarformacion'));

            if (isset($id)) {
                $crud->where('tab_detalles_formaciones.ID_PERSONA', $id);
            }

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Datalle Formacion Profesional";
            if (isset($id)) {
                $this->load->view('repositorio/v_repositorio.php', $datos);
            } else {
                $this->load->view('template_grocery.php', $datos);
            }
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function Insertarformacion() {
        $id_persona = $this->session->userdata('id_usuario');
        $item = "Documentos de respaldo - Formación Pedagógica/Formación Especializada";
        $cumple = "SI";
        $observacion = "";
        $this->f019_model->insertar($id_persona, $item, $cumple, $observacion);
    }

}
