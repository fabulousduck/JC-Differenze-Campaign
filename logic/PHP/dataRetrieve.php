<?php
        include "../config/PHPconfig.php";
        error_reporting(0);
        $page = $_GET['p'];
        $rma = $_GET['rma'] ?: "no";
        //checks what page its on and queries the corresponding data
        switch ($page) {
            case "navigation":
                $sql = "SELECT * FROM Content WHERE Partof = 'navigation'";
                break;
            
            case "body":
                $sql = "SELECT * FROM Content WHERE Partof = 'body'";
                break;
                
            case "footer":
                $sql = "SELECT * FROM Content WHERE Partof = 'footer'";
                break;
                
            default:
                $sql = "SELECT * FROM Content WHERE Partof = 'navigation'";
        }
        $result = $mysqli->query($sql);
        //checks if there are any rows from the query
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo '<div class="sideItem"><p>'.$row['Content_ENG'].'</p><i class="fa fa-trash-o fa-2x fa-inverse"></i></div>';
            }
            } else {
                echo "no content to be displayed at this time";
            }
        $mysqli->close();
?>