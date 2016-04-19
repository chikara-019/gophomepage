<?php

function contact_action(){

    $path = VIEW_DIR.SPR."contact.php";
    $db = new GopDb();
    $data = $db->getContact();
    $v['data'] = $data;
    return getView($path, $v);

}
