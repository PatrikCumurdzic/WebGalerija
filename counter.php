<?php 
	include "includes/header.php";
 ?>

 <body>

 	<p class="number">There is currently <?php  
 		include_once "includes/dbh.inc.php";
		$sql= "SELECT orderGallery FROM gallery ORDER BY idGallery DESC;";
						
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			echo "SQL statement failed!";
		} else{
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			$row = mysqli_fetch_assoc($result);
				echo '<span>'.$row["orderGallery"].'</span>';
			}
		
 	?> images in our gallery.</p>
 	
 <style type="text/css">
 	.number{
 		
 		text-align: center;
 		font-size: 80px;
 		font-family: arial;
 		margin: 38vh auto;
 	}
 	span{
 		font-family: cursive;
 		font-size: 160px;
 	}
 	footer{
		position: fixed;
		bottom: 0;
		width: 100%;
	}
 </style>

 <?php 
	include "includes/footer.php";
 ?>

 </body>
 </html>