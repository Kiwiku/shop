<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    function index(){
        $this->load->helper("url");
        echo "<a href=".site_url()."/user/loadRegister>Register</a><br>";
        echo "<a href=".site_url()."/user/loadLogin>Login</a><br>";
        echo "<a href=".site_url()."/products>Products</a>";
    }
    function loadRegister(){
        $this->load->view("registerform");
    }
    function register(){
        $this->load->model("UserModel");
        $this->UserModel->register($this->input->post());
    }
    function loadLogin(){
        $this->load->view("loginform");
    }
    function login(){
        $this->load->model("UserModel");
        $post = $this->input->post();
        $data = $this->UserModel->loadData($post);
        if($data->num_rows()==1){
            $username = $post['login'];
            $_SESSION['login'] = $username;
            $this->index();
        }
    }
}
