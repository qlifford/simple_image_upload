<?php include "connect.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<h4>View Uploaded Images</h4>
<a href="index.php">&#8592;Back</a><br>

<div >
	</div>
	<div >
		<div  backup="" class="class_1 item_class_2">		
		
        <?php
                $sql ="select * from pics order by 1 DESC";
                $res = mysqli_query($con, $sql);

                if (mysqli_num_rows($res) > 0) 
                {
                    while ($images = mysqli_fetch_assoc($res))
                    { 
                        ?>
                            <div class="class_1" >                               
                                <div  class="item_class_1 class_2">
                                    <div class="class_3"  >
                                    <?=$images['name']; ?>
                                    </div>
                                    <a href="details.php">
                                        <div >
                                            <img src="web/<?=$images['image']; ?>" class="img-responsive class_4">
                                        </div>
                                    </a>                                
                                        <div class="class_5"  >
                                        Pcha
                                    </div>
                                </div>
                            </div>
                        <?php 
                    } 
                } 
            ?>
		</div>
	</div>
  
</body>
</html>
