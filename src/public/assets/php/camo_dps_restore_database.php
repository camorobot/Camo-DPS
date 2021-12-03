<?php
    require './db_connection_execute_sql.php';

    $db = OpenConSqlFile("mysql");
    

    //get all image files with a .txt extension.
    $file= glob("../sql/camo_dps_restore/*.sql");

    //print each file name
    foreach($file as $filew){
        echo $filew;
        echo '<br>';
        $files[] = $filew; // to create the array

        $query = file_get_contents($filew);
        $stmt = $db->prepare($query);
        $stmt->execute();

    }
    header('Location: /');

?>