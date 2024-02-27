<?php

function test_action(){
    $path = VIEW_DIR.SPR."test.php";

    return getView($path);
}