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

    foreach ($business as $kk => $vv){
        echo $vv['name'];
            foreach($vv as $k => $v){
                if($k  == "content"){
                    foreach($v as $d) {
                        echo $d['content'];

                    }
                }
            echo     "<br/>";
            }

    }
