<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FMWork\Interfaces;

use FMWork\Models\Model;
/**
 * Description of ActiveRecord
 *
 * @author fabio
 */
interface ActiveRecord {

    public function find($conditions = []);
    
    public function findFirst($conditions = []);
    
    public function insert(Model $model, $fields = []);
    
    public function update(Model $model, $fields = []);
    
    public function delete(Model $model, $fields = []);
    
    public function findList($conditions = []);
    
}
