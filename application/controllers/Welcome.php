<?php
Class Welcome extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/api_catatan/";
    }
    
    function index(){
        if ($this->session->login == true) {
            $data['id_user'] = $this->session->id;
            $data['username'] = $this->session->username;
            $data['password'] = $this->session->password;
            $data['result'] = json_decode($this->curl->simple_post($this->API."catatan/ambil", $data, array(CURLOPT_BUFFERSIZE => 10))); 
            $this->load->view('home/main', $data);
        } else {
            $this->load->view('login/main');
        }
    }
    
    function aksi_login(){
        $data = array(
            'username'      =>  $this->input->post('username'),
            'password'=>  hash("sha512",$this->input->post('password')));

        $result = json_decode($this->curl->simple_post($this->API."login", $data, array(CURLOPT_BUFFERSIZE => 10))); 

        if ($result == null) {
            redirect(base_url());
        } else {
            $data_user['id'] = $result->id;
            $data_user['username'] = $result->username;
            $data_user['password'] = $result->password;
            $data_user['nama'] = $result->nama;
            $data_user['level'] = $result->level;
            $data_user['login'] = true;
            $this->session->set_userdata($data_user);

            redirect(base_url());
        }
    }

}