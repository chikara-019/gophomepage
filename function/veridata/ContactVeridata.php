<?php

class ContactVeridata extends BaseVeridata
{
    public $email_max = 100;
    public $title_max = 80;
    public $title_min = 5;
    public $body_max = 1000;
    public $body_min = 30;
    public $name_max = 30;
    public $name_min = 2;

    public function __construct($data) {
        parent::__construct($data);
    }

    public function email($d) {
        $k = 'email';
        //文字数
        if(mb_strlen($d) > $this->email_max){
            $this->_setError($k, 
                sprintf('文字数が上限の%s超えています。', $this->email_max) 
            );
            return;
        }   
        //メールアドレス形式チェック
        if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $d)) {
            $this->_setError($k, 
                'メールアドレスの形式が正しくありません。'
            );
            return;
        } 
    }

    public function name($d) {
        $k = 'title';
        //文字数
        if(mb_strlen($d) > $this->name_max){
            $this->_setError($k, 
                sprintf('文字数が上限の%s超えています。', $this->name_max) 
            );
            return;
        }   

        if(mb_strlen($d) < $this->name_min){
            $this->_setError($k, 
                sprintf('文字数がが足りません最低%s超文字以上で入力ください。', $this->name_min) 
            );
            return;
        }   

        return;
    } 

    public function title($d) {
        $k = 'title';
        //文字数
        if(mb_strlen($d) > $this->title_max){
            $this->_setError($k, 
                sprintf('文字数が上限の%s超えています。', $this->title_max) 
            );
            return;
        }   

        if(mb_strlen($d) < $this->title_min){
            $this->_setError($k, 
                sprintf('文字数がが足りません最低%s超文字以上で入力ください。', $this->title_min) 
            );
            return;
        }   

        return;
    } 


    public function body($d) {

        $k = 'body';
        //文字数
        if(mb_strlen($d) > $this->body_max){
            $this->_setError($k, 
                sprintf('文字数が上限の%s超えています。', $this->body_max) 
            );
            return;
        }   

        if(mb_strlen($d) < $this->body_min){
            $this->_setError($k, 
                sprintf('文字数がが足りません最低%s超文字以上で入力ください。', $this->body_min) 
            );
            return;
        }   

        return;
    } 






} 
