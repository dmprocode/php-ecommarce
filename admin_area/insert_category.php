 
 <?php
   include('../include/connect.php');
   if(isset($_POST['insert_cart'])){
       $category_title=$_POST['cart_title'];
       $select_query="SELECT * FROM `category` WHERE  category_title='$category_title';";
       $result=mysqli_query($con,$select_query);
       $number=mysqli_num_rows($result);
       if($number>0){
           echo"<script>alert('This category is present in a data base')</script>";
       }
       else{
       $sql="INSERT INTO `category` (`category_title`) VALUE ('$category_title');";
       $result=mysqli_query($con,$sql);
       if($result){
           echo "<script> alert('Category has been added saccesfully')</script>";
       }
       else{
           echo'erro';
       }
    }
}
   
 ?>
   <div class="h2 text-center">Insert Category</div>
 <form action="" method="post" class=" mb-2">
        <div class="input-group mw-90 mb-2">
            <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
            <input type="text" class="form-control form-control-sm" name="cart_title" 
            placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        
        <div class="input-group mw-10 mb-2 m-outo">
             <button  class="submit bg-info p-1 border-0 my-2" name="insert_cart" value="insert_category" >Insert categories</button>
            
        </div>

 </form>