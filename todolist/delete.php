<?php
include "connection.php";


if (isset($_GET['sno']) && is_numeric($_GET['sno'])) {
    $sno = intval($_GET['sno']);

    $deleteQuery = "DELETE FROM task WHERE sno = $sno";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // echo "<script>alert('Task deleted successfully'); window.location.href='display.php';</script>";
        header("Location: http://localhost/todolist/index.php");
        exit();
        
    } else {
        die("Error deleting task: " . mysqli_error($conn));
    }
} else {
    echo "<script>alert('Invalid Task Serial Number'); window.location.href='display.php';</script>";
    exit();
}
?>
