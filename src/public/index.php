<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="/assets/js/fontAwsome.js" crossorigin="anonymous"></script>
    <script src="/assets/js/timer.js"></script>
    <title>Camo-DPS</title>
</head>
<body>
    <?php
        require './assets/php/db_connectie.php';
    
        $conn = OpenCon("mysql");
    
        if (openCon("mysql")->connect_error) {
            die(header('Location: /assets/php/check_db_connection.php'));
        } 
        //$sql = "SHOW TABLES"; 
        $sql = "select jaartal from muziekdatabase.Stuk";  //edit your table name here
        $response = $conn->query($sql);

        if($response == false){
            echo '<div class="info-container">
                        <h1>Welcome to Camo-DPS</h1>
                        <p>Is this your first time on this container?</p>
                        <p>Then we will set up the database for you.</p>
                        <p>One moment please.</p>
                    </div>
                    <div id="preloader">
                        <div id="loader"></div>
                    </div>

                    <span id="timer">
                        <script type="text/javascript">countDown();</script>
                    </span> ';
         }else{
            echo '<div class="info-container">
                        <h1>Welcome to Camo-DPS</h1>
                        <p>The database has been successfully integrated</p>
                    </div>
                    <div class=pre-icon>
                        <div class="icon">
                            <i class="fas fa-database"></i>
                        </div>
                    </div>
                    <ul>
                        <li><a href="./assets/php/phpinfo.php">Php Info</a></li>
                        <li><a href="./assets/php/view_data_db.php">Muziekdatabase</a></li>
                        <li><a href="http://localhost:8080">Php myadmin</a></li>
                        <li><a href="./assets/php/check_db_connection.php">Check Connecetion</a></li>
                    </ul>';
         }
    ?>
</body>

</html>