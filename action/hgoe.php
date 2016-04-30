<?php

function hgoe_action(){

    $path = VIEW_DIR.SPR."business.php";
    $db = new GopDb();
    $business = $db->getBusiness();
    $data = array();
    foreach ($business as $key => $val) {
        $data[$key]['business'] = $val;
        $data[$key]['content'] = $db->getBusinessContent($val['id']);
    }
   // var_dump($business);

    foreach ($data as $kk => $vv){
        echo $vv['business']['name'];
        foreach($vv['content'] as $d) {
            echo $d['content'];
        }
        echo     "<br/>";
    }
    exit;

    $v['data'] = $data;
    return getView($path, $v);
}
