<?php
$controller="";
$method ="";
$params = "";
$url =$_GET["url"] ?? "Index/index";
$arrayUrl = explode("/", $url);
if(isset($arrayUrl[0])){
    $controller= $arrayUrl[0];
    echo $controller." ";
}
if(isset($arrayUrl[1])){
    if($arrayUrl[1] !=''){
        $method=$arrayUrl[1];
        echo $method." ";
    }
}

if(isset($arrayUrl[2])){
    if($arrayUrl[2] !=''){
        $params=$arrayUrl[2];
        echo $params." ";
    }
}

?>