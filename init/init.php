<?php

	//ここでDBの接続情報を設定する
   define('DB_HOST','localhost');
   define('DB_NAME','gop');
   define('DB_USER','gop');
   define('DB_PASS','0000');

   define("SPR",DIRECTORY_SEPARATOR);
   
   define("ROOT_DIR", realpath(__DIR__."/../"));   
   define("ACTION_DIR", ROOT_DIR.SPR."action");
   define("FUNCTION_DIR", ROOT_DIR.SPR."function");
   define("VIEW_DIR", ROOT_DIR.SPR."view");


   include(FUNCTION_DIR.SPR."global.php");
   include(FUNCTION_DIR.SPR."GopDb.php");
  
  
  