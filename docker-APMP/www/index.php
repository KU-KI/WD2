<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8" />
    <title>WD2-DOCKER APMP</title>
</head>

<body>

    <?php
        echo "Ahoj WD2!<br><br>";

        $mysqli = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), 'information_schema');
        if ($mysqli->connect_error) {
            echo 'Connection Error [', $mysqli->connect_errno, ']: ', $mysqli->connect_error;
        } else {
            echo 'MySQLi Connected Successfully!';
        }

        //$res = $conn->query("Select ITEM_NAME, ITEM_DESC, ITEM_ONHAND from MOE_ITEM_T");
        //for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
        //    $res->data_seek($row_no);
        //    $row = $res->fetch_assoc();
        //    echo " Item Name = " . $row['ITEM_NAME'] . " Item Description = " . $row['ITEM_DESC'] . " Item Onhand = " . $row['ITEM_ONHAND'];
        //    echo "<br>";
        //}
        //$res->close();
        //$conn->close();
    ?>

</body>

</html>