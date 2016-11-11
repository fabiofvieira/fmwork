<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FMWork\Dao;
use FMWork\Interfaces\ActiveRecord;
use FMWork\Models\Model, FMWork\Configs\DataBase;
/**
 * Description of DAO
 *
 * @author fabio
 */
abstract class DAO implements ActiveRecord {
    
    protected $db;
    protected $model;
    protected $attributes;
    protected $table;
    
    public function __construct()
    {
        $this->model        = "\\Models\\" . str_replace(['Dao\\', 'DAO'], '', get_called_class());
        $this->db           = Database::instance();
        $this->attributes   = get_class_vars($this->model);
        $this->methods      = get_class_methods($this->model);
    }
    
    public function find($conditions = [])
    {
        try {
            $p = $this->db->prepare("SELECT * FROM {$this->table}");
            //$p->bindParam(':table', $this->table);
            $p->execute();
        } catch (Exception $ex) {
            echo $ex->getMessage();
            die;
        }
        
        $results = [];
        while($result = $p->fetchObject($this->model)){
            $results[] = $result;
        }
        return $results;
    }
    
    public function findFirst($conditions = [])
    {
        
    }
    
    public function insert(Model $model, $fields = [])
    {
        
    }
    
    public function update(Model $model, $fields = [])
    {
        
    }
    
    public function delete(Model $model, $fields = [])
    {
        
    }
    
    public function findList($conditions = [])
    {
        
    }
    
}