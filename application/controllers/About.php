<?php
  class About extends CI_Controller{
    public function index(){
        $data['alamat'] = '';//terakhir
        $data['content']='about_view';
        $this->load->view('template',$data);
    }
    /*sebelum terakhir*/
    public function alamat($alamat_url = ""){
        $data['alamat'] = $alamat_url;
        $data['content'] ='about_view';
        $this->load->view('template',$data);
    }

  }

 ?>
