<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(array(
            'pagination'
        ));
        $this->load->model(array(
            'modelos_model'
        ));
    }
    
    public function index() {
        
        $where = array(
            'estado' => 'habilitado'
        );
        
        
        /*
         * inicio paginador
         */
        $total_rows = $this->modelos_model->get_count_where($where);
        $config['reuse_query_string'] = TRUE;
        $config['base_url'] = '/web/index/';
        $config['total_rows'] = $total_rows['cantidad'];
        $config['per_page'] = 12;
        $config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();
        $data['total_rows'] = $total_rows;
        /*
         * fin paginador
         */
        
        
        $data['modelos'] = $this->modelos_model->gets_where($where);
        
        $this->load->view('web/index', $data);
    }
}
?>