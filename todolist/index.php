<?php
include "connection.php";

if(isset($_POST['addtask'])){
    $task = $_POST['task'];

    $sql = "INSERT into task(task) VALUES ('$task')";

    $result = mysqli_query($conn,$sql);

    if($result){
    //  echo "<script>alert('Task Added successfully');
    //   window.location.href = 'index.php';
    //   </script>";
      header("Location: http://localhost/todolist/index.php");
      exit();
      
    }else{
      die("Error: " . mysqli_error($conn));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </head>
</head>
<body>
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2><center>TO DO LIST</center></h2>
      <div class="col-md-6">
        <form method="post">
          <div class="input-group">
            <input type="text" class="form-control" name="task" placeholder="Enter your task here" aria-label="Text input" required>
            <button class="btn btn-primary" type="submit" name="addtask"><i class="fa-solid fa-plus"></i> Add Task</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php
include "display.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>