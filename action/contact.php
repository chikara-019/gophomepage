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

       if(isset($_POST["confim"])){
           $path = VIEW_DIR.SPR."contact_confim.php";
       } elseif($_POST["commit"]) {
           $db = new GopDb();
           $db->saveContact($_POST["contact"]);
           $v["sucsess"] = '問い合わせが完了しました。返信には数日頂くことが御座います。';
       }

    }

    return getView($path, $v);

}
