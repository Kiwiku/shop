<?php

class ProductsModel extends CI_Model{
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
    public function displayProducts(){
        $query = $this->db->query("SELECT * FROM product");
        $table = array();
        foreach($query->result() as $row){
            $table[] = $row;
        }
        return $table;
    }
}
