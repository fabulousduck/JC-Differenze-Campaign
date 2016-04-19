<?php

$age = $_GET['age'];

if($age  = 10){
    echo json_encode("hello world");
}else if($age = 18){
    echo json_encode("my memes");
}

?>
