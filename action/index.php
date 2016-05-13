<?php

function  index_action(){

    $path = VIEW_DIR.SPR."index.php";
    $db = new GopDb();
    $data = $db->getTopics('created_at DESC');
    $v['data'] = $data;
    return getView($path, $v);


}
