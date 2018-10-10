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
        $this->db->select('*, CONVERT(CAST(CONVERT(nombre using latin1) as BINARY) USING utf8) as nombre_formateado');
        $this->db->from('modelos');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function gets_where_limit($where, $per_page, $pagina) {
        $this->db->select('*, CONVERT(CAST(CONVERT(nombre using latin1) as BINARY) USING utf8) as nombre_formateado');
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
    
    public function get_where($where) {
        $this->db->select('modelos.*, CONVERT(CAST(CONVERT(nombre using latin1) as BINARY) USING utf8) as nombre_formateado, CONVERT(CAST(CONVERT(idiomas using latin1) as BINARY) USING utf8) as idiomas_formateado, CONVERT(CAST(CONVERT(viaja_donde using latin1) as BINARY) USING utf8) as viaja_donde_formateado, barrios.value as barrio_nombre, ciudades.value as ciudad_nombre, paises.value as pais_nombre');
        $this->db->from('modelos');
        $this->db->join('barrios', 'modelos.barrio = barrios.id');
        $this->db->join('ciudades', 'modelos.ciudad = ciudades.id');
        $this->db->join('paises', 'modelos.pais = paises.id');
        $this->db->where($where);
        
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function set($datos) {
        $this->db->insert('modelos', $datos);
        return $this->db->insert_id();
    }
    
    public function update($datos, $where) {
        $this->db->update('modelos', $datos, $where);
    }
}

?>