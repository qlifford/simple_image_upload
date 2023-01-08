<?php
 include "connect.php"; 
    if(isset($_POST['del_btn']))
    {
        $id = mysqli_real_escape_string($con, $_POST['id']);
        
        $delete = "delete from uploads where id='$id'";
        $result = mysqli_query($con, $delete);
        if($result)
        {
            echo "<script>alert('Image Deleted successfully')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit();
        }
        else
        {
            echo "Failed to delete";
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
    
    
<body>
    <nav class="navbar m-auto navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Esmangie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

   
    <!-- <?php if (isset($_GET['error'])); ?> 
        <p><?= $_GET['error']; ?></p>
        <?php "endif"; ?><br> -->
        
        <h1 class="text-center text-primary mb-30">Uploading Images</h1>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label">Image Name</label>
            <input type="text" class="form-control" name="name" id="name"><br>
            <label> Select image </label>
            <input type="file" name="image" class="form-control" id="image" value=""><br><br>
            <button type="submit" class="btn btn-primary w-100" name="submit">Upload</button><br><br>
        
        </form>
    </div>

<h4 class="text-center mb-30 text-info">Uploaded Images</h4>


<div class="container">
	</div>
	<div >
		<div  backup="" class="class_1 item_class_2">		
		
        <?php
                $sql ="select * from  uploads order by id DESC";
                $res = mysqli_query($con, $sql);

                if (mysqli_num_rows($res) > 0) 
                {
                    while ($images = mysqli_fetch_assoc($res))
                    { 
                        ?>
                   
                            <div class="class_1" >                               
                                <div  class="item_class_1 class_2">
                                    <div class="class_3"  >
                                    <?= $images['name']; ?>
                                    </div>
                                    <a href="details.php">
                                        <div >
                                            <img src="web/<?= $images['image']; ?>" width="50px" class="img-responsive class_4">
                                        </div>
                                    </a> 
                               
                                    <div class="row">
                                    
                                        <div class="col-sm-6">
                                        <a href="edit.php?id=<?= $images['id']; ?>">
                                                <input type="hidden" name="image" value="<?= $images['image']; ?>">
                                                <input type="hidden" name="name" value="<?= $images['name']; ?>">
                                            <div class="class_5"  >
                                              <h3> Edit </h3>
                                            </div>
                                            </a>
                                        </div>
                                        
                                      <div class="col-sm-6">
                                        <form action="#" method="POST" enctype="multipart/form-data">
                                            <div class="class_5" >
                                                <input type="hidden" name="id" value="<?= $images['id']; ?>">
                                                <input type="hidden" name="image" value="<?= $images['image']; ?>">
                                                <input type="hidden" name="name" value="<?= $images['name']; ?>">
                                                  <button name="del_btn" type="submit" class="btn btn-danger me-0">Delete</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                          
                          
                        <?php 
                    } 
                } 
            ?>
		</div>
	</div>

    <script>
  src="js/jquery-3.6.3.min.js"
</script>

</body>
</html>

