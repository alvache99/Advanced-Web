<?php
include "dbCon.php";
$pid = $_POST["prod_id"];
//select products based on specific product id
$sql="SELECT * FROM product WHERE prod_id ='$pid'";
$results= mysqli_query($connection,$sql);

 while($row = mysqli_fetch_array($results)){
   $prod_id = $row["prod_id"];
   $prod_category = $row["prod_category"];
   $prod_name = $row["prod_name"];
   $prod_price = $row["prod_price"];
   $prod_description = $row["prod_description"];
   $prod_image = $row["prod_image"];
   $prod_age=$row["prod_age"];
   $prod_condition =$row["prod_condition"];
   $prod_points = $row["prod_points"];
   $prod_owner =$row["prod_owner"];
   $prod_keyword = $row["key_words"];
  echo "

  <div class='col' data-keywords='$prod_keyword'>
                    <div class='card' style='width:1200px; height:900px;'>
                        <div class='card-body'>
                          <img class='card-img-bottom' src='../Images/$prod_image' alt='Card image' style='width:400px; height:300px;'>
                          <h4 class='card-title'>Name: $prod_name</h4>
                          <p class='card-text'>Price: $$prod_price</p>
                          <p class='card-text'>Description: $prod_description</p>
                          <p class='card-text'>Owner: $prod_owner</p>
                          <p class='card-text'>Points: $prod_points</p>
                          <p class='card-text'>Product ID: $prod_id</p>
                          <p class='card-text'>Condition: $prod_condition/10</p>
                          <p class='card-text'>Age of device: $prod_age months</p>
                          <a href='shopPage.php' class='btn btn-primary'>Shop</a>
                        </div>
                      </div>
                </div>
        ";
 }

?>