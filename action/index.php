<?php

function  index_action(){

    $path = VIEW_DIR.SPR."index.php";
    $db = new GopDb();
    $data = $db->getTopics('id', 0, 4);
    $v['data'] = $data;

    return getView($path, $v);
}

