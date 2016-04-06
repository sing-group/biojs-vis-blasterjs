<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['subject'])     ||
   empty($_POST['message'])	    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	echo "No arguments Provided!";
	return false;
}else{
    error_reporting (E_ALL ^ E_NOTICE);
    $post = (!empty($_POST)) ? true : false;
    if($post){     
        $prexml='<?xml version="1.0" encoding="UTF-8"?>
        <feedback>
            <name>'.$_POST['name'].'</name>
            <email>'.$_POST['email'].'</email>
            <subject>'.$_POST['subject'].'</subject>
            <text>'.$_POST['message'].'</text>
        </feedback>';        

        if(!$error){
            $soap_do = curl_init();
            curl_setopt($soap_do, CURLOPT_URL, 'http://localhost:8087/mahmi/browser/blasterjs');
            curl_setopt($soap_do, CURLOPT_POSTFIELDS, $prexml);
            curl_setopt($soap_do, CURLOPT_HTTPHEADER, array('Accept: application/xml'));
            curl_setopt($soap_do, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
            curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, 1);
            $respuesta=curl_exec($soap_do);
            curl_close($soap_do);
            return true;
        }
    }else{
        echo 'BAD_REQUEST';
        header('Location: index.php');
    }
}

?>