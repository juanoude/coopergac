<?php
class Multimidia_model extends CI_Model{

  public function salvarERetornarId($metadados){
    $this->db->insert('galeria', $metadados);
    return $this->db->insert_id();
  }

  public function listar(){
    $query = $this->db->get("galeria");
    return $query->result_array();
  }

  public function buscar($id){
    $query = $this->db->get_where("galeria", array('id' => $id));
    return $query->row_array();
  }

  public function deletar($id){
    $this->db->where('id', $id);
    $this->db->delete('galeria');
  }
}
