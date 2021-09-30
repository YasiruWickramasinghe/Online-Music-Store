<?php

// php code to Update data from mysql database Table

if(isset($_POST['update'])){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stock_details";
	
	//Create connection
	$con = new mysqli($servername, $username, $password, $dbname); //connection object/
	
	//Check connection
	if($con -> connect_error)
	{
		die("Connection Failed: " . $con -> connect_error);
	}
	echo "Connected Successfully";


   // get values form input text and number
     $id = $_POST['id'];
   $pname = $_POST['pname'];
   $price = $_POST['price'];
   $text = $_POST['text'];


  

   // mysql query to Update data
   $query = "UPDATE `products` SET  `product_name`='".$pname."',`product_price`='".$price."',`product_description`= '".$text."'   WHERE `product_id` = $id";
   
   $result = mysqli_query($con, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($con);
 
}

?>

<!DOCTYPE html>

<html>
	
    <head>
	<img src="5.jpg" alt="RythmLK"  class="about">
	<script src="js/product.js"></script>

        <title> UPDATE DATA </title>
		
		
		<link rel="stylesheet" type="text/css" href="edit.css">

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
	
	<center> <h1>UPDATE PRODUCT</h1> </center>
	<hr>


       <form action="edit.php" method="post">
		
         <div class = form>
			
            <label><b>ID To Update:</b></label> 
	        <input type="number" name="id" required><br><br>

            <label><b>PRODUCT NAME:</b></label> 
			<input type="text" name="pname" ><br><br>

            <label><b>PRICE:</b></label> 
			<input type="text" name="price" placeholder ="lkr.."><br><br>

           <label><b>DESCRIPTION:</b></label> 
			<textarea id="text" name="text" rows = "5" cols ="50" placeholder ="details ....."></textarea><br><br>
           <table>
		   
        <th>   <input type="submit" name="update" value="Update Data" class ="bu" onclick="productForm()"><br> </th>
         
          <th> <input type="button" value="BACK" class="bu" onclick="window.location.href='productfinal.php';" /> </th>
		  </table>
</div>

        </form>

    </body>


</html>