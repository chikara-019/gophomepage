<?php

function sample(){

    $path = VIEW_DIR.SPR."sample.php";
    $db = new GopDb();
    $data = $db->getTopics('id', 0, 4);
    $v['data'] = $data;
    return getView($path, $v);

}

