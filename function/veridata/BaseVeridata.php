<?php


class BaseVeridata {
    protected $data = [];
    protected $isError = false;
    protected $errorMessage = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }

    public function isError() {
        return $this->isError;
    }

    public function getErrorMessage(){
        return $this->errorMessage;
    }

    public function veridata() {

        foreach($this->data as $k => $d){
            //エラーの場合は終了
            if($this->isError()) return $this;

            if(method_exists($this, $k)){
                call_user_func([$this,$k], $d);
            } else {
               throw new \Exception('バリデータメソッドが定義されていません。');
            }
        }
        return $this;
    }

    protected  function _setError($key, $message) {
        $this->isError = true;
        $this->errorMessage[$key] = $message;
    }




}
