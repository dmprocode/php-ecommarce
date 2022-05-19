<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!--bootstrap and css link-->
                <link rel="stylesheet" href="../boostrap/boostrap.css">
                <link rel="stylesheet" href="../style/style.css">
                <!--font awasome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

        <title>Admin Dashboard</title>
        <style>
                .admin_image{
                width: 100px;
                object-fit: contain;
                }
                .footer{
                    position:absolute;
                    bottom: 0;
                    width: 100%;
                }
        </style>
    </head>
    <body>
                         <!--nav bar-->
                          <!--first child-->
        <div class=".container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <img src="../image/logo New.png" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Welcome geust</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
                                <!--Second child-->
            <div class="big-light">
                <h3 class="text-center p-2">Manage Detail</h3>
            </div>
                                  <!--Therd child-->
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="px-4">
                        <a href=""><img src="../image/admin.jpg" alt="" class="admin_image"> </a>
                        <p class="text-center text-light">Admin name</p>
                    </div>
                        <div class="button text-center">
                            <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert product</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">View product</a></button>
                            <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert categories</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">View categories</a></button>
                            <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert brand</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">View brand</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">All order</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">All payement</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">List of user</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">Log out</a></button>
                        </div>
                </div>
            </div>
        </div>
                            <!--fourth child-->
        <div class="container my-3">
            <?php
                if(isset($_GET['insert_categories'])){
                    include ('insert_category.php');
                }
                if(isset($_GET['insert_brand'])){
                    include('insert_brand.php');
                }
            
            ?>
        </div>                
    </body>
                            <!--Footer-->
        <div class="bg-info p-3 footer" >
           <p class="text-center">All right are reserved disigned by Daniel &copy right- 2022</p>
       </div>
                       <!-- java Script link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
</html>