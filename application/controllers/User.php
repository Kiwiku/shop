<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        session_start();
    }
    function index(){
        $this->load->helper("url");
        echo "<a href=".site_url()."/user/loadRegister>Register</a><br>";
        echo "<a href=".site_url()."/user/loadLogin>Login</a><br>";
        if(isset($_SESSION['login'])){
            echo "<a href=".site_url()."/user/logout>logout</a><br>";
        }
        echo "<a href=".site_url()."/products>Products</a><br>";
        if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1){
            echo "<a href=".site_url()."/AdminController/loadAdd>Dodaj produkt</a><br>";
        }
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
            if($username='admin'){
                $_SESSION['isAdmin'] = true;
            }
            else{
                $_SESSION['isAdmin'] = false;
            }
            $_SESSION['login'] = $username;
            $this->index();
        }
    }
    function logout(){
        session_destroy();
        $this->index();
    }
}
