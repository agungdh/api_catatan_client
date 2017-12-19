<?php
Class Catatan extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/api_catatan/";
    }
    
    function index(){
        redirect(base_url());
    }

    function tambah(){
        $this->load->view('catatan/tambah');
    }

    function ubah($id){
        $data['id'] = $id;
        $data['username'] = $this->session->username;
        $data['password'] = $this->session->password;
        $data['catatan'] = json_decode($this->curl->simple_post($this->API."catatan/ambil", $data, array(CURLOPT_BUFFERSIZE => 10))); 

        $this->load->view('catatan/ubah', $data);
    }

    function aksi_tambah(){
        $data['username'] = $this->session->username;
        $data['password'] = $this->session->password;
        $data['catatan'] = $this->input->post("catatan");
        $data['status'] = $this->input->post("status");

        $this->curl->simple_post($this->API."catatan/tambah", $data, array(CURLOPT_BUFFERSIZE => 10)); 

        redirect(base_url());
    }
    
    function aksi_ubah(){
        $data['username'] = $this->session->username;
        $data['password'] = $this->session->password;
        $data['id'] = $this->input->post("id");
        $data['catatan'] = $this->input->post("catatan");
        $data['status'] = $this->input->post("status");

        $this->curl->simple_post($this->API."catatan/ubah", $data, array(CURLOPT_BUFFERSIZE => 10)); 

        redirect(base_url());
    }
    
    function hapus($id){
        $data['id'] = $id;
        $data['username'] = $this->session->username;
        $data['password'] = $this->session->password;

        $this->curl->simple_post($this->API."catatan/hapus", $data, array(CURLOPT_BUFFERSIZE => 10)); 

        redirect(base_url());
    }
    
}