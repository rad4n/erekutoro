<?php if ($mod==""){
	header('location:../../404.php');
}else{
?>
<!--
*******************************************************
	Include Header Template
*******************************************************
-->
<?php include_once "po-content/$folder/header.php"; ?>

<!--
*******************************************************
	Main Content Template
*******************************************************
-->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 banner-bottom-left">
				<h2>Tutorial terbaru</h2>
				<ul>
					<?php
							$tablenewpost = new PoTable('post');
							$items = $tablenewpost->findAllLimitByAnd(id_post, active, headline, 'Y', 'Y', DESC, '5');
							foreach($items as $item){?>
					<li><a href="<?php echo "$website_url/detailpost/$item->seotitle"; ?>"><?=$item->title;?></a></li>
					<?php }?>
				</ul>
				<div class="more">
					<a href="single.html">More Info</a>
				</div>
			</div>
			<div class="col-md-6 banner-bottom-right"></div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- events -->
	<div class="events">
		<div class="container">
			<h3>Layanan Kami</h3>
			<div class="events-grids">
				<div class="col-md-4 events-gridl">
					<div class="col-xs-3 events-grid">
						<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 events-grid-right">
						<h4>Download Content</h4>
						<p>Silahkan untuk mendownload berbagai konten menarik dari kami.</p>
						<div class="more">
							<a href="single.html">More Info</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 events-gridl">
					<div class="col-xs-3 events-grid">
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 events-grid-right">
						<h4>Event</h4>
						<p>Acara atau kegiatan yang akan kami selenggarakan dapat Anda lihat disini.</p>
						<div class="more">
							<a href="single.html">More Info</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 events-gridl">
					<div class="col-xs-3 events-grid">
						<span class="glyphicon glyphicon-oil" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 events-grid-right">
						<h4>Shop</h4>
						<p>Lihat berbagai produk atau service yang dapat Anda beli disini.</p>
						<div class="more">
							<a href="single.html">More Info</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="activities">
				<div class="col-md-6 activities-grid">
					<div class="col-md-5 activities-left">
						<img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/4.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-7 activities-right">
						<h4>Sosok Inspiratif</h4>
						<p> Temporibus autem quibusdam et aut officiis debitis aut rerum
							necessitatibus saepe eveniet ut et voluptates repudiandae sint
							et molestiae.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 activities-grid">
					<div class="col-md-5 activities-left">
						<img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/3.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-7 activities-right">
						<h4>Sosok Inspiratif 2</h4>
						<p> Temporibus autem quibusdam et aut officiis debitis aut rerum
							necessitatibus saepe eveniet ut et voluptates repudiandae sint
							et molestiae.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //events -->
<!-- events-bottom -->
	<div class="events-bottom">
		<div class="container">
			<div class="col-md-6 banner-bottom-right events-btm1"></div>
			<div class="col-md-6 banner-bottom-left">
				<h2>Video tutorial terbaru</h2>
				<ul>
					<li><a href="#">Culpa qui officia deserunt mollit cupidatat non</a></li>
					<li><a href="#">Excepteur sint occaecat cupidatat non officia deserunt</a></li>
					<li><a href="#">Neque porro quisquam est, qui dolorem sint occaecat</a></li>
					<li><a href="#">Temporibus autem quibusdam et aut porro quisquam</a></li>
					<li><a href="#">Culpa qui officia deserunt mollit cupidatat non</a></li>
				</ul>
				<div class="more">
					<a href="single.html">More Info</a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //events-bottom -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Testimonials</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<?php
								$tablenewtestimoni = new PoTable('users');
								$items = $tablenewtestimoni->findAllLimitBy(id_user,status_testimonial, 'Y', DESC, '6'); $i=1;
								foreach($items as $item){
									if($i==1){echo "<li><div class='testimonials-grid'>";}?>
								<div class="col-md-6 testimonials-grid-left">
									<div class="testimonials-grid-left1">
										<img src="<?=$website_url;?>/po-content/po-upload/user-<?=$item->userpicture;?>" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right1">
										<p><span>L</span><?=$item->testimonial;?></p>
									</div>
									<div class="clearfix"> </div>
								</div>
					 		<?php if($i==2){echo "</div></li>";}?>
						<?php $i++; if($i==3){$i=1;}}?>
					</ul>
				</div>
			</section>
				<!--FlexSlider-->
						<link rel="stylesheet" href="<?=$website_url;?>/po-content/<?=$folder;?>/css/flexslider.css" type="text/css" media="screen" />
						<script defer src="<?=$website_url;?>/po-content/<?=$folder;?>/js/jquery.flexslider.js"></script>
						<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
				<!--End-slider-script-->
		</div>
	</div>
<!-- //testimonials -->

<!--
*******************************************************
	Include Footer Template
*******************************************************
-->
<?php include_once "po-content/$folder/footer.php"; ?>
<?php } ?>
