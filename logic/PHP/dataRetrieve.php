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
            if($rma == "yes"){
                echo "<form action='../logic/PHP/dataDestroy.php' method='POST'>";
            }else{
                echo "<form action='../logic/PHP/dataSend.php' method='POST'>";
            }
            //puts the data into inputfields in grids in a row.
                echo "<div class='gridRow'>";
                    echo "<div class='gridCell'><p>".$row['ContentTitle']."</p></div>";
                    echo "<div class='gridCell'><input type='text' name='content_disp_ENG' id='content_disp' value='".$row['Content_ENG']."' class='contentGridCell' maxlength='255'></div>";
                    echo "<div class='gridCell'><input type='text' name='content_disp_NED' id='content_disp' value='".$row['Content_NED']."' class='contentGridCell' maxlength='255'></div>";
                    echo "<div class='gridCell'><input type='text' name='content_disp_ESP' id='content_disp' value='".$row['Content_ESP']."' class='contentGridCell' maxlength='255'></div>";
                    echo "<div class='gridCell'><input type='text' name='content_disp_SRB' id='content_disp' value='".$row['Content_SRB']."' class='contentGridCell' maxlength='255'></div>";
                    echo "<div class='gridCell'><select name='ta_disp' class='taGridCell'><option value='left'>left</option><option value='center'>center</option><option value='right'>right</option></select></div>";
                    echo "<div class='gridCell'><input type='number' min='10' max='40' value=".$row['Font_size']." class='contentGridCell' name='fs_disp'></div>";
                    echo "<input type='hidden' name='Partof' value='navigation'>";
                    echo "<input type='hidden' name='id' value='".$row['id']."'>";
                    echo "<input type='hidden' name='content_title' value='".$row['ContentTitle']."'>";
                    //checks if remove mode is active
                    if($rma == "yes"){
                        echo "<div class='gridCell'><input type='submit' value='remove' class='sGridCell'></div>";
                    }else{
                         echo "<div class='gridCell'><input type='submit' value='edit' class='sGridCell'></div>";
                    }
                echo "</div>";
            echo "</form>";
            }
            
        } else {
            echo "no content to be displayed at this time";
        }
    $mysqli->close();
?>