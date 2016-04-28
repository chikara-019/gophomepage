<?php

function business_action(){

    $path = VIEW_DIR.SPR."business.php";
    $db = new GopDb();
    $business = $db->getBusiness();
    $data = array();
    foreach ($business as $key => $val) {
        $data[$kye]['business'] = $val;
        $data[$kye]'content'] = $db->getBusinessContent($val['id']);
    }
   // var_dump($business);

    foreach ($data as $kk => $vv){
        echo $vv['business']['name'];
        foreach($vv['content'] as $d) {
            echo $d['content'];
        }
        echo     "<br/>";
    }

    $v['data'] = $business;
    return getView($path, $v);
}
