<?php include "header.php" ?>
<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
<?php include "slideshow.php"?>
<?php $url_image ="http://localhost/LinhProject/images/" ?>
			<!--div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="<?php $base_url ?>/LinhProject/images/slide1.jpg" alt="" />
					<a href="http://geeksband.com">
						<img src="<?php $base_url ?>/LinhProject/images/slide2.jpg" alt="" title="This is an example of a caption with a link" />
					</a>
					<img src="<?php $base_url ?>/LinhProject/images/slide3.jpg" alt="" title="This is an example of a caption" />
					<img src="<?php $base_url ?>/LinhProject/images/slide4.jpg" alt="" />
				</div>
			</div>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({pauseTime: 600,});
			});
			</script-->
			
			<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			<section>
					 <!-- hien thi post theo danh muc-->
				<div id="sline">
				  <?php foreach ($category as $cate){?><!--Foreach danh muc -->	
				  
					<div class="sdline"></div>
					<h1><?php echo $cate->name_category ?></h1>
					<div class="sdline"></div>
				</div>			
				<div id="latestp">
				<?php foreach ($postsdt as $i => $item) {
				     if($cate->id_category==$item->id_category){?>
					<article>
						<h1><?=$item->title?></h1>
						<img src="<?php echo $url_image.$item->image ?>" alt="" />
						<p><?=$item->content ?></p>
						<a href="http://localhost/LinhProject/post/<?=$item->id_post ?>" class="rm">Read More</a>	
					</article>	 	
				    <?php
				     }
				     } ?>
				 </div> 	 		
				 <?php } ?>	
			</section>				
			<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
			<?php include "footer.php" ?>
		
		
		
			
    
    