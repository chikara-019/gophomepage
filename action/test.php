<?php

function test_action(){
    $path = VIEW_DIR.SPR."test.php";
    $db = new YoutubeCliant();
    $data = $db->getChannelid();
    $v['data'] = $data;
    $channel_list = [];
    $db->getVideos($channel_list);
    $db->saveVideos($data);
    $v['videos'] = $data;
    return getView($path, $v);

}

//関数が値を返す場合、その戻り値を指定しないとvoidを返す
