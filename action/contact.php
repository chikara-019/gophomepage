<?php

function contact_action() {
    $path = VIEW_DIR.SPR."contact.php";
    $v = [];
    
   if($_SERVER["REQUEST_METHOD"] == "POST") { 
       $veri =  new ContactVeridata($_POST['contact']);
       $v = array_map('htmlspecialchars', $_POST['contact']);

       if($veri->veridata()->isError()) {
           $v['error'] = $veri->getErrorMessage();
           return getView($path, $v);
       }

       $db = new GopDb();
       $db->saveContact($_POST["contact"]);
       mail('info@g-o-p.jp','ホームページ問い合わせ',var_export($_POST,true),'FROM:hossy@g-o-p.jp');
       header('Location: /contact?s=1'); 


    }


    if(isset($_GET['s'])){
       $v["sucsess"] = '問い合わせが完了しました。<br/>返信には数日頂くことが御座います。';
    }

    $db = new GopDb();
    $data = $db->getCompany();
    $v['cmp'] = $data;


    return getView($path, $v);

}
