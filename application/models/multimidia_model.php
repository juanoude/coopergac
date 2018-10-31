<?php
class Multimidia_model extends CI_Model{

  public function salvarERetornarId($metadados){
    $this->db->insert('galeria', $metadados);
    return $this->db->insert_id();
  }

  public function listar(){
    $query = $this->db->get('galeria');
    return $query->result_array();
  }
}
