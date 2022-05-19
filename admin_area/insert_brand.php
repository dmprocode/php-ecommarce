<?php
   include('../include/connect.php');
   if(isset($_POST['insert_brand'])){
       $brand_titl=$_POST['brand_titl'];
       $select_query="SELECT * FROM `brand` WHERE  brand_titl='$brand_titl';";
       $result=mysqli_query($con,$select_query);
       $number=mysqli_num_rows($result);
       if($number>0){
           echo"<script>alert('This Brand is present in a data base')</script>";
       }
       else{
       $sql="INSERT INTO `brand` (`brand_titl`) VALUE ('$brand_titl');";
       $result=mysqli_query($con,$sql);
       if($result){
           echo "<script> alert('This Brand has been added saccesfully')</script>";
       }
       else{
           echo'erro';
       }
    }
}
   
 ?>
 <h2 class="text-center">Insert Brand</h2>
<form action="" method="POST" class=" mb-2">
        <div class="input-group mw-90 mb-2">
            <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
            <input type="text" class="form-control form-control-sm" name="brand_titl" 
            placeholder="Insert Brands" aria-label="Brand" aria-describedby="basic-addon1" required>
        </div>
        
        <div class="input-group mw-10 mb-2 m-outo">
           <button  class="submit bg-info p-1 border-0 my-2" name="insert_brand" value="Insert Brand" >Insert Brand</button>
        </div>

 </form>

 