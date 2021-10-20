<?php 
	include "includes/header.php";
 ?>

	<nav>
		<ul>
			<li><a href="counter.php">Counter</a></li>
			<li><a href="about.php">About gallery</a></li>
			<li><a href="contacts.php">Contact</a></li>
		</ul>
	</nav>

	<section class="banner">
		<img src="includes/images/banner.jpg">
		<div class="inner">
			<h1 id="tekst">Welcome to "The Gallery"</h1>
			<p id="tekst2">&#8659; Feel free to upload your pictures bellow &#8659;</p>
			<button class="upload" id="upload"><span>Upload Image</span></button>
		</div>
	</section>

	<div id="img-upload" class="upload-slika">
		<?php
			if (isset($_SESSION['username'])) {
				echo '<div class="gallery-upload">
					<form action="includes/gallery-uploads-inc.php" method="POST" enctype="multipart/form-data">
						<input type="text" name="filetitle" placeholder="Image title"><br><br>
						<input type="text" name="filedescription" placeholder="Image description"><br><br>
						<input type="file" name="file" class="file" id="file"><br><br>
						<button type="submit" name="submit" id="upload-img">Upload</button>
					</form>
				</div>';
					}
				
				?>
	</div>

	<script src="includes/js/upload-button.js"></script>

	<script src="includes/js/textanimation.js"></script>

	<form action="index.php" method="POST" class="order">
		<h3>Order by:</h3>
		<button id="newest" class="btn" name="newest">Newest</button>
  		<button id="oldest" class="btn" name="oldest">Oldest</button>
	</form>

		

	<main>
		<section class="gallery-links">
			<div class="wrapper">	
				<div class="gallery-container" id="index-gallery">

					<?php
						if (isset($_POST['oldest'])) {
							include_once "includes/dbh.inc.php";
						$sql= "SELECT * FROM gallery ORDER BY idGallery ASC;";
						
						$stmt = mysqli_stmt_init($conn);
						if (!mysqli_stmt_prepare($stmt, $sql)) {
							echo "SQL statement failed!";
						} else{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);

							while ($row = mysqli_fetch_assoc($result)) {
								echo '<a href="#">
								<div class="gallery-img" style="background-image: url(img/'.$row["imgFullNameGallery"].');"></div>
								<h3>'.$row["titleGallery"].'</h3>
								<p>'.$row["descGallery"].'</p>
								</a>';
							}
						}
						} else{
							include_once "includes/dbh.inc.php";
							$sql= "SELECT * FROM gallery ORDER BY idGallery DESC;";
						
							$stmt = mysqli_stmt_init($conn);
							if (!mysqli_stmt_prepare($stmt, $sql)) {
							echo "SQL statement failed!";
							} else{
							mysqli_stmt_execute($stmt);
							$result = mysqli_stmt_get_result($stmt);

							while ($row = mysqli_fetch_assoc($result)) {
								echo '<a href="#">
								<div class="gallery-img" style="background-image: url(img/'.$row["imgFullNameGallery"].');"></div>
								<h3>'.$row["titleGallery"].'</h3>
								<p>'.$row["descGallery"].'</p>
								</a>';
							}
							}
						}

					?>

				</div>

				<script src="includes/js/gallery.js"></script>

			</div>
		</section>
	</main>
	<?php 
		include "includes/footer.php";
	 ?>
</body>
</html>