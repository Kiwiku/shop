<?php

class AdminModel extends CI_Model{
    public function __construct() {
        parent::__construct();
        $config['hostname'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = '';
        $config['database'] = 'shop';
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = '';
        $config['char_set'] = 'utf8';
        $config['dbcollat'] = 'utf8_general_ci';
        $this->load->database($config);
    }
    public function getData(){
        $query = $this->db->query("SELECT category_id FROM category");
        $table = array();
        foreach($query->result() as $row){
            $table[] = $row;
        }
        return $table;
    }
    public function addArticle($data){
        $this->db->query("INSERT INTO `product`(`product_id`, `name`, `category_id`, `amount_in_magazine`) VALUES (NULL, '$data[productName]', '$data[category]', '$data[amount]')");
    }
}
