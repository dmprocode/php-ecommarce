
<?php
  //insert Product function
    function getproducts(){
        global $con;
        if(!isset($_GET['brand'])){
            if(!isset($_GET['category'])){
        //conditio to cheeck weather is set or not
        $select_query="SELECT * FROM `products` ORDER BY rand()limit 0,12;";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_name=$row['product_name'];
            $product_discription=$row['product_discription'];
            $product_keyword=$row['product_keyword'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            $product_img1=$row['product_img1'];
            $product_price=$row['product_price'];
            //echo $product_name;
            echo "<div class='col-md-3 mb-2'>
                     <div class='card'>
                         <img src='./admin_area/product_image/$product_img1' class='card-img-top' alt='$product_name'>
                         <div class='card-body'>
                             <h5 class='card-title'>$product_name</h5>
                             <h6 class='card-title'>Price:$product_price/=Tsh</h6>
                             <p class='card-text'>$product_discription</p>
                             <a href='index.php?add_to_cart=$product_id' class='btn btn-info btn-sm text-light'>Add to cart</a>
                             <a href='product_detail.php? product_id=$product_id' class='btn btn-secondary btn-sm'>View more</a>
                         </div>
                     </div>
                </div>";
        }
    

} 
} 
} 


                //display all product function
                function display_all_product(){
                    global $con;
                    if(!isset($_GET['brand'])){
                        if(!isset($_GET['category'])){
                    //conditio to cheeck weather is set or not
                    $select_query="SELECT * FROM `products` ORDER BY rand();";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_name=$row['product_name'];
                        $product_discription=$row['product_discription'];
                        $product_keyword=$row['product_keyword'];
                        $category_id=$row['category_id'];
                        $brand_id=$row['brand_id'];
                        $product_img1=$row['product_img1'];
                        $product_price=$row['product_price'];
                        //echo $product_name;
                        echo "<div class='col-md-3 mb-2'>
                                 <div class='card'>
                                     <img src='./admin_area/product_image/$product_img1' class='card-img-top' alt='$product_name'>
                                     <div class='card-body'>
                                         <h5 class='card-title'>$product_name</h5>
                                         <h6 class='card-title'>Price:$product_price/=Tsh</h6>
                                         <p class='card-text'>$product_discription</p>
                                         <a href='index.php?add_to_cart=$product_id' class='btn btn-info btn-sm text-light'>Add to cart</a>
                                         <a href='product_detail.php? product_id=$product_id' class='btn btn-secondary btn-sm'>View more</a>
                                     </div>
                                 </div>
                            </div>";
                    }
                
            
            } 
            } 
            } 


            

         //get unique  category
         function get_unique_category(){
            global $con;
             //conditio to cheeck weather is set or not
                if(isset($_GET['category'])){
                    $category_id=$_GET['category'];
            $select_query="SELECT * FROM `products` WHERE category_id =$category_id;";
            $result_query=mysqli_query($con,$select_query);
            $num_of_row=mysqli_num_rows($result_query);
            if($num_of_row==0){
                echo "<h2 class='text-center text-danger'>This category is not available in this stock</h2>";
            }
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_name=$row['product_name'];
                $product_discription=$row['product_discription'];
                $product_keyword=$row['product_keyword'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                $product_img1=$row['product_img1'];
                $product_price=$row['product_price'];
                //echo $product_name;
                echo "<div class='col-md-3 mb-2'>
                         <div class='card'>
                             <img src='./admin_area/product_image/$product_img1' class='card-img-top' alt='$product_name'>
                             <div class='card-body'>
                                 <h5 class='card-title'>$product_name</h5>
                                 <h6 class='card-title'>Price:$product_price/=Tsh</h6>
                                 <p class='card-text'>$product_discription</p>
                                 <a href='index.php?add_to_cart=$product_id' class='btn btn-info btn-sm text-light'>Add to cart</a>
                                 <a href='product_detail.php? product_id=$product_id' class='btn btn-secondary btn-sm'>View more</a>
                             </div>
                         </div>
                    </div>";
            }
        
    
    } 
    } 



      //geting unique brand
      function get_unique_brand(){
        global $con;
        if(isset($_GET['brand'])){
            $brand_id=$_GET['brand'];
        //conditio to cheeck weather is set or not
        $select_query="SELECT * FROM `products` WHERE brand_id=$brand_id";
        $result_query=mysqli_query($con,$select_query);
        $set_num_row=mysqli_num_rows($result_query);
        if($set_num_row==0){
            echo"<h2 class='text-center text-danger'>This brand is not available in this service</h2>";
        }
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_name=$row['product_name'];
            $product_discription=$row['product_discription'];
            $product_keyword=$row['product_keyword'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            $product_img1=$row['product_img1'];
            $product_price=$row['product_price'];
            //echo $product_name;
            echo "<div class='col-md-3 mb-2'>
                     <div class='card'>
                         <img src='./admin_area/product_image/$product_img1' class='card-img-top' alt='$product_name'>
                         <div class='card-body'>
                             <h5 class='card-title'>$product_name</h5>
                             <h6 class='card-title'>Price:$product_price/=Tsh</h6>
                             <p class='card-text'>$product_discription</p>
                             <a href='index.php?add_to_cart=$product_id' class='btn btn-info btn-sm text-light'>Add to cart</a>
                             <a href='product_detail.php? product_id=$product_id' class='btn btn-secondary btn-sm'>View more</a>
                         </div>
                     </div>
                </div>";
        }
} 
}     



 
      
        //brand name function
            function delivered_brand(){
                global $con;
                $select_brand="SELECT * FROM `brand`;";
                $result_brand=mysqli_query($con,$select_brand);
                //$row_data=mysqli_fetch_assoc($result_brand);
                //echo $row_data['brand_titl'];
                while($row_data=mysqli_fetch_assoc($result_brand)){
                    $brand_title=$row_data['brand_titl'];
                    $brand_id=$row_data['brand_id'];
                        echo"<li class='nav-item'>
                            <a href='index.php? brand=$brand_id'class='nav-link text-light'>$brand_title</a>
                        </li>";
                }                
                
            }



            //functio  get categories
            function categories_brand(){
                global $con;
                $select_categories="SELECT * FROM `category`;";
                $select_result=mysqli_query($con,$select_categories);
                while($row_data=mysqli_fetch_assoc($select_result)){
                    $category_title=$row_data['category_title'];
                    $category_id=$row_data['category_id'];
                    echo"
                    <li class='nav-item'>
                       <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                    </li>
                    ";
                }
            }


            
                         //Search product function 
                         function search_product(){
                             global $con;
                             if(isset($_GET['search_data_product'])){
                            $search_data_value=$_GET['search_data'];
                            $search_query="SELECT * FROM `products` WHERE product_keyword LIKE '%$search_data_value%';";
                            $result_query=mysqli_query($con,$search_query);
                            $set_num_row=mysqli_num_rows($result_query);
                            if($set_num_row==0){
                                echo"<h2 class='text-center text-danger'>No result match.No product found for this 
                                category!</h2>";
                            }
                                while($row=mysqli_fetch_assoc($result_query )){
                                $product_id=$row['product_id'];
                                $product_name=$row['product_name'];
                                $product_discription=$row['product_discription'];
                                $product_keyword=$row['product_keyword'];
                                $category_id=$row['category_id'];
                                $brand_id=$row['brand_id'];
                                $product_img1=$row['product_img1'];
                                $product_price=$row['product_price'];
                                //echo $product_name;
                                echo "<div class='col-md-3 mb-2'>
                                         <div class='card'>
                                             <img src='./admin_area/product_image/$product_img1' class='card-img-top' alt='$product_name'>
                                             <div class='card-body'>
                                                 <h5 class='card-title'>$product_name</h5>
                                                 <h6 class='card-title'>Price:$product_price/=Tsh</h6>
                                                 <p class='card-text'>$product_discription</p>
                                                 <a href='index.php?add_to_cart=$product_id' class='btn btn-info btn-sm text-light'>Add to cart</a>
                                                 <a href='product_detail.php? product_id=$product_id' class='btn btn-secondary btn-sm'>View more</a>
                                             </div>
                                         </div>
                                    </div>";

                            }
                        }
                    }



                   //function related image
                    function related_image(){
                        global $con;
                        if(isset($_GET['product_id']))
                        if(!isset($_GET['brand'])){
                            if(!isset($_GET['category'])){
                             $product_id=$_GET['product_id'];
                        //conditio to cheeck weather is set or not
                        $select_query="SELECT * FROM `products` WHERE product_id=$product_id;";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $product_id=$row['product_id'];
                            $product_name=$row['product_name'];
                            $product_discription=$row['product_discription'];
                            $product_keyword=$row['product_keyword'];
                            $category_id=$row['category_id'];
                            $brand_id=$row['brand_id'];
                            $product_img1=$row['product_img1'];
                            $product_img2=$row['product_img2'];
                            $product_img3=$row['product_img3'];
                            $product_price=$row['product_price'];
                            //echo $product_name;
                            echo "<div class='col-md-3 mb-2'>
                                     <div class='card'>
                                         <img src='./admin_area/product_image/$product_img1' class='card-img-top' alt='$product_name'>
                                         <div class='card-body'>
                                             <h5 class='card-title'>$product_name</h5>
                                             <h6 class='card-title'>Price:$product_price/=Tsh</h6>
                                             <p class='card-text'>$product_discription</p>
                                             <a href='index.php?add_to_cart=$product_id' class='btn btn-info btn-sm text-light'>Add to cart</a>
                                             <a href='index.php' class='btn btn-secondary btn-sm text-light'>Go home</a>
                                             
                                         </div>
                                     </div>
                                </div>
                                <div class='col-md-9'>
                                  <div class='class row'>
                                      <!--related image-->
                                    <div class='col-md-12'>
                                        <h4 class='text-center text-info my-5'>Related Product</h4>
                                    </div>
                                      <!--related image-->
                                    <div class='col-md-6'>
                                       <img src='./admin_area/product_image/$product_img2' class='card-img-top' alt='$product_name'>
                                    </div>
                                    <div class='col-md-6'>
                                      <img src='./admin_area/product_image/$product_img3' class='card-img-top' alt='$product_name'>
                                    </div>
                                </div>
                               
                         </div>";
                         
                         
                        }
                    
                
                } 
                } 
                }       
            //get ip address  
            function getIPAddress() {  
                //whether ip is from the share internet  
                 if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                            $ip = $_SERVER['HTTP_CLIENT_IP'];  
                    }  
                //whether ip is from the proxy  
                elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
                 }  
            //whether ip is from the remote address  
                else{  
                         $ip = $_SERVER['REMOTE_ADDR'];  
                 }  
                 return $ip;  
            }  
         
            
            // cart function
            function cart(){
                if(isset($_GET['add_to_cart'])){
                    global $con;
                    $get_ip_address=getIPAddress(); 
                    $get_product_id=$_GET['add_to_cart'];
                    $select_query="SELECT * FROM `cart_detail` WHERE ip_address='$get_ip_address' AND product_id= $get_product_id";
                    $result_query=mysqli_query($con,$select_query);
                    $num_of_rows=mysqli_num_rows($result_query);
                    if($num_of_rows>0){
                        echo"<script>alert('This iteams is allready present in the cart')</script>";
                        echo"<script>window.open('index.php','_self')</script>";
                    }
                        else {
                            global $con;
                            $get_product_id=$_GET['add_to_cart'];
                            $insert_query="INSERT INTO `cart_detail` (ip_address,product_id,quantity) VALUES('$get_ip_address',$get_product_id,0);";
                            $result_query=mysqli_query($con,$insert_query);
                                echo"<script>alert('iteams is added to cart')</script>";
                                echo"<script>window.open('index.php','_self')</script>";
                          
                        }
                    }
                    
                }
            

                //function to get cart iteams  numbers 

                function cart_items(){
                    if(isset($_GET['add_to_cart'])){
                        global $con;
                        $get_ip_address = getIPAddress(); 
                        $select_query="SELECT * FROM `cart_detail` WHERE ip_address='$get_ip_address';";
                        $result_query=mysqli_query($con,$select_query);
                        $count_cart_iteam=mysqli_num_rows($result_query);
                        }
                            else {
                                global $con;
                                $get_ip_address = getIPAddress(); 
                                $select_query="SELECT * FROM `cart_detail` WHERE ip_address='$get_ip_address';";
                                $result_query=mysqli_query($con,$select_query);
                                $count_cart_iteam=mysqli_num_rows($result_query);
                              
                            }
                            echo $count_cart_iteam;
                    }
                        
                    //total price function

                    function total_price(){
                        global $con;
                        $get_ip_address = getIPAddress();
                        $total=0; 
                        $cart_query="select * from `cart_detail` where ip_address='$get_ip_address';";
                        $result=mysqli_query($con,$cart_query);
                        while($row=mysqli_fetch_array($result)){
                            $product_id=$row['product_id'];
                            $select_product="select * from products where  product_id ='$product_id';";
                            $result_product=mysqli_query($con,$select_product);
                            while($row_product_price=mysqli_fetch_array($result_product)){
                                $poduct_price=array($row_product_price['product_price']);
                                $product_sum=array_sum($poduct_price);
                                $total+=$product_sum;
                            }
                        } 
                        echo $total;

                    }
?>