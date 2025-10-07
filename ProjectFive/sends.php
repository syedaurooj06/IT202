<?php

    $server = "sql1.njit.edu";
    $username = "ssu23";
    $password = "Bellyflop0624!";
    $db = "ssu23";
    $con = mysqli_connect($server, $username, $password, $db);

    $senderName = mysqli_real_escape_string($con, $_REQUEST["senderName"]);
    $senderPassword = mysqli_real_escape_string($con, $_REQUEST["senderPassword"]);
    $message = mysqli_real_escape_string($con, $_REQUEST["message"]);    

    $sql = "SELECT `User` 
            FROM `ProjectFiveUserTable` 
            WHERE `User` = '$senderName' AND `Password` = '$senderPassword'";
            
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {

        $messageSQL = "UPDATE `ProjectFiveUserTable` 
               SET `Message` = '$message' 
               WHERE `User` = '$senderName' AND `Password` = '$senderPassword'";

        mysqli_query($con, $messageSQL);

    } elseif ($senderName != "" && $senderPassword != "") {

        echo "Invalid User";

    }

    mysqli_close($con);

?>