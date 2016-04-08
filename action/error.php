<?php

function error_action(){

    $path = VIEW_DIR.SPR."error.php";
    return getView($path);

}

