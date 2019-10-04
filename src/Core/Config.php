<?php
namespace BJ\Core;

use \Smarty;

class Config{
    static function init(){
        //возможно лучше было бы перенести конфиги в обычный безклассовый файл config.php
        define('db_host','localhost');
        define('db_user','user');
        define('db_pwd','123');

        define('user','admin');
        define('pwd','123');

        $smarty = new Smarty();
        $smarty->setTemplateDir('src/view'); 
    }
}