<?php

function company_action(){

    $path = VIEW_DIR.SPR."company.php";
    $db = new GopDb();
    $data = $db->getTopics('id', 0, 4);
    $v['data'] = $data;
    return getView($path, $v);

}
