<?php

class YoutubeCliant{
    
    public $con = null;
    public $response;

    function __construct(){

        if($this->con == null){

            try{
                //$this->con = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
                $dsn=$dsn = 'mysql:dbname=gop;host=gophomepage_db';
                $user = 'gop';
                $pass = '0000';
                $this->con = new PDO($dsn, $user, $pass);
            }catch(Exception $e){
                die('データベースに接続できませんでした。'.$e->getMessage());
        
            }
        }
    }


    function __destruct(){
        unset($this->con);
    }

    private $channel_list;

    function getChannelid(){
        $sql = "SELECT channel_id FROM id";
        $sth = $this->con->prepare($sql);
        $sth->execute();
        
        //var_dump($sth->fetchAll(PDO::FETCH_ASSOC));
        //exit;
        //$this->channel_list = $sth->fetch(PDO::FETCH_ASSOC);//fetch１回の呼び出して１行ずつfetchall１回の呼び出しで全ての行取得
        //var_dump($this->channel_list);
        //exit;
        //return $this->channel_list;
        return $sth->fetchAll(PDO::FETCH_ASSOC);
        
    }

    function getCurl($channel_id){
        $url = 'https://www.googleapis.com/youtube/v3/search?key='. YOUTUBE_API. '&channelId='. $channel_id. '&part=snippet&order=date&maxResults=1&type=video';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }



    
    function saveVideos($response, $data) {

        foreach($response['items'] as $item){
            $data['video_id'] = $item['id']['videoId'];
            $data['title'] = $item['snippet']['title'];
            $data['channel_title'] = $item['snippet']['channelTitle'];
            $data['published_at'] = date('Y-m-d H:i:s', strtotime($item['snippet']['publishedAt']));
            $data['thumbnail_url'] = $item['snippet']['thumbnails']['medium']['url'];
            $data['description'] = $item['snippet']['description'];

            //ここで定義した意味がなくなってる

            $sql = "INSERT INTO video(channel_name, title, video_id, video_url, description, thumbnail_url, publishedAt) VALUES(:channel_name, :title, :video_id, :video_url, :description, :thumbnail_url, :publishedAt)";
            $sth = $this->con->prepare($sql);
            $sth->execute([
                ':channel_name' => $data['channel_title'],
                ':title' => $data['title'],
                ':video_id' => $data['video_id'],
                'description' => $data['description'],
                'thumbnail_url' =>$data['thumbnail_url'],
                'publishedAt' => $data['published_at'],

            ]);
            /*
            $data['channel_name'] = $channel_title;
            $data['title'] = $title;
            $data['video_id'] = $channel_title;
            $data['description'] = $description;
            $data['thumbnail_url'] = $thumbnail_url;
            $data['publishedAt'] = $published_at;
            */
        }
    }
    
    function getVideos(){
        $sql = "SELECT * FROM video";
        $sth = $this->con->prepare($sql);
        $sth->execute();
        $videos = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $videos;
    }
    

}