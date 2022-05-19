
<?php include ('../include/connect.php');?>
<?php include('../function/common_function.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../boostrap/boostrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>User registration</title>
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center my-3">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    
                      <!--user name field-->
                    <div class="form-outline mb-2">
                        <label for="user_name">Username</label>
                        <input type="text" id="user_name" name="user_name" class="form-control form-control-sm" placeholder="Enter your username" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-3">
                        <label for="user_email">Email</label>
                        <input type="email" id="user_email" name="user_email" class="form-control form-control-sm" placeholder="Enter your email" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-3">
                        <label for="user_image">Username</label>
                        <input type="file" id="user_image" name="user_image" class="form-control form-control-sm" placeholder="Enter your image" required="required">
                    </div>
                    <div class="form-outline mb-3">
                        <label for="user_password">Password</label>
                        <input type="password" id="user_password" name="user_password" class="form-control form-control-sm" placeholder="Enter your password" required="required">
                    </div>
                    <div class="form-outline mb-3">
                        <label for="user_password">Confirm password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-sm" placeholder="Confirm your password" required="required">
                    </div>
                    <div class="form-outline mb-3">
                        <label for="user_addres">Address</label>
                        <input type="text" id="user_addres" name="user_addres" class="form-control form-control-sm" placeholder="Enter your addres" autocomplete="off" required="required">
                    </div>
                    <div class="form-outline mb-3">
                        <label for="user_contact">Contact</label>
                        <input type="text" id="user_contact" name="user_contact" class="form-control form-control-sm" placeholder="Enter your mobilee number" autocomplete="off" required="required">
                    </div>
                    <!--button-->
                    <div class="mt-4  pt-2">
                        <input type="submit" value="Register" name="user_register" class="bg-info py-2 px-3 border-0 text-light">
                        <p class="small fw-bold mt-1 pt-2 mb-0">All ready you have an Account ? <a href="user_login.php" class="text-decoration-none text-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
   
</body>
                        <!--java Scripts-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
</html>
         <!--php code-->
<?php
    if(isset($_POST['user_register'])) {
        $user_name=$_POST['user_name'];
        $user_email=$_POST['user_email'];
        $user_image=$_FILES['user_image']['name'];
        $user_image_tmp=$_FILES['user_image']['tmp_name'];
        $user_password=$_POST['user_password'];
        $harsh_password=password_hash($user_password,PASSWORD_DEFAULT);
        $confirm_password=$_POST['confirm_password'];
        $user_addres=$_POST['user_addres'];
        $_user_contact=$_POST['user_contact'];
        $_userIp= getIPAddress();
        //select query
        $select_query="SELECT * FROM `user_table` WHERE username='$user_name' OR user_email='$user_email';";
        $result_query=mysqli_query($con,$select_query);
        $row_count=mysqli_num_rows($result_query);
            if($row_count>0){
                echo "<script>alert('User name or Email all ready exist')</script>";
            }
            else if($user_password!=$confirm_password){
                echo "<script>alert('Password  do not match')</script>";
            }
            
        else{
            //insert_query
        move_uploaded_file($user_image_tmp,"./user_image/$user_image");
        $sql_excution="INSERT INTO `user_table`(username,user_email,user_password,user_img,user_addres,user_ip,user_mobile) 
                    VALUES('$user_name','$user_email','$harsh_password','$user_image','$user_addres','$_userIp','$_user_contact')";
        $result_query=mysqli_query($con,$sql_excution);
        }
    $select_cart_items="SELECT * FROM `cart_detail` WHERE ip_address='$_userIp';";
    $result_query=mysqli_query($con,$select_cart_items);
    $row_count=mysqli_num_rows($result_query);
    if($row_count>0){
        $_SESSION['username']=$user_name;
        echo "<script> alert('You have an iteams in the cart')</script>";
        echo "<script> window.open('checkout.php','_self')</script>";
    }
    else{
        echo "<script> window.open('../index.php.php','_self')</script>";
    }
}
    
    ?>