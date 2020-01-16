<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8" />
    <title>WD2-DOCKER</title>
</head>

<body>

    <?php
        echo "Ahoj WD2!";

        $mysqli = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), 'information_schema');
        if ($mysqli->connect_error) {
            echo 'Connection Error [', $mysqli->connect_errno, ']: ', $mysqli->connect_error;
        } else {
            echo 'MySQLi Connected Successfully!';
        }
    ?>

</body>

</html>