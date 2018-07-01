<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/header_top.php');
?>
		<div class="topmenu-bar">
			<div class="container">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div class="row">
						<div class="beyoutifull-logo">
						</div>
					</div>					
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<div class="row">
						<div class="bocht">
						</div>
					</div>	
				</div>
			</div>
		</div>	
		<!-- Global Navigation -->
		<div class="menu-bar">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="row">
						<div class="menu-bar">
						
							<?php
							$a = new GlobalArea('Navigatie');
							
							$a->display();
							?>
						
						</div>
					</div>					
				</div>
			</div>
		</div>
		<!-- // Banner -->
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					
					
						<?php
						$a = new Area('Be-Banner');
						
						$a->display();
						?>
					
					
				</div>					
			</div>
		</div>
			

