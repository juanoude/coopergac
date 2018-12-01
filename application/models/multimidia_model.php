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

    public function atualizar($id, $nome, $descricao, $data){
      $this->db->set('nome', $nome);
      $this->db->set('descricao', $descricao);
      $this->db->set('data', $data);
      $this->db->where('id', $id);
      $this->db->update('galeria');
    }

    public function listarCapa(){
      $this->db->order_by('id', 'DESC');
      $this->db->limit(3);
      $query = $this->db->get('galeria');
      return $query->result_array();
    }
  }
