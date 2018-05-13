<?php
  class Home extends CI_Controller{
    function __construct(){
      parent::  __construct();
    }
    function index(){
      echo "Happy New Yeard 2018"."<br>";
      $this->load->model("HomeModel");
      $data_array = $this->HomeModel->getData();


      echo "Nama = ".$data_array["nama"]."<br>";
      echo "Kelas = ".$data_array["kelas"]."<br>";
      echo "Website = ".$data_array["website"]."<br>";
    }
  }
 ?>
