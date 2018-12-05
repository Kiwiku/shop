<?php

class AdminController extends CI_Controller{
    public function loadAdd(){
        $this->load->model("AdminModel");
        $data['category'] = $this->AdminModel->getData();
        $this->load->view("productForm", $data);
    }
    public function addArticle(){
        $this->load->helper('url');
        $this->load->model("AdminModel");
        $this->AdminModel->addArticle($this->input->post());
    }
}
