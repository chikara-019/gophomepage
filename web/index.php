<?php

	 require_once("../init/init.php");

     $action= $_GET["action"];
     $file_path = ACTION_DIR."/{$action}.php";
     if(is_file($file_path)) {
         //ファイルが存在すれば何もしない

     } elseif($action == '') {
         //ファイルが存在しない＆actionに何も入っていない場合は
         //indexをアクションにする
         $action = 'index';
         $file_path = ACTION_DIR."/{$action}.php";

     } else {
         //ファイルが存在しないでactionが空でもない場合はerrorページ
         $action = 'error';
         $file_path = ACTION_DIR."/{$action}.php";

     }
     include($file_path);
     $action_function = $action."_action";
     echo $action_function();

	
