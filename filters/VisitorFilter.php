<?php
require_once 'Filter.php';
require_once '/../RoleManager.php';

class VisitorFilter  implements  Filter
{
    private $operation;

    public function  __construct($operation){
        $this->operation = $operation;
    }

    public function apply($content)
    {
        // Visitors cant see it
        if($this->operation == RoleManager::TYPE_EXCEPT){
            if(is_user_logged_in()){
                return $content;
            }
        }

        // only visitor can see
        if($this->operation == RoleManager::TYPE_ONLY){
            if(! is_user_logged_in()){
                return $content;
            }
        }

        return ;
    }
}