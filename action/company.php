<?php

function company_action(){

    $path = VIEW_DIR.SPR."company.php";
    $db = new GopDb();
    $data = $db->getCompany();
    $v['data'] = $data;
    return getView($path,$data);



}
