<?php


class GopDb {

    public $con = null;

    //クラスが呼び出された時に呼ばれる
    function __construct() {

        //thisは自分のクライスを呼ぶときに使う
        if($this->con == null){
            try{
                $this->con = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8',DB_USER, DB_PASS);
            } catch(Exception $e) {
                die('データベースに接続できませんでした。');
            }
        }
    }



    //クラスが破棄された時に呼ばれる
    function __destract() {
        unset($this->con);
    }


    function getcompany($sort="created_at", $offset=0, $limit=7) {
      var_dump($sort);
        $sql = 'select * from company order by :sort limit :offset,:limit';
        $sth = $this->con->prepare($sql);
        $sth->bindParam(':sort',$sort);
        $sth->bindParam(':offset',$offset, PDO::PARAM_INT);
        $sth->bindParam(':limit',$limit, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }



}
