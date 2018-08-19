<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session'
        ));
        $this->load->model(array(
            'modelos_model'
        ));
        
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
    }
    
    public function listar() {
        $data['session'] = $this->session->all_userdata();
        
        $data['modelos'] = $this->modelos_model->gets();
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('modelos/listar');
        $this->load->view('layout/footer');
    }
}
?>