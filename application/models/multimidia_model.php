<?php
class Multimidia_model extends CI_Model{
  public function salvarERetornarId($metadados){
    $this->db->insert('fotos', $metadados);
    return $this->db->insert_id();
  }
}
