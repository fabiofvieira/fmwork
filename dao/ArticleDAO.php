<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Dao;
use FMWork\DAO\Dao;
/**
 * Description of DaoArticle
 *
 * @author fabio
 */
class ArticleDAO extends DAO {
    
    public $model = 'Article';
    public $table = 'articles';
    
    public function __construct()
    {
        parent::__construct();
    }
    
}
