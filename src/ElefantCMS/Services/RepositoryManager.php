<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ElefantCMS\Services;

/**
 * Description of RepositoryManager
 *
 * @author radek
 */
class RepositoryManager 
{
    private $_repository_path = "";
    
    function __construct($repository_path) 
    {
        if (!file_exists($repository_path))
        {
            throw new \Exception("Invalid repository path: '" . $repository_path . "'");
        }
        else
        {
            $this->_repository_path = $repository_path;
        }
    }
    
}
