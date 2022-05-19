<?php include './include/connect.php';?>
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
                        <li class="nav-item">
                          <a class="nav-link" href="#">Total price: <?php total_price();?>/=Tsh</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="GET">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="submit"value="Search"class="btn btn-outline-light" name="search_data_product">
                    </form>
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
                </ul>
            </nav>
                        <!-------------------end of second child----------------------->
                        <!-------------------therd child----------------------->
            <div class="bg-light">
                <h3 class="text-center">Dany store</h3>
               <p class="text-center">e Commarce is the  is hart of the to day busness</p>
            </div>
                        <!-------------------end of therd child----------------------->
                        <!-------------------Fouth child----------------------->
            <div class="row">
                <div class="col-md-10">
                                     <!--display product-->
                    <div class="row">
                    

                        
                        <!--fetch product from the data base-->
                        <?php
                        //colling products function
                           related_image();
                           get_unique_category();
                           get_unique_brand();
                           cart();
                           
                        
                        ?>
                        
                    </div>
                </div>


                <div class="col-md-2 bg-secondary p-0">
                                <!--Delivery  brand iteams-->
                    <ul class="navbar-nav me-outo text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                        </li>
                            <?php
                            //colling function of deliverdbrand
                               delivered_brand();
                            ?>
                
                    </ul>
                                   <!--Category to be displyed-->
                    <ul class="navbar-nav me-outo text-center">
                        <li class="nav-item bg-info">
                            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                        </li>
                                <?php
                                  //coliing function
                                  categories_brand();
                                ?>
                                
                    </div>
            </div>
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