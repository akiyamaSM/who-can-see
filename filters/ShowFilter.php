<?php
require_once 'FilterInterface.php';
require_once 'Filter.php';
require_once '/../RoleManager.php';

class ShowFilter extends Filter implements  FilterInterface
{
    /**
     * Show the content
     *
     * @param $content
     * @return null|string
     */
    public function apply($content)
    {
        foreach($this->affected as $affected){
            if($affected === 'visitor'){
                if(! is_user_logged_in()){
                    return $content;
                }
            }else if(current_user_can( $affected )){
                return $content;
            }
        }
        return null;
    }
}