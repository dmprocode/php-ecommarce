<?php include 'include/connect.php';?>
<?php include('function/common_function.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E COMMARCE WEB SITE USING PHP</title>
                           <!-- boostraps links-->
    <link rel="stylesheet" href="boostrap/boostrap.css">
                             <!--font awasome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
                            <!---------------------image style-------------------->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
                               <!---------------------nav bar----------------------------->
        <div class="container-fluid p-0">
                                        <!--first child nav bar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <img src="./image/logo New.png" alt="" class="logo">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="display_all.php">Product</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="./user_area/user_registration.php">Register</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"><sup><?php cart_items();?></sup></i></a>
                        </li>

                    </ul>
                    </div>
                </div>
            </nav>
            <!--colling cart function-->

            <?php 
               cart();
            ?>

                        <!-------------------End of thefirst child nav bar----------------------->
                        <!-------------------Second child----------------------->
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <ul class="navbar-nav me-outo">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome Geust</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user_area/user_login.php">Login</a>
                    </li>
            </nav>
                        <!-------------------end of second child----------------------->
                        <!-------------------therd child----------------------->
            <div class="bg-light">
                <h3 class="text-center">Dany store</h3>
               <p class="text-center">e Commarce is the  is hart of the to day busness</p>
            </div>
                        <!-------------------end of therd child----------------------->
                        <!-------------------Fouth child----------------------->
            <div class="container">
                <div class="row">
                    <table class="table table-border text-center"> 
                        <form action="" method="POST">
                           
                            <tbody>
                                        <!-- php code to display the dyanamic data-->
                                            <?php
                                                $get_ip_address = getIPAddress();
                                                $total=0; 
                                                $cart_query="select * from `cart_detail` where ip_address='$get_ip_address';";
                                                $result=mysqli_query($con,$cart_query);
                                                $result_count=(mysqli_num_rows($result));
                                                if($result_count>0){
                                                    echo" <thead>
                                                    <tr>
                                                        <th>Product title</th>
                                                        <th>Product image</th>
                                                        <th>Quantity</th>
                                                        <th>Total price</th>
                                                        <th>Remove</th>
                                                        <th>Operation</th>
                                                    </tr>
                                                 </thead>";
                                                while($row=mysqli_fetch_array($result)){
                                                    $product_id=$row['product_id'];
                                                    $select_product="select * from products where  product_id ='$product_id';";
                                                    $result_product=mysqli_query($con,$select_product);
                                                    while($row_product_price=mysqli_fetch_array($result_product)){
                                                        $poduct_price=array($row_product_price['product_price']);
                                                        $price_table=$row_product_price['product_price'];
                                                        $product_title=$row_product_price['product_name'];
                                                        $product_image=$row_product_price['product_img1'];
                                                        $product_sum=array_sum($poduct_price);
                                                        $total+=$product_sum;
                                                
                                            ?>
                                        <tr> 
                                            <td> <?php echo $product_title?> </td>
                                            <td><img src="./admin_area/product_image/<?php echo $product_image?>" alt="" style="height:50px;width:50px;object-fit:contain"></td>
                                            <td><input type="text" name="update_quantity" value="" class="form-input w-50"></td>
                                            <?php
                                                //$get_ip_address = getIPAddress();
                                               // if(isset($_POST['update_cart'])){
                                                   // $quantity=$_POST['update_quantity'];
                                                   // $update_cart_query="UPDATE `cart_detail` SET quantity='$quantity' WHERE ip_address='$get_ip_address'";
                                                    //$result_update_quantity=mysqli_query($con,$update_cart_query); 
                                                    //$cart_update_quantity=$total*$quantity; 
                                                //}
                                            ?>
                                            <td><?php echo $price_table?>/=Tsh</td>
                                            <td><input type="checkbox" name="remove_iteam[]"value="<?php echo $product_id?>"></td>
                                            <td>
                                                <button type="submit"class="bg-info px-3 py-3 border-0 mx-3 text-light" name="update_cart"value="update cart">Update</button>
                                                <button  type="submit" name="remove_cart"value="Remove cart"class="bg-secondary px-3 py-3 border-0 mx-3 text-light">Remove</button>
                                                
                                            </td>
                                    </tr>
                                    
                            
                                        <?php  }
                                                }} 
                                                else{ echo "<h2 class='text-center text-danger'> Cart is empty</h2>";

                                                }?>
                        </tbody>
                            
                                </table>
                                <div class="d-flex mb-5">
                                     <?php
                                      $get_ip_address = getIPAddress(); 
                                      $cart_query="select * from `cart_detail` where ip_address='$get_ip_address';";
                                      $result=mysqli_query($con,$cart_query);
                                      $result_count=(mysqli_num_rows($result));
                                      if($result_count>0){
                                        echo" <h4 class='px-3'>SabTotal: <strong class='text-info'>  $total</strong>/=Tzsh</h4>
                                        <button type='submit' class='bg-info px-3 py-3 border-0 mx-3 text-light' name='continue_shoping'value='Continue shoping'>Continue shoping</button>
                                        <button class='text-info border-0 bg-secondary text-light px-2 py-3'><a href='./user_area/checkout.php' class='text-light text-decoration-none'>Cheak out</button></a>";
                                      }
                                      else{
                                          echo"<button type='submit' class='bg-info px-3 py-3 border-0 mx-3 text-light' name='continue_shoping'value='Continue shoping'>Continue shoping</button>";
                                      }    
                                      if(isset($_POST['continue_shoping'])){         
                                          echo"<script>window.open('display_all.php','_self')</script>";
                                      }   
                                    ?>
                                    
                                </div>
                            </div>
                            </div>
                </form>
                                  <!--function to remove iteams from cart-->
                                  <?php
                                 function remove_cart_iteams(){
                                 global $con;
                                 if(isset($_POST['remove_cart'])){
                                     foreach($_POST['remove_iteam'] as $remove_id){
                                         echo $remove_id;
                                         $delate="DELETE FROM `cart_detail` WHERE product_id=$remove_id";
                                         $run_delate=mysqli_query($con,$delate);
                                         if($run_delate){
                                             echo "<script>window.open('cart.php','-self')</script>";
                                         }
                                     }
                                 }
                                }
                               echo $remove_iteams=remove_cart_iteams();
                                  ?>
            <!-------------------End of fouth child----------------------->
             <!--------------------------end of container fluid-------------->               
       </div>

        
                              <!--last child footer-->
                   <!-- include footer.php-->
       <?php include ('./include/footer.php')?>
                                 <!--java Scripts-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
</body>
</html>