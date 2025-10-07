<!DOCTYPE html>
<html lang = "en">

<head>

    <link rel = "stylesheet" href = "styling.css">
    <script src = "script.js"></script>
    <title>Chat Application</title>

</head>

<body>

    <div class = "mainLayout">

        <div class = "sideBar">
            <?php
                $server = "sql1.njit.edu";
                $username = "ssu23";
                $password = "Bellyflop0624!";
                $db = "ssu23";
                $con = mysqli_connect($server, $username, $password, $db);

                $sql = "SELECT `User` FROM `ProjectFiveUserTable`";
                $data = mysqli_query($con, $sql);

                echo '<h2>Returning user?</h2><br>';
                if (mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo '<label class = "users"><input type = "radio" name = "selectedUser" value = "' . $row['User'] . '" onclick = "updateNameInput(\'' . $row['User'] . '\')">' . $row['User'] . '</label><br>';
                    }
                }
                mysqli_close($con);
            ?>
        </div>

        <div class = "contentArea">

            <div class = "container1">

                <header>
                    <h2><label for = "senderName" class = "senderName">Name:</label></h2>
                    <input type = "text" id = "senderName"><br/>

                    <h2><label for = "senderPassword" class = "senderPassword">Password:</label></h2>
                    <input type = "text" id = "senderPassword"><br/>

                    <div style="display: flex; justify-content: center;">
                        <p id="warning" style="display: none">Warning: User not found</p>
                    </div>

                </header>

                <div class = "chat">
                    <br><textarea id = "message" rows = "10" cols = "50"></textarea><br>
                </div>

            </div>

            <div class = "container2">

                <header>
                    
                    <h2><label for = "receiverName" class = "receiverName">Delivering to:</label></h2>
                    <input type = "text" id = "receiverName">

                </header>

                <div class = "chat">
                    <br><div id="displayedMSG" class="message-box"></div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>