<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;
use FMWork\Controllers\Controller;
use Models\Article;

/**
 * Description of Controller
 *
 * @author fabio
 */
class ControllerBase extends Controller {
    
    public function indexAction()
    {
        $article = new Article();
        
        var_dump($article->db->find(2));
    }
}
