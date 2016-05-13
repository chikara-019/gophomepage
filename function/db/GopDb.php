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


     function getTopics($sort="created_at") {
        $sql = 'select * from topics order by '.$sort ;
        $sth = $this->con->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCompany($sort="created_at"){
         $sql = 'select * from company order by :sort';
         $sth = $this->con->prepare($sql);
         $sth->bindParam(':sort',$sort);
         $sth->execute();
         return $sth->fetch(PDO::FETCH_ASSOC);
   }

    function getBusiness() {
       $sql = 'select * from business ';
       $sth = $this->con->prepare($sql);
       $sth->execute();
       return $sth->fetchAll(PDO::FETCH_ASSOC);
   }


   function getBusinessContent($business_id) {
    $sql = 'select * from business_content  where business_id=:business_id';
    $sth = $this->con->prepare($sql);
    $sth->bindParam(':business_id',$business_id);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_ASSOC);
  }

    function saveContact($data) {
       $sql = 'INSERT INTO `contact`(`title`, `text`, `fromname`, `mail_address`, `created_at`) VALUES (:title,:body,:name,:email,:date)';
       $sth = $this->con->prepare($sql);
       $sth->bindParam(':title',$data['title']);
       $sth->bindParam(':body',$data['body']);
       $sth->bindParam(':name',$data['name']);
       $sth->bindParam(':email',$data['email']);
       $sth->bindParam(':date',date('Y-m-d H:i:s'));
       return $sth->execute();
   }
}
