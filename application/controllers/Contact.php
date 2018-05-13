<?php
  class Contact extends CI_Controller{
    public function index(){
      $this->load->helper("form");

      $data['content'] = "contact_view";
      $this->load->view("template",$data);
    }
  }
 ?>
