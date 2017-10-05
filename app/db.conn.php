<?php

    $conn = mysqli_connect('localhost','unn_w14013358','9KNRUSV7','unn_w14013358');
    if (mysqli_connect_errno()) {
       echo "<p>Connection failed:".mysqli_connect_error()."</p>\n";
       mysqli_close($conn);
    }
    mysqli_set_charset($conn,"utf8");
