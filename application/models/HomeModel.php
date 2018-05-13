<?php
  class HomeModel extends CI_Model{
      function getData(){
        $data = array(
          "nama" => "Alin Al Fauzi",
          "kelas" => "XI Rekayasa Perangkat Lunak 1",
          "website" => "youtube.com"
        );
        return $data;
      }
  }

 ?>
