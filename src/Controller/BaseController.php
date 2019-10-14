<?php
namespace BJ\Controller;

use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;
use \Smarty;

class BaseController{

    public $db;
    public $smarty;

    function __construct(){

        $pdo = new PDOConnector(
            DB_HOST, // server
            DB_USER,      // user
            DB_PWD,      // password
            DB_BASE   // database
        );

        $pdoConn = $pdo->connect('utf8', []); // charset, options
        $this->db = new Mysql($pdoConn);
        
        $this->smarty = new Smarty();
        $this->smarty->setCacheDir(SMARTY_CACHE_DIR); 
        $this->smarty->setTemplateDir(SMARTY_TEMPLATE_DIR); 
    }

    public function isAdmin(){
        return isset($_SESSION['id']);
    }

    public function query($sql,$data=[]){
        $data = $this->db->fetchRowMany($sql, $data);
        return $data;
    }

}