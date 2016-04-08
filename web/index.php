<?php

	 require_once("../init/init.php");

     $action= $_GET["action"];
     include(ACTION_DIR."/{$action}.php");
     var_dump($action);
     echo $action();
     
