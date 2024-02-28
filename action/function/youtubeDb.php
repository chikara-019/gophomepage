<?php

class YoutubeDb{

    public $con = null;

    function __construct(){

        if($this->con == null){
            try{
                $this->con = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME2.'; charset=utf8', DB_USER, DB_PASS);
            }catch(Exception $e){
                die('データベースに接続できませんでした。'.$e->getMessage());
            }
        }
    }

    function __destruct(){
        unset($this->con);
    }


    function getYoutube(){
        
    }
}