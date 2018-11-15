<?php

class Products extends CI_Controller{
    function index(){
        $this->load->model("ProductsModel");
        $data['wszystkie'] = $this->ProductsModel->displayProducts();
        $data['link'] = "<a href='user'>Main page</a>";
        $this->load->view("ProductsView", $data);
    }
}
