<?php if ($mod==""){
	header('location:../../404.php');
}else{
?>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<h3>Disclaimer</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
						eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
						minim veniam, quis nostrud exercitation.</p>
					<a class="exam" href="mailto:example@mail.com">www.example.com</a>

				</div>
				<div class="col-md-4 footer-grid">
					<h3>Our Dealers</h3>
					<div class="dealer-grids">
						<div class="dealer-grid-left">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/7.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="dealer-grid-right">
							<h4><a href="#">soluta nobis est eligendi</a></h4>
							<p>Temporibus autem quibusdam et aut officiis debitis
								aut rerum necessitatibus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="dealer-grids">
						<div class="dealer-grid-left">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="dealer-grid-right">
							<h4><a href="#">soluta nobis est eligendi</a></h4>
							<p>Temporibus autem quibusdam et aut officiis debitis
								aut rerum necessitatibus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<h3>Flickr Posts</h3>
					<div class="footer-grds">
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/8.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/6.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/7.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grds">
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/7.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/6.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/8.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grd">
							<a href="#"><img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<div class="footer-left">
				<p>© 2015 Erekturo. All rights reserved | Design by <a href="#">Kerendi Developers</a></p>
			</div>
			<div class="footer-right">
				<ul>
					<li><a href="#" class="p"> </a></li>
					<li><a href="#" class="facebook"> </a></li>
					<li><a href="#" class="in"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
    <!-- JavaScript -->

</body>
</html>
<?php } ?>
