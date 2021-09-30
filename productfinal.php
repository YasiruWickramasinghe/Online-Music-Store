



<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "stock_details");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
	$product_name = mysqli_real_escape_string($db, $_POST['pname']);
	$product_price = mysqli_real_escape_string($db, $_POST['price']);
	$product_description = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO products (image, product_name, product_price, product_description  ) VALUES ('$image', '$product_name', '$product_price','$product_description')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
   if(isset($_POST['delete'])){
	  
      $sql_delete = "DELETE FROM products WHERE product_id = $_POST[hidden]";
      mysqli_query($db, $sql_delete);
   
   }
   
   
   
   
  
  $result = mysqli_query($db, "SELECT * FROM products");
?>
<!DOCTYPE html> 
<html>
<head>

<title>Image Upload</title>

 <link rel="stylesheet" type="text/css" href="productfinal.css">

</head>	

<body>
<center><h1>Add Product</h1></center>
<hr>
<div id="container">

		<!--Menu bar-->
		<ul class="menu">
					

			<li class="menu" ><a href="home.html">Dashboard</a></li>
			<li class="menu" ><a href="productfinal.php">Product Editing</a></li>
			<li class="menu" ><a href="regDetails.php">Register Details</a></li>
		    <li class="menu"><a href="contactDetails.php">customer Feedback</a></</li>
			<li class="menu"><a href="paymentDetails.php">Payment Details</a></</li>
		
	
		</ul>

 



 <?php
  
     
    while ($row = mysqli_fetch_array($result)) {
		
		echo "<form action=productfinal.php method =post>";
        echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
		echo "<p><b>Product id :</b> ".$row['product_id']."</p>";
      	echo "<p><b>Product Name :</b> ".$row['product_name']."</p>";
		echo "<p><b>Product Price :</b>Rs.".$row['product_price']."</p>";
		echo "<p><b>Product Description :</b>" .$row['product_description']."</p>";
		echo "<table>";
		echo "<td><input type='submit' name='delete' class = 'bu1' value ='DELETE'></td>";
	    echo "<td><input type='hidden' name='hidden' value = ".$row['product_id']." </td>";
	    echo '</th>';
		echo '</table>';
		echo "</div>";
		echo "</form>";
		
    }
  ?>
  
  </div>
  
  <form method="POST" action="productfinal.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
	  <label for ="img"><b>UPLOADING IMAGE</b></label> <br>
  	  <input type="file" name="image">
  	</div>
	
	<div>
	<label for="productnm"><b>Product Name</b></label> <br>
			<input type="text" placeholder="Enter Product name" name="pname"> <br>
	</div>
	<div>
     	<label for="pra"><b>Price</b></label> <br>
			<input type="text" placeholder="Enter Price" name="price"> <br>
	</div>
  	<div>
	
     <label for="tet"><b>Description</b></label> <br>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="product description..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload" class = "bu">POST</button>
        
		<form>
        <input type="button" value="UPDATE"  class = "bu"onclick="window.location.href='edit.php';" />
        </form>
		
  	</div>
  </form>
</div>
</body>
</html>