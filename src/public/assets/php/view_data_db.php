<?php

    require 'db_connectie.php';
    $conn = OpenCon("muziekdatabase");

    $sql = "select jaartal from Stuk";  
    $res = $conn->query($sql);

    while ($row = $res->fetch_assoc()) {
        print_r($row);
        echo '<br />';
    }
?>