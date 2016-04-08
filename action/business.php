<?php 

function business_action(){

    $path = VIEW_DIR.SPR."business.php";
    $db = new GopDb();
    $data = $db->getTopics('id', 0, 4);
    $v['data'] = $data;
    return getView($path, $v);

}
