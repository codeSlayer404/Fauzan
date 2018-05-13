<?php
  class Coba extends CI_Controller{
    function _contruct(){
      parent:: _contruct();
    }
    function index(){
      echo "Hello Word"."<br>";

      $this->load->model("CobaModel");
      $data_array=$this->CobaModel->getData();

      echo "Nama = ".$data_array['Nama']."<br>";
      echo "Alamat = ".$data_array['Alamat']."<br>";
      echo "Website = ".$data_array['Website']."<br>";
    }
  }

 ?>
