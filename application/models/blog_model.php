<?php
  class Blog_model extends CI_Model{
    public function salvarERetornarId($dados){
      $this->db->insert('posts', $dados);
      return $this->db->insert_id();
    }

    public function deletar($id){
      $this->db->where('id', $id);
      $this->db->delete('posts');
    }

    public function listar(){
      $query = $this->db->get("posts");
      return $query->result_array();
    }

    public function listarCapa(){
      $this->db->order_by('id', 'DESC');
      $this->db->limit(7);
      $query = $this->db->get('posts');
      return $query->result_array();
    }

    public function buscar($id){
      $this->db->where('id', $id);
      $query = $this->db->get('posts');
      return $query->row_array();
    }

    public function atualizar($id, $titulo, $texto){
      $this->db->set('titulo', $titulo);
      $this->db->set('texto', $texto);
      $this->db->where('id', $id);
      $this->db->update('posts');
    }

  }
