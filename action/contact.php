<?php 

function contact_action(){

    $path = VIEW_DIR.SPR."contact.php";
    $db = new GopDb();
    $data = $db->getTopics('id', 0, 4);
    $v['data'] = $data;
    return getView($path, $v);

}


