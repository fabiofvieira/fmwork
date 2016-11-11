<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FMWork\Configs;

/**
 * Description of DataBase
 *
 * @author fabio
 */
class DataBase {
    private static $host;
    private static $user;
    private static $password;
    private static $database;
    private static $connector;
    private static $instance;

    public static function initialize($configs = [])
    {
        try {
            foreach($configs as $field => $value)
                self::${$field} = $value;
            
            switch($configs['connector']):
                case 'PDO':
                    self::$instance = new \PDO(sprintf('mysql:host=%s;dbname=%s', self::$host, self::$database), self::$user, self::$password);
                    break;
            endswitch;
        } catch (\Exception $e) {
            echo $e->getMessage();
            die;
        }
    }
    
    public static function instance()
    {
        return self::$instance;
    }
    
}
