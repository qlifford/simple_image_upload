<?php
 include "connect.php"; 
    if(isset($_POST['edit_btn']))
    {
        $id = mysqli_real_escape_string($con, $_POST['id']);
        
        $delete = "update set from uploads where id='$id'";
        $result = mysqli_query($con, $delete);
        if($result)
        {
            echo "<script>alert('Image Updated successfully')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit();
        }
        else
        {
            echo "Failed";
        }
    }
        
    
            
      ?>



<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cliff | Web</title>
    
    <link rel="stylesheet" type="text/css" href="fontawsome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    
<body class="bg-light">
    
   
    <!-- <?php if (isset($_GET['error'])); ?> 
        <p><?= $_GET['error']; ?></p>
        <?php "endif"; ?><br> -->
        
        <div class="container">
        <h1 class="text-center mb-30 bg-warning mt-4">Edit Images</h1>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label">Image Name</label>
            <input type="text" class="form-control" name="name" id="name"><br>
            <label> Select image </label>
            <input type="file" name="image" class="form-control" id="image" value=""><br><br>
            <button type="submit" class="btn btn-primary w-100" name="edit_btn">Update now</button><br><br>
        
        </form>
    </div>

</div>

    <script
  src="js/jquery-3.6.3.min.js"
</script>

</body>
</html>

