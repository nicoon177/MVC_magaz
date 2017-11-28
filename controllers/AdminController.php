<?php

class AdminController extends AdminBase
{
    
    public function ActionIndex()
    {
        self::checkAdmin();
        
        require_once (ROOT . '/views/admin/index.php');
        return true;
    }
    
}