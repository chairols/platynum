<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banners_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_where($tabla, $where) {
        $this->db->select('*');
        $this->db->from($tabla);
        $this->db->where($where);
        
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function gets($tabla) {
        $this->db->select("*");
        $this->db->from($tabla);
        $this->db->order_by('posicion');
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function set($tabla, $datos) {
        $this->db->insert($tabla, $datos);
        return $this->db->affected_rows();
    }
    
    public function delete($tabla, $where) {
        $this->db->delete($tabla, $where);
        
        return $this->db->affected_rows();
    }
    
    public function update($tabla, $datos, $where) {
        $this->db->update($tabla, $datos, $where);
        return $this->db->affected_rows();
    }
}
?>