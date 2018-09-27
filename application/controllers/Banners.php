<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'session',
            'r_session'
        ));
        
        $session = $this->session->all_userdata();
        $this->r_session->check($session);
    }
    
    public function modelos() {
        $data['session'] = $this->session->all_userdata();
        $data['menu'] = 4;
        
        $this->load->view('layout/header', $data);
        $this->load->view('layout/menu');
        $this->load->view('banners/modelos');
        $this->load->view('layout/footer');
    }
}
?>