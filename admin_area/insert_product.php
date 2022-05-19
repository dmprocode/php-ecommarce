<?php include '../include/connect.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Product-Admin Dashboard</title>
            <!-- boostraps links-->
            <link rel="stylesheet" href="../boostrap/boostrap.css">
            <!--font awasome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
                                <!---------------------image style-------------------->
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body class="bg-light">
        <div class="container">
                       <!--Insert product-->
            <h1 class="text-center mt-3">Insert Product</h1>
            <form action="insert_productProcess.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 w-50 m-auto">
                    <label for="exampleFormControlInput1" class="form-label">Enter product name</label>
                    <input type="text" name="product_title" id="pdoduct_title" class="form-control form-control-sm" id="exampleFormControlInput1" 
                    placeholder="Product name" autocomplete="off" required="required">
                </div>
   
                      <!--Product discription-->
                <div class="mb-3 w-50 m-auto">
                    <label for="exampleFormControlInput1" class="form-label">Enter Product Discription</label>
                    <input type="text" name="discription"id="discription" class="form-control form-control-sm" id="exampleFormControlInput1" 
                    placeholder="Product Discription" autocomplete="off" required="required">
                </div>
            
                        <!--keywword-->
               <div class="mb-3 w-50 m-auto">
                    <label for="exampleFormControlInput1" class="form-label">Enter Product Keyword</label>
                    <input type="text" name="keyword_keyword" id="keyword_keyword" class="form-control form-control-sm" id="exampleFormControlInput1" 
                    placeholder="Product Keywword" autocomplete="off" required="required">
                </div>
                        <!--category-->
               <div class="mb-3 w-50 m-auto">
                    <select name="product_category" id="" class="form-select" placeholder="Select">
                        <option value="select_category">Select a category</option>
                        <?php
                            $sql_select="SELECT * FROM `category`;";
                            $result_query=mysqli_query($con,$sql_select);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $category_title=$row['category_title'];
                                $category_id=$row['category_id'];
                                echo"<option value='$category_id'>$category_title</option>";
                            }
                        ?>
                    </select>
                </div>
                         <!--category-->
                <div class="mb-3 w-50 m-auto">
                    <select name="product_brand" id="" class="form-select">
                        <option value="">Select a Brand</option>
                        <?php
                            $sql_select="SELECT * FROM `brand`;";
                            $result_query=mysqli_query($con,$sql_select);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $brand_titl=$row['brand_titl'];
                                $brand_id=$row['brand_id'];
                                echo"<option value='$brand_id'>$brand_titl</option>";
                            }
                        ?> 
                    </select>
                </div>

                        <!--image1-->
               <div class="mb-3 w-50 m-auto">
                    <label for="exampleFormControlInput1" class="form-label">Product image1</label>
                      <input type="file" name="product_image1" id="product_image1" class="form-control form-control-sm" id="exampleFormControlInput1"
                     required="required">
                </div>
                        <!--image2-->
                <div class="mb-3 w-50 m-auto">
                    <label for="exampleFormControlInput1" class="form-label">Product image2</label>
                       <input type="file" name="product_image2" id="product_image2" class="form-control form-control-sm" id="exampleFormControlInput1"
                     required="required">
                </div>
                      <!--image3-->
                      <div class="mb-3 w-50 m-auto">
                    <label for="exampleFormControlInput1" class="form-label">Product image3</label>
                       <input type="file" name="product_image3" id="product_image3" class="form-control form-control-sm" id="exampleFormControlInput1"
                     required="required">
                </div>

                        <!--price-->
               <div class="mb-3 w-50 m-auto">
                    <label for="exampleFormControlInput1" class="form-label">Enter Product price</label>
                    <input type="text" name="product_price" id="product_price" class="form-control form-control-sm" id="exampleFormControlInput1" 
                    placeholder="Enter Price in Tz/sh" autocomplete="off" required="required">
                </div>

                       <!--submit-->
                <div class="mb-3 w-50 m-auto">
                    <button type="submit"class="btn btn-info btn-sm text-light mb-3 px-3" name="insert_product" value="Insert Product">Insert Product</button>
                </div>
          </form>
        </div>
        
    </body>
                        <!--java Scripts-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
</html>