<?php

function business_action(){

    $path = VIEW_DIR.SPR."business.php";
    $db = new GopDb();
    $data = $db->getBusiness();
    $v['data'] = $data;
    return getView($path, $v);


}
