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

<!-- single -->
<?php
		$title = $val->validasi($_GET['id'],'xss');
		$detail = new PoTable();
		$currentDetail = $detail->findManualQuery($tabel = "post,users,category", $field = "", $condition = "WHERE users.id_user = post.editor AND category.id_category = post.id_category AND category.active = 'Y' AND post.active = 'Y' AND post.seotitle = '".$title."'");
		$currentDetail = $currentDetail->current();
		$idpost = $currentDetail->id_post;

		if ($currentDetail > 0){
		$tabledpost = new PoTable('post');
		$currentDpost = $tabledpost->findByPost(id_post, $idpost);
		$currentDpost = $currentDpost->current();

		$contentdet = html_entity_decode($currentDetail->content);
		$biodet = html_entity_decode($currentDetail->bio);

		$tabledcat = new PoTable('category');
		$currentDcat = $tabledcat->findBy(id_category, $currentDetail->id_category);
		$currentDcat = $currentDcat->current();

		$p = new Paging;
		$batas = 5;
		$posisi = $p->cariPosisi($batas);
		$tabledcom = new PoTable('comment');
		$composts = $tabledcom->findAllLimitByAnd(id_comment, id_post, active, "$idpost", "Y", "ASC", "$posisi,$batas");
		$totaldcom = $tabledcom->numRowByAnd(id_post, $idpost, active, 'Y');

		mysql_query("UPDATE post SET hits = $currentDetail->hits+1 WHERE id_post = '".$idpost."'");
?>
	<div class="single">
	<div class="container">
		<h3><?=$currentDpost->title;?></h3>
		<div class="single-left">
			<p>Published on <span>August 21,2015</span></p>
			<img src="<?=$website_url;?>/po-content/po-upload/<?=$currentDetail->picture;?>" alt="<?=$currentDpost->title;?>" class="img-responsive" />
		</div>
		<?=$contentdet;?>
		<?php }?>
		<div class="tags-cate">
			<div class="cat-grid">
				<h3><span>C</span>ategories</h3>
				<ul>
					<?php
							$tablesidecat = new PoTable('category');
							$tablejmlpost = new PoTable('post');
							$sidecats = $tablesidecat->findAllRand();
							foreach($sidecats as $sidecat){
									$tablejmlposts = $tablejmlpost->numRowByAnd(id_category, $sidecat->id_category, active, 'Y');
					?>
					<li><a href="<?=$website_url;?>/category/<?=$sidecat->seotitle;?>" title="<?=$sidecat->title;?>"><?=$sidecat->title;?></a></li>
					<?php }?>
				</ul>
			</div>
			<div class="cat-grid">
				<h3><span>A</span>rchives</h3>
				<ul>
					<li><a href="#">Jan 24,2010.</a></li>
					<li><a href="#">April 15,2012.</a></li>
					<li><a href="#">Sep 24,2012.</a></li>
					<li><a href="#">May 24,2014.</a></li>
					<li><a href="#">April 15,2014.</a></li>
					<li><a href="#">August 21,2015.</a></li>
				</ul>
			</div>
			<div class="cat-grid">
				<h3><span>T</span>ags</h3>
				<div class="top-social-icons">
					<?php
							$tabletag = new PoTable('tag');
							$tags = $tabletag->findAll(id_tag, DESC);
							$arrtags = explode(',', $currentDetail->tag);
							  foreach($tags as $tag){
									$cek = (array_search($tag->tag_seo, $arrtags) != false)? '' : 'display:none;';?>
									<a style='<?=$cek;?>' href="<?=$website_url/search-result/$tag->tag_title;?>"><?=$tag->tag_title;?></a>
					<?php
	 				}?>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="three-com">
			<h3><?=$totaldcom;?> Comments <span>on</span> <label><?=$currentDpost->title;?></label></h3>
			<?php
					foreach($composts as $compost){
					$comcontent = nl2br($compost->comment);
			?>
			<div class="tom-grid">
				<div class="tom">
					<img src="<?=$website_url;?>/po-content/<?=$folder;?>/images/co.png" alt=" " />
				</div>
				<div class="tom-right">
					<div class="Hardy">
						<h4><?=$compost->name;?></h4>
						<p><label><?php echo "$compost->date | $compost->time"; ?></label></p>
					</div>
					<div class="reply">
						<a href="#">REPLY</a>
					</div>
					<div class="clearfix"> </div>
					<p class="lorem"><?=autolink($comcontent);?></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php }?>
		</div>
		<div class="leave-comment">
			<h3>Leave your comment</h3>
			<p>Suspendisse tempor tellus sed nisl semper, quis condimentum turpis pharetra.</p>
			<form class="comment_form" action="<?=$website_url;?>/po-postcom.php" method="post">
				<input type="text" placeholder="Name" name="name" required=" ">
				<input type="text" placeholder="Email" name="email" required=" ">
				<input type="text" placeholder="Your Website" name="url" required=" ">
				<textarea placeholder="Message" name="comment" required=" "></textarea>
				<input type="hidden" name="id" value="<?=$idpost;?>" />
				<input type="submit" value="Add Comment">
				<div class="clearfix"> </div>
			<?php //aktifkan recaptcha google bila sudah dihosting
			/*	<fieldset>
						<br /><div class="g-recaptcha" data-sitekey="6LckEgETAAAAAPdqrQSY_boMDLZRL1vpkAatVqKf"></div>
						<input type="hidden" name="id" value="<?=$idpost;?>" />
						<input type="hidden" name="seotitle" value="<?=$currentDpost->seotitle;?>" />
				</fieldset>*/?>
			</form>
		</div>
	</div>
	</div>
<!-- //single -->

<!--
*******************************************************
	Include Footer Template
*******************************************************
-->
<?php include_once "po-content/$folder/footer.php"; ?>
<?php } ?>
