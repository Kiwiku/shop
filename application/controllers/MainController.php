<?php

class MainController extends CI_Controller{
    public function index(){
        $this->load->helper("url");
        echo "<a href=".site_url()."/user/loadRegister>Register</a><br>";
        echo "<a href=".site_url()."/user/loadLogin>Login</a><br>";
        echo "<a href=".site_url()."/products>Products</a>";
    }
}
