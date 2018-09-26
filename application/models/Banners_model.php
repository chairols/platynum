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
}
?>