<?php

class Contacte extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->model('catroute_model');
        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->library('email');
    }

    public function index() {
        if ($this->ion_auth->logged_in()) {
            if (!$this->ion_auth->is_admin()) {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar-logat-user');
                $this->load->view('web-logat-user-contacte');
                $this->load->view('templates/footer');
            } else {
                redirect('CatRoute/index');
            }
        } else {
            redirect('CatRoute/index');
        }
    }

    public function enviar() {

        if ($this->ion_auth->logged_in()) {
            if ($this->input->post()) {
                // BD
                $nom = $this->input->post('nom');
                $cognom = $this->input->post('cognom');
                $email = $this->input->post('email');
                $provincia = $this->input->post('provincia');
                $consulta = $this->input->post('consulta');
                
                $this->catroute_model->insertar_coonsulta($nom, $cognom, $email, $provincia, $consulta);
                
                $subject = 'CatRoute - Contacte';
                $body = 'Nom i Cognom: '.$nom.' '.$cognom.'\r\n'.
                        'Email: '.$email.'\r\n'.
                        'Provincia: '.$provincia.'\r\n'.
                        'Consulta: '.$consulta.'\r\n';
                
                $this->email->from('catroutecalvis@gmail.com');
                $this->email->to('catroutecalvis@gmail.com');
                $this->email->subject($subject);
                $this->email->message($body);
                $this->email->send();

                redirect('Contacte/index');
            } else {
                redirect('CatRoute/index');
            }
        } else {
            redirect('CatRoute/index');
        }
    }

}


