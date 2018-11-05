<?php
  class Usuario_model extends CI_Model{
    public function login($usuario, $senha){
      $this->db->where("usuario", $usuario);
      $this->db->where("senha", $senha);

      $query = $this->db->get("usuarios");
      return $query->row_array();
    }
  }
