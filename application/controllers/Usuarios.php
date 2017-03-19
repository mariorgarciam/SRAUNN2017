<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_usuarios');
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
                    'usuario'   => $row->usuario,
                    'Activo'    => $row->activo,
                    'Foto'      => $row->foto,
                    'Usuario_id'        => $row->usuario_id,
                    'username'  => $row->usuario,
                    'Usuario_t' => $row->usuario_t);
                    $this->session->set_userdata('sesion_activa');
                }
                $this->load->view('frmPrincipal');
            }           
        }
        else
        {
            redirect(base_url());
        }
    }
}

