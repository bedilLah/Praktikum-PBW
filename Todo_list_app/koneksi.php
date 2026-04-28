<?php
    $conn = new mysqli(
        'localhost',
        'root',
        '',
        'tododb'
    );

    if($conn->connect_error){
        die("Gagal : . $conn->connect_error");
    }

?>