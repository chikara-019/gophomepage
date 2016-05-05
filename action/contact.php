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

       if(isset($_POST["confim"])) {
           $path = VIEW_DIR.SPR."contact_confim.php";

       } elseif(isset($_POST["commit"])) {

           $_SESSION["sucsess"] = 

           $db = new GopDb();
           $db->saveContact($_POST["contact"]);
           header('Location: /contact?s=1'); 
       }

    }


    if(isset($_GET['s'])){
       $v["sucsess"] = '問い合わせが完了しました。<br/>返信には数日頂くことが御座います。';
    }


    return getView($path, $v);

}
