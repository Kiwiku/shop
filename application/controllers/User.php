<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    function index(){
        echo "<a href='./index.php/user/loadLogin'>Login</a> <br>";
        echo "<a href='./index.php/user/loadRegister'>register</a>";
    }
    function loadRegister(){
        $this->load->view("registerform");
    }
    function register(){
        $this->load->model("Model");
        $this->Model->register($this->input->post());
    }
    function loadLogin(){
        $this->load->view("loginform");
    }
    function login(){
        $this->load->library("session");
        $this->load->model("Model");
        $post = $this->input->post();
        $data = $this->Model->loadData($post);
        if($data->num_rows()==1){
            $username = $post['login'];
            $_SESSION['login'] = $username;
            $this->index();
        }
    }
}
