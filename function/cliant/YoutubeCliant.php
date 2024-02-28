<?php

class YoutubeCliant{
    
    public $con = null;
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
        $this->channel_list = $sth->fetch(PDO::FETCH_ASSOC);
        //var_dump($this->channel_list);
        //exit;
        return $this->channel_list;
        //return $sth->fetch(PDO::FETCH_ASSOC);
        
    }

    function getCurl($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;       
    }

    function getVideos($channel_list){

        foreach($this->channel_list as $channel_id){
            $url = 'https://www.googleapis.com/youtube/v3/search?key='. YOUTUBE_API. '&channelId='. $channel_id. '&part=snippet&order=date&maxResults=1&type=video';

            $response = $this->getCurl($url);
            $videos = json_decode($response);
            //var_dump($videos);
            //exit;
        }
    }

    public $response;
    
    function saveVideos($data){



        foreach($response['items'] as $item){
            
            $video_id = $item['id']['videoId'];
            $title = $item['snippet']['title'];
            $channel_title = $item['snippet']['channel_Title'];
            $published_at = date('Y-m-d H:i:s', strtotime($item['snippet']['publishedAt']));
            $thumbnail_url = $item['snippet']['thumbnails']['medium']['url'];
            $description = $item['snippet']['description'];
        
            //$sql2 = "INSERT INTO video(id, title, channel_name, video_id description thumbnail_url publishedAt)VALUES(:id, :title, :channel_name, :video_id, :description, :thumbnail_url, :publishedAt)";
            $sql2 = "INSERT INTO videos(video_id, title, channel_title, published_at, thumbnail_url, description) VALUES(:video_id, :title, :channel_title, :published_at, :thumbnail_url, :description)";
            $sth2 = $this->con->prepare($sql2);
            $sth2->execute([
            ':video_id' => $video_id,
            ':title' => $title,
            ':channel_title' => $channel_title,
            ':published_at' => $published_at,
            ':thumbnail_url' => $thumbnail_url,
            ':description' => $description
            ]);
        }

    }
    




}
