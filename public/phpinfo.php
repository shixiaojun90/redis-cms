<?php
	//phpinfo();exit;
	$redis=new Redis();
	$redis->connect('127.0.0.1', 6379);
	$redis->set("tutorial-name", "Redis tutorial");
?>