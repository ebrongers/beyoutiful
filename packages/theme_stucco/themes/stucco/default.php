<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header.php');
?>

<!--  Main Contents DEFAULT-->

<div id="main-content" class="main-container">
	<div class="main-content-inner clearfix">
		<div class="row">
			<div class="col-sm-12">
			<?php
						$a = new Area('Hoofd tekst');
						$a->display();
					?>
			</div>

		</div>


	</div>
</div><!-- // Main Contents -->

<?php  $this->inc('inc/footer.php'); ?>
