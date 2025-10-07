<?php

    $con = mysqli_connect($server, $username, $password, $db);

    $senderName = $_REQUEST["senderName"];
    $senderPassword = $_REQUEST["senderPassword"];
    $receiverName = $_REQUEST["receiverName"];

    $authSQL = "SELECT * FROM `ProjectFiveUserTable` 
                WHERE `User` = '$senderName' AND `Password` = '$senderPassword'";
    $authResult = mysqli_query($con, $authSQL);

    if (mysqli_num_rows($authResult) > 0) {
        $textSQL = "SELECT `Message` 
                    FROM `ProjectFiveUserTable` 
                    WHERE `User` = '$receiverName'";
        $result = mysqli_query($con, $textSQL);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo $row["Message"];
        } else {
            echo "";
        }
    } else {
        echo "";
    }

    mysqli_close($con);


?>
