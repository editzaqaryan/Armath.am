<?php
include_once('header.php');
include_once('linki.php');
include_once('link.php');
?>

<div class="wrap" id="wrapper">
	<div id="main">
		<div class="inner" id="iner">
			<h1>Ավելացնել նյութ</h1>
			<form class="upload" action="upload_code.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="file" >
		        <button type="submit" name="submit">Ավելացնել</button>
				<!-- <input type="submit" name="submit" value="Ներբեռնել"> -->
			</form>
			<section class="tiles">
				<?php
				$files = scandir("uploads");
				for ($i=2; $i < count($files) ; $i++) {
					echo "<article class='upload'>
    					<a href='uploads/. $files[$i] .' download='. $files[$i] .'>
    						<h2>. $files[$i] .</h2>
    					</a>
    					</article>";
				}
				 ?>
			</section>
		</div>
	</div>
</div>
 <?php
 $files = scandir("uploads");
 for ($i=2; $i < count($files) ; $i++) {

	?>
		<a href="uploads/<?php echo $files[$i] ?>" download="<?php echo $files[$i] ?>"><?php echo $files[$i] ?></a>
	<?php
 }
  ?>
