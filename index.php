<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload files</title>
</head>
<body>

    <!-- <?php if (isset($_GET['error'])); ?> 
        <p><?= $_GET['error']; ?></p>
        <?php "endif"; ?><br> -->
        <h4>Uploading Images</h4>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="">Image Name</label>
    <input type="text" name="name" id="name"><br><br>
    <label for="">Select image</label>
    <input type="file" name="image" id="image" value=""><br><br>
    <button type="submit" name="submit" >Finish</button><br><br>
    <a href="data.php">View</a>

</form>
    
</body>
</html>