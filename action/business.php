<?php

function business_action(){

    $path = VIEW_DIR.SPR."business.php";
    $db = new GopDb();
    $data = $db->getBusiness('id',2);
    $data = $db->getBusinessContent();
    var_dump($data);
    $v['data'] = $data;
    return getView($path, $v);



}
