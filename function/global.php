<?php
	
	
	function getView($path, $val=array()){	
			
		if(is_file($path)){
			extract($val,EXTR_OVERWRITE);
			ob_start();
			include $path;
			$view = ob_get_contents();
			ob_end_clean();	
				
		} else {
			
		  //エラー処理
		  die("テンプレートがありません。{$path}");
		  
		}
		return $view;
	}