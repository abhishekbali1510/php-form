<?php
	
	require 'vendor/autoload.php';
	 $client = new MongoDB\Client;  
	$mydb= $client->abhidb;
	$mycol=$mydb->abhicoll2;
	$name=$_POST['name'];
	$ins1 = $mycol->insertOne(['name'=>$name]);
	var_dump($ins1->getInsertedId());
?>