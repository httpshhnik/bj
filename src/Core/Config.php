<?php
namespace BJ\Core;

class Config{
    static function init(){
        //возможно лучше было бы перенести конфиги в обычный безклассовый файл config.php
        define('DB_HOST','localhost');
        define('DB_USER','user');
        define('DB_PWD','123');
        define('DB_BASE','bj');

        define('USER','admin');
        define('PWD','123');

        define('SMARTY_TEMPLATE_DIR',getcwd().'/src/View');
        define('SMARTY_CACHE_DIR',getcwd().'/cache');
    }
}