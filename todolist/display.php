<?php
include "connection.php"; 


$tasks = mysqli_query($conn, "SELECT sno, task FROM task"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST - Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- <h2><center>Task List</center></h2> -->
        <div class="col-md-8">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>Sno.</th>
                        <th>Task</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    if (mysqli_num_rows($tasks) > 0) {
                        while ($row = mysqli_fetch_assoc($tasks)) {
                           
                            echo "<tr>
                                   <td>" . $i . "</td>
                                    <td>" . htmlspecialchars($row['task']) . "</td>
                                    <td>
                                        <a href='delete.php?sno=" . $row['sno'] . "' class='btn btn-danger btn-sm'><i class='fa-solid fa-trash'></i> Delete</a>
                                    </td>
                                  </tr>";
                                  $i++;
                        }
                    } else {
                        echo "<tr><td colspan='3' class='text-center'>No tasks available</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
