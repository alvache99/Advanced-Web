<?php
session_start();
$_SESSION["uid"]="123";
include "dbCon.php";

if(isset($_POST["category"])){
$cat_sql="SELECT * FROM catlist ORDER BY catID DESC";
$C_results= mysqli_query($connection,$cat_sql);
    
if(mysqli_num_rows($C_results) > 0){
    echo "<button type='button'' class='btn btn-primary dropdown-toggle' data-toggle='dropdown'>
                Categories
              </button>";
    echo"<div class='dropdown-menu'>";
    while($row = mysqli_fetch_array($C_results)){
      $cat_id = $row["catID"];
      $cat_title = $row["catName"];
      echo "<a class='dropdown-item category' cid='$cat_id' href='#'>$cat_title</a>";
  }
   echo"</div>"; 
  }
}



if(isset($_POST["products"])){
    
      $prod_sql="SELECT * FROM product ORDER BY RAND() LIMIT 0,12";

$P_results= mysqli_query($connection,$prod_sql);
if(mysqli_num_rows($P_results) > 0){
    while($row = mysqli_fetch_array($P_results)){
       $prod_id = $row["prod_id"];
       $prod_category = $row["prod_category"];
       $prod_name = $row["prod_name"];
       $prod_price = $row["prod_price"];
       $prod_description = $row["prod_description"];
       $prod_image = $row["prod_image"];
       $prod_keyword= $row["key_words"];
      echo "
       
    
      <div class='col' data-keywords='$prod_keyword'>
                    <div class='card' style='width:400px; height:550px;'>
                        <div class='card-body'>
                          <a href='#' class='each_product' product_id='$prod_id'><img class='card-img-bottom' src='../Images/$prod_image' alt='Card image' style='width:100%; height:300px;'></a>
                          <h4 class='card-title'>Name: $prod_name</h4>
                          <p class='card-text'>Price: $$prod_price</p>
                          <p class='card-text'>Description: $prod_description</p>
                          <a href='#' class='btn btn-primary' pid='$prod_id' id='$prod_id' >Add To Cart</a>
                        </div>
                      </div>
                </div>
       
      ";
        
        
        
       
                
  }   
    
}
}

/*** the below code is for 
 ** search for a keyword
 ** filter products by category
 ** display individual product
  ***/

if(isset($_POST["categories"]) || isset($_POST["search_keyword"])){
    if(isset($_POST["categories"])){
        $cid = $_POST["cat_id"];
    // category ID for all option
       if($cid ==5 || isset($_POST["products"])){        //select all products
       $sql="SELECT * FROM product ORDER BY RAND() LIMIT 0,12";  
       }else{
     //select products based on specific category id
       $sql="SELECT * FROM product WHERE prod_category ='$cid'";
      }
      } else{
         if(isset($_POST["search_keyword"])){
          $search_wd = $_POST["search_key"];
          $sql="SELECT * FROM product  WHERE key_words LIKE '%$search_wd%'";
        }}
    
    $results= mysqli_query($connection,$sql);
    
     while($row = mysqli_fetch_array($results)){
       $prod_id = $row["prod_id"];
       $prod_category = $row["prod_category"];
       $prod_name = $row["prod_name"];
       $prod_price = $row["prod_price"];
       $prod_description = $row["prod_description"];
       $prod_image = $row["prod_image"];
       $prod_keyword= $row["key_words"];
         
         
   /*** 
    *** in the code below
    the image is a link when clicking on it the individual product details will be displayed 
    ***/ 
         
             
      echo "

       <div class='col' data-keywords='$prod_keyword'>
                    <div class='card' style='width:400px; height:550px;'>
                        <div class='card-body'>
                          <a href='#' class='each_product' product_id='$prod_id'><img class='card-img-bottom' src='../Images/$prod_image' alt='Card image' style='width:100%; height:300px;'></a>
                          <h4 class='card-title'>Name: $prod_name</h4>
                          <p class='card-text'>Price: $$prod_price</p>
                          <p class='card-text'>Description: $prod_description</p>
                          <a href='#' class='btn btn-primary' pid='$prod_id' id='$prod_id' >Add To Cart</a>
                        </div>
                      </div>
                </div>
            
            ";
        }
}



/*if(isset($_POST["eachProduct"])){
    $pid = $_POST["prod_id"];
   
    //select products based on specific product id
    $sql="SELECT * FROM product WHERE prod_id ='$pid'";
    $results= mysqli_query($connection,$sql);
   echo $sql;
     while($row = mysqli_fetch_array($results)){
       $prod_id = $row["prod_id"];
       $prod_category = $row["prod_category"];
       $prod_name = $row["prod_name"];
       $prod_price = $row["prod_price"];
       $prod_description = $row["prod_description"];
       $prod_image = $row["prod_image"];
       $prod_owner = $row["prod_owner"];
       $prod_points =$row["prod_points"];
       $prod_condition =$row["prod_condition"];
       $prod_age = $row["prod_age"];
      echo "
      
      <div class='col' data-keywords='$prod_keyword'>
                    <div class='card' style='width:400px; height:550px;'>
                        <div class='card-body'>
                          <img class='card-img-bottom' src='../Images/$prod_image' alt='Card image' style='width:100%; height:800px;'>
                          <h4 class='card-title'>Name: $prod_name</h4>
                          <p class='card-text'>Price: $$prod_price</p>
                          <p class='card-text'>Description: $prod_description</p>
                          <p class='card-text'>Owner: $prod_owner</p>
                          <p class='card-text'>Points: $prod_points</p>
                          <p class='card-text'>Product ID: $prod_id</p>
                          <p class='card-text'>Condition: $prod_condition/10</p>
                          <p class='card-text'>Age of device: $prod_age/10</p>
                          <a href='#' class='btn btn-primary' pid='$prod_id' id='$prod_id' >Add To Cart</a>
                        </div>
                      </div>
                </div>
            ";
     }
}*/


?>