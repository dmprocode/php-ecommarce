<?php include './include/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="boostrap/boostrap.css">

</head>
<body>
    <div class="container">
        <div class="row" class=my-3>
        <form action="" method="post"enctype="multipart/form-data">
            <label for="user_image">Image</label>
            <input type="file"name="user_image" id="user image"class="form-control required" required="required">
            <button type="submit" name="send_data" class="btn btn-info mt-3">Submit</button>
        </form>
        </div>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['send_data'])){
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    move_uploaded_file($user_image_tmp,"./image_image/$user_image");
    $sql_query="INSERT INTO `tempo_img` (img) VALUE ('$user_image');";
    $result_query=mysqli_query($con,$sql_query);
    if(!$result_query){
        die(mysqli_erro($con));
    }
 
}


?>