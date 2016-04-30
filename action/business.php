<?php

function business_action(){

    $path = VIEW_DIR.SPR."business.php";
    $db = new GopDb();
    $business = $db->getBusiness();
    $data = array();
    foreach ($business as $key => $val) {
        $data[$key]['business'] = $val;
        $data[$key]['content'] = $db->getBusinessContent($val['id']);
    }
    $v['data'] = $data;
    return getView($path, $v);
}
