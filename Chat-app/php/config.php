<?php

    $conn = mysqli_connect("localhost", "root" , "" , "chat_app");
    if(!$conn)
    {
        echo "database not created successfully". mysqli_connect_error();
    }
?>