<?php
namespace BJ\Controller;
use BJ\Controller\BaseController;
use BJ\Controller\Access;

class UserController extends BaseController {

	function __construct()
	{
		parent::__construct();
	}

	function login()
	{	
        if($this->isAdmin() || $this->takeLogin()){
            header("Location: /");
            return;
        }
        
        $this->smarty->assign('title',"Вход");
		$this->smarty->display("Login.tpl");
	}

	public function takeLogin(){
		
		$res = $this->query("select * from users where login = :login and pwd = :pwd",array(":login"=>$_POST['login'],":pwd"=>$_POST['pwd']));//надеюсь либо экранирует символы

        if(true){
            session_start();
            setcookie("username","user");
        }

        header("Location: /");
	}


}