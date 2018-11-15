<?php

class Model extends CI_Model {
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
    
    public function register($data){
        print_r($data);
        $query = "INSERT INTO `user`(`user_id`, `login`, `password`, `address`) VALUES (NULL, '$data[login]', '$data[password]', '$data[address]')";
        print_r($query);
        $this->db->query($query);
    }
    public function loadData($data){
        $query = "SELECT login, address FROM user WHERE login='$data[login]'";
        $data = $this->db->query($query);
        return $data;
    }
}
