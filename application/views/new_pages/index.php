<?php include "header.php" ?>
<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
<?php include "slideshow.php"?>
<?php $url_image ="http://localhost/LinhProject/images/" ?>

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
		
		
		
			
    
    