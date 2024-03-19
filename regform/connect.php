<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    $sql = "CREATE DATABASE FirstConnection";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: ". $conn->error;
    }

    $conn->close();

    // echo "Connected successfully";
    // $servername = "localhost";
    // $username = "root";
    // $password = "";

    // $conn = mysqli_connect($servername, $username, $password);

    // if (!$conn) {
    //     die("Connection failed: ". mysql_connect_error());
    // }
    // echo "Connected successfully";
?> 