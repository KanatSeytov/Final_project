<?php
$table = mysqli_connect("localhost", "root", "", "FinalProject");

// Check connection
if (!$table) {
    die("Connection failed: " . mysqli_connect_error());
}

$content = trim(file_get_contents("php://input"));

$decoded = json_decode($content, true);
echo var_dump($decoded);

if(isset($decoded["name"])){

	if ($decoded["action"]==="insert") {
		# code...
	    $sql = "INSERT INTO `products` (`id`, `name`, `price`, `img`) VALUES (NULL, '".$decoded['name']."', '".$decoded['price']."', '".$decoded['img']."')";
	    if ($table->query($sql) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $sql . "<br>" . $table->error;
	    }
	
	}

	if ($decoded["action"]==="select") {
		# code...
		$name=$decoded['name'];
		$price=$decoded['price'];
		$image=$decoded['img'];

//	$sql = "SELECT *  FROM `products` WHERE `name` LIKE \'Bread\' AND `price` = 4000 AND `img` LIKE \'images/bread.jpg\'";
$sql = "SELECT * FROM `products`  WHERE 'name'=" . $name . " AND 'price'=" .$price . " AND 'img'=".$image;
		#SELECT * FROM `products` WHERE `name`='Bread' AND `price`= '4000' AND `img`= 'images/bread.jpg'
		if ($table->query($sql) === TRUE) {
	        echo "New record created successfully";
	    } else {
	        echo "Error: " . $sql . "<br>" . $table->error;
	    }

	}
    
}

$table->close();

?>
