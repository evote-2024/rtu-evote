<?php
include "db_conn.php";

$id = $_GET["id"];
$sql_delete = "DELETE FROM `dataindex` WHERE id = $id";
$result_delete = mysqli_query($conn, $sql_delete);

if ($result_delete) {
    // Reset auto-increment counter
    $sql_reset_auto_increment = "ALTER TABLE `dataindex` AUTO_INCREMENT = 1";
    mysqli_query($conn, $sql_reset_auto_increment);

    header("Location: index.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>