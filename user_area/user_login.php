 <?php include '../include/connect.php';?>
 <?php include('../function/common_function.php');
 @session_start();
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../boostrap/boostrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>User login</title>
</head>
<body style="overflow-x:hidden">
    <div class="container">
        <h2 class="text-center my-3">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="POST">
                      <!--user name field-->
                    <div class="form-outline mb-3">
                        <label for="user_name">Username</label>
                        <input type="text" id="user_name" name="user_name" class="form-control form-control-sm" placeholder="Enter your username" autocomplete="off" required="required">
                    </div>
                    
                    <div class="form-outline mb-3">
                        <label for="user_password">Password</label>
                        <input type="password" id="user_password" name="user_password" class="form-control form-control-sm" placeholder="Enter your password" required="required">
                    </div>
                    <!--button-->
                    <div class="mt-4  pt-3">
                        <input type="submit" value="Login" name="user_login" class="bg-info py-2 px-3 border-0 text-light">
                        <p class="small fw-bold mt-1 pt-2 mb-0">Don't have an account ? <a href="user_registration.php" class="text-decoration-none text-danger">Register</a></p>
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

<!--user log in detail-->

<?php
    if(isset($_POST['user_login'])){
        $name=$_POST['user_name'];
        $password=$_POST['user_password'];
        $sql="SELECT * FROM `user_table` WHERE username='$name';";
        $result=mysqli_query($con,$sql);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);
        //cart detail
        $user_ip=getIPAddress();
        $sql_cart="select * from  `cart_detail` where ip_address='$user_ip'";
        $cart_result=mysqli_query($con,$sql_cart);
        $cart_row_count=mysqli_num_rows($cart_result);
        $row_cart_data=mysqli_fetch_assoc($cart_result);
        if($row_count>0){
            $_SESSION['username']=$name;
            if(password_verify($password,$row_data['user_password'])){
                if($row_count==1 and $cart_row_count==0){
                    $_SESSION['username']=$name;
                echo "<script>alert('Login saccesfull')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
                }
                else{
                    $_SESSION['username']=$name;
                    echo"<script>alert('Login saccesfull')</script>";
                    echo"<script>window.open('payment.php','_self')</script>";
                }
                
            }else{
                echo "<script>alert('Invalid credintial')</script>";
            }
        }else{
            echo "<script>alert('Invalid credintial')</script>";
        }

    }


?>