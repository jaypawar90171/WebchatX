<?php

    $conn = mysqli_connect("localhost","root","", "chat_app");
    if($conn)
    {
        echo "database created successfully";
    }

?>