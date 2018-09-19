<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     *  Modelos/listar
     */
    public function gets_where($where) {
        $this->db->select('*');
        $this->db->from('modelos');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function gets_where_limit($where, $per_page, $pagina) {
        $this->db->select("*");
        $this->db->from('modelos');
        $this->db->join('barrios', 'modelos.barrio = barrios.id');
        $this->db->where($where);
        $this->db->limit($per_page, $pagina);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_count_where($where) {
        $this->db->select('count(*) as cantidad');
        $this->db->from('modelos');
        $this->db->join('barrios', 'modelos.barrio = barrios.id');
        $this->db->where($where);
        
        $query = $this->db->get();
        return $query->row_array();
    }
}

?>