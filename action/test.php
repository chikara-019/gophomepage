<?php

function test_action(){
    $path = VIEW_DIR.SPR."test.php";
    $db = new YoutubeCliant();
    $data = $db->getChannelid();
    $v['data'] = $data;//youtube_id
    //var_dump($v['data']);
    //exit;


    $response = [];

    foreach($data as $channel){
        $response = $db->getCurl($channel['channel_id']);
        $responses[] = $response;
    }
    $v['responses'] = $responses;

    $db->saveVideos($response, $data);
    $videos = $db->getVideo();


    return getView($path, $v);
    /*
    $data2 = $db->getCurl();
    $v['response'] = $data2;
    var_dump($v['response']);
    exit;
    $v['channel_list'] = $db->getVideos($channel_list);
    //var_dump($v['channel_list']);
    //exit;
    $db->saveVideos($data, $v);
    $v['videos'] = $data;
    //var_dump($v['videos']);
    //exit;
    return getView($path, $v);
    */
}
//関数が値を返す場合、その戻り値を指定しないとvoidを返す
?>

