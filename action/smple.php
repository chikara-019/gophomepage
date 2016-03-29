<?php

function smple(){
    $path = VIEW_DIR.SPR."smple.php";
    $v['www'] = 'hoge';
    return getView($path, $v);
}

