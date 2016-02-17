<?php

include "../../config/PHPconfig.php";


if(isset($_POST['partof'])){
    $q = "SELECT * FROM".$_POST['t']." WHERE Partof = ".$_POST['partof']."";
}else{
    $q = "SELECT * FROM ".$_POST['t']."";
}


$re = $mysqli->query($q);

while($m = $re->fetch_assoc()){
    $Content_title = $m["ContentTitle"];
    $Content = $m["content"];
    $Text_align = $m["Text-align"];
    $Font_size = $m["Font-size"];
    $Is_part_of = $m["Partof"];
    
    $sender = json_encode([$Content_title,$Content,$Text_align,$Font_size,$Is_part_of]);
    
    
    echo $sender;
}
    



?>