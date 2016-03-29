<?php
	
	//ここでDBの接続情報を設定する
	
	
	//各ディレクトリのパスの指定
	define("SPR",DIRECTORY_SEPARATOR);
	define("ROOT_DIR", realpath(__DIR__."/../"));
	define("ACTION_DIR", ROOT_DIR.SPR."action");
	define("FUNCTION_DIR", ROOT_DIR.SPR."function");
	define("VIEW_DIR", ROOT_DIR.SPR."view");
	include(FUNCTION_DIR.SPR."global.php");
	