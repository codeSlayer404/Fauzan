<?php
  class Siswa_model extends CI_Model{
    function getAllData(){
      $query = $this->db->get("siswa");
      return $query;
    }
  }
 ?>
