<?php

class seguridad extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
//        if ($this->session->userdata('id_usuario')) {
//            redirect('autentificacion');
//        }
    }

    public function roles() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_roles');
            $crud->set_subject('Roles');
            $crud->set_rules('ROL','ROL','varchar');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Administrar Roles";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    
   
    public function asigUser() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_asignaciones_roles_usuarios');
            $crud->display_as('ID_ASIG_ROL_USUARIO', 'ID');
            $crud->set_relation('ID_ROL', 'tab_roles', 'rol');
            $crud->display_as('ID_USUARIO', 'USUARIO');
             $crud->set_relation('ID_USUARIO', 'tab_usuarios', 'nombre_usuario');
            $crud->set_subject('Usuarios');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Asignación Rol-Usuario";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function users() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('tab_usuarios');
            $crud->display_as('ID_PERSONA', 'PERSONA');
            $crud->set_relation('ID_PERSONA', 'tab_personas', '{cedula} {nombres}  {apellido_paterno} {apellido_materno} ');
            $crud->set_subject('Usuarios');
             $this->form_validation->set_rules('nombre_usuario', 'nombre_usuario', 'required');
            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Usuarios";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function usuarios() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_table('admin_usuarios');
            $crud->set_subject('Usuarios');

            //las columnas que aparecerán en la lista
            $crud->columns('NOMBRES', 'APELLIDOS', 'CORREO_ELECTRONICO', 'NOMBRE_USUARIO', 'ID_ROL', 'ESTADO', 'FOTOGRAFIA');

            //los campos obligatorios
            $crud->required_fields('NOMBRES', 'APELLIDOS', 'CORREO_ELECTRONICO', 'TELEFONO', 'NOMBRE_USUARIO', 'CLAVE', 'ESTADO', 'ID_ROL');

            //para ocultar clave y encriptar
            $crud->change_field_type('CLAVE', 'password');
            $crud->callback_edit_field('CLAVE', array($this, 'set_password_input_to_empty'));
            $crud->callback_add_field('CLAVE', array($this, 'set_password_input_to_empty'));
            $crud->callback_before_update(array($this, 'encrypt_password_callback'));

            //creando un combo box de datos (ESTÁTICOS)
            $crud->field_type('ESTADO', 'dropdown', array('AC' => 'Activo', 'PA' => 'Pasivo'));

            //creando un combo box de datos relacionados con otra tabla (DINÁMICOS)
            $crud->display_as('ID_ROL', 'ROL');
            $crud->set_relation('ID_ROL', 'tab_roles', 'DESCRIPCION');

            //cargando archivos
            $crud->set_field_upload('FOTOGRAFIA', 'assets/uploads/files', 'jpg|JPG');

            //validaciones - Validar tipo de datos
            $crud->set_rules('TELEFONO', 'TELÉFONO', 'integer');

            //Validaciones - validaciones personalizadas (unico, requerido y formato correcto)
            //$crud->set_rules('CORREO_ELECTRONICO', 'CORREO ELECTRÓNICO', 'trim|required|is_unique[admin_usuarios.CORREO_ELECTRONICO]|valid_email');
            $crud->set_rules('CORREO_ELECTRONICO', 'CORREO ELECTRÓNICO', 'valid_email|required');

            //validaciones - Valores únicos
            $crud->unique_fields('NOMBRE_USUARIO', 'CORREO_ELECTRONICO');

            $output = $crud->render();
            $datos = (array) $output;
            $datos['TITULO_PAGINA'] = "Administrar Usuarios";
            $this->load->view('template_grocery.php', $datos);
        } catch (Exception $e) {
            //show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            echo $e->getMessage() . ' --- ' . $e->getTraceAsString();
        }
    }

    function encrypt_password_callback($post_array, $primary_key) {
        $this->load->library('encrypt');
        if (!empty($post_array['CLAVE'])) {
            //$key = 'super-secret-key';
            //$post_array['CLAVE'] = $this->encrypt->encode($post_array['CLAVE'], $key);
            $post_array['CLAVE'] = md5($post_array['CLAVE']);
        } else {
            unset($post_array['CLAVE']);
        }
        return $post_array;
    }

    function set_password_input_to_empty() {
        return "<input type='password' name='CLAVE' class='form-control' value='' />";
    }

}
