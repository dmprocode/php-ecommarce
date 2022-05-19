<?php include('../include/connect.php');?>
<?php
    if(isset($_POST['insert_product'])){
        $product_title=$_POST["product_title"];
        $discription=$_POST['discription'];
        $keyword_keyword=$_POST['keyword_keyword'];
        $product_category=$_POST['product_category'];
        $product_brand=$_POST['product_brand'];
        $product_price=$_POST['product_price'];
        $status='true';
                //accessing image
        $product_image1=$_FILES['product_image1']['name'];
        $product_image2=$_FILES['product_image2']['name'];
        $product_image3=$_FILES['product_image3']['name'];
            //accessing image tmp name
        $temp_image1=$_FILES['product_image1']['tmp_name'];
        $temp_image2=$_FILES['product_image2']['tmp_name'];
        $temp_image3=$_FILES['product_image3']['tmp_name'];
            //cheack empty condition
        if( $product_title=='' or  $discription==''or $keyword_keyword=='' or $product_category==''
        or $product_brand=='' or  $product_image1==''or $product_image2=='' or $product_image3==''or $product_price==''){
                echo"<script> alert('Please feal this the available field') </script>";
                exit();
            }  
            else{
                move_uploaded_file($temp_image1,"./product_image/$product_image1");
                move_uploaded_file($temp_image2,"./product_image/$product_image2");
                move_uploaded_file($temp_image3,"./product_image/$product_image3");
            }
                    // insert query
        $insert_product="INSERT INTO `products`(product_name,product_discription,product_keyword,category_id,brand_id,
                        product_img1,product_img2,product_img3,product_price,date,status) VALUES('$product_title','$discription',
                        '$keyword_keyword','$product_category','$product_brand','$product_image1','$product_image2',
                        '$product_image3','$product_price', NOW(),'$status');";
       $result=mysqli_query($con,$insert_product);
        if($result){
            echo"<script>alert('Prodact is added saccessfull added')</script>";
            echo"<script>window.open('index.php','-self')</script>";
        }
        else{
            echo"<script>alert('Error')</script>";
        }
                                
    }

?>
