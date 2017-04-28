<?php



class Helper{

    public function url($url)
    {
        echo $_SERVER['DOCUMENT_ROOT'].'/CRUD/'.$url;
    }

    public function  requireBasePath($url)
    {
        require $_SERVER['DOCUMENT_ROOT'].'/CRUD/'.$url;
    }

}