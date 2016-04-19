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


     function getTopics($sort="created_at", $offset=0, $limit=5) {
        $sql = 'select * from topics order by :sort limit :offset,:limit';
        $sth = $this->con->prepare($sql);
        $sth->bindParam(':sort',$sort);
        $sth->bindParam(':offset',$offset, PDO::PARAM_INT);
        $sth->bindParam(':limit',$limit, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCompany() {
         $sql = 'select * from company limit 1';
         $sth = $this->con->prepare($sql);
         $sth->execute();
         return $sth->fetch(PDO::FETCH_ASSOC);
   }

    function getBusiness($offset=0, $limit=2) {
         $sql = 'select * from business order by :offset,:limit';
         $sth = $this->con->prepare($sql);
         $sth->bindParam(':offset',$offset, PDO::PARAM_INT);
         $sth->bindParam(':limit',$limit, PDO::PARAM_INT);
         $sth->execute();
         return $sth->fetch(PDO::FETCH_ASSOC);
  }

    function getContact() {
         $sql = 'select * from contact  limit 1';
         $sth = $this->con->prepare($sql);
         $sth->execute();
         return $sth->fetch(PDO::FETCH_ASSOC);
   }

    function getBusinessContent($sort="created_at", $offset=0, $limit=2) {
         $sql = 'select * from business_content order by :sort limit :offset,:limit ';
         $sth = $this->con->prepare($sql);
         $sth->bindParam(':sort',$sort);
         $sth->bindParam(':offset',$offset, PDO::PARAM_INT);
         $sth->bindParam(':limit',$limit, PDO::PARAM_INT);
         $sth->execute();
         return $sth->fetch(PDO::FETCH_ASSOC);
  }
}
