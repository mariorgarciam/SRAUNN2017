<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_usuarios');
    }
    
    function Principal(){
        if($this->session->userdata('sesion_activa')){
            $Datos['Titulo'] = 'Sistema de Registro Académico';
            $Datos['Contenido'] = 'frmPrincipal';
            $Datos['Plantilla'] = 'plantillas/v_inicio';
            $this->load->view('estructura/estructura', $Datos);
        }
        else{
            redirect(base_url());
        } 
    }
    
    function acceder(){
        $this->form_validation->set_rules('Usuario', 'Usuario', 'required|trim|alpha_numeric');
        $this->form_validation->set_rules('Clave', 'Clave', 'required|trim|MD5');

        if ($this->form_validation->run() == TRUE){            
            $Usuario = $this->input->post('Usuario');
            $Clave = $this->input->post('Clave');
            $Info = $this->m_usuarios->Validar_Usuario($Usuario, $Clave);
            if($Info){
                $Cookie = array();
                foreach ($Info as $row){
                    $Cookie = array(
                        'Usuario'       => $row->usuario,
                        'Activo'        => $row->activo,
                        'Foto'          => $row->foto,
                        'Usuario_id'    => $row->usuario_id,
                        'username'      => $row->usuario,
                        'Usuario_t'     => $row->usuario_t
                    );
                    $this->session->set_userdata('sesion_activa', $Cookie);
                }
                redirect('Usuarios/Principal');
            }           
        }
        else
        {
            redirect(base_url());
        }
    }
    
    function salir(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

