<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FMWork\Models;

/**
 * Description of Model
 *
 * @author fabio
 */
class Model {
    private $table = 'table_name';
    
    public $db;
    
    public function __construct()
    {
        $class = explode('\\', get_called_class());
        $daoName = "\\Dao\\" . end($class) . "DAO";
        
        try {
            $this->db = new $daoName;
        } catch (\Exception $e) {
            throw new Exception("Called DAO Class not exists: " . $daoName);
        }
    }
    
    protected function fill($data = [])
    {
        foreach($data as $property => $value) {
            //$method = "get" . ucfirst($property);
            try {
            if(property_exists($this, $method)) {
                $this->{$method} = $value;
            }
            } catch (\Exception $e) {
                echo $e->getMessages();
                die();
            }
        }
    }
    
}
