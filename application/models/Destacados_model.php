<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Destacados_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function gets() {
        $this->db->select('*');
        $this->db->from('grilla_platynum_destacados');
        $this->db->order_by('posicion');

        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function truncate() {
        $this->db->truncate('grilla_platynum_destacados');
    }
    
    public function set($datos) {
        $this->db->insert('grilla_platynum_destacados', $datos);
        return $this->db->insert_id();
    }
    
    public function get_where($where) {
        $this->db->select('*');
        $this->db->from('grilla_platynum_destacados');
        $this->db->where($where);
        
        $query = $this->db->get();
        return $query->row_array();
    }
}

?>