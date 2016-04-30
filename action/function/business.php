<?php

function business_action(){

    $path = VIEW_DIR.SPR."business.php";
    $db = new GopDb();
    $business = $db->getBusiness();
    foreach ($business as $key => $val) {
        $content = $db->getBusinessContent($val['id']);
        $business[$key]['content']= $content;
    }
    $v['data'] = $business;
    return getView($path, $v);
}
