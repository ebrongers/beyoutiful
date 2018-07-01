<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header.php');
?>

		<!--  Main Contents home-->
		<div id="main-content" class="container">
			<div class="">

				<main role="main">
				<div class="row">
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Kolom-1');
						$a->display();
					?>
					</div>
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Kolom-2');
						$a->display();
					?>
					</div>
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Kolom-3');
						$a->display();
					?>
					</div>
				
				</div>
				<div class="row" style="background-color:#a0b8a1">
					<div class="col-sm-6 kolom-2">
					<?php
						$a = new Area('Kolom-4');
						$a->display();
					?>
					</div>
					<div class="col-sm-6 kolom-2">
					<?php
						$a = new Area('Kolom-5');
						$a->display();
					?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Instagram-1');
						$a->display();
					?>
					</div>
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Instagram-2');
						$a->display();
					?>
					</div>
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Instagram-3');
						$a->display();
					?>
					</div>
				
				</div>				
				<div class="row">
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Instagram-4');
						$a->display();
					?>
					</div>
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Instagram-5');
						$a->display();
					?>
					</div>
					<div class="col-sm-4 kolom-1">
					<?php
						$a = new Area('Instagram-6');
						$a->display();
					?>
					</div>
				
				</div>					
				</main>

			</div>
		</div><!-- // Main Contents -->

<?php  $this->inc('inc/footer.php'); ?>
