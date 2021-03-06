<?php  defined('C5_EXECUTE') or die("Access Denied.");
if (!function_exists('compat_is_version_8')) {
    function compat_is_version_8() {
        return interface_exists('\Concrete\Core\Export\ExportableInterface');
    }
}
?>

		<!-- Footer -->
		<div class="footer-container">
			<footer class="footer-content-inner" role="contentinfo">
				<div class="container">
					<div class="row" style="background-color:#44413e;">
						<!-- Social Button -->
						<div class="social-button col-sm-3">
							<nav>
								<?php
								$a = new GlobalArea('Footer Social');
								$a->display();
								?>
							</nav>
						</div><!-- //Social Button -->		
						<!-- Footer Adres -->
						<div class="footer-adres col-sm-3">
							<?php
							$a = new GlobalArea('Footer Adres');
							$a->display();
							?>
						</div><!-- //Footer Adres -->										
						<!-- Footer Navigation -->
						<div class="footer-nav col-sm-3">
							<?php
							$a = new GlobalArea('Footer Navigation');
							$a->display();
							?>
						</div><!-- //Footer Navigation -->
						<!-- Footer Openingstijden -->
						<div class="footer-nav col-sm-3">
							<?php
							$a = new GlobalArea('Footer Openingstijden');
							$a->display();
							?>
						</div><!-- //Footer Openingstijden -->					

					</div>
					<div class="row">						
						<div class="col-sm-3 footer-white">
							<?php
							$a = new GlobalArea('Footer Copyright');
							$a->display();
							?>
						</div>
						
						<div class="col-sm-9 footer-green">
							<?php
							$a = new GlobalArea('Footer Green Copyright');
							$a->display();
							?>
						</div>						
						<div id="scroll-page-top">
							<a href="#container" class="top"><?php  echo t('Back to Top')?></a>
						</div>
					</div>
				</div>
				<?php if ( compat_is_version_8() ): ?>
				<span id="ccm-account-menu-container"></span>
				<?php endif; ?>
			</footer>
		</div><!-- //Footer -->

    	</div>

		<?php   Loader::element('footer_required'); ?>

        <script src="<?php  echo $view->getThemePath()?>/js/main.js"></script>

    </body>
</html>
