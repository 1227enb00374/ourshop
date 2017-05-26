<?php

function current_page($class_name="",$page_name="index"){
	$active_page = basename($_SERVER['PHP_SELF']);
	if($page_name==$active_page){
		echo $class_name;
	}else{
		return "";
	}
}