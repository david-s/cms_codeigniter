	<div id="pagewrap">
	<div id="header">
		<div id = "Logo">
			<a href="index.xhtml"><img alt="Logo" src="<?php echo base_url();?>images/logo.jpg"/></a>
			<?php echo anchor("/login/",'Login',array('class' => 'navi','id' => 'testrumb')); ?> 
		</div>
		<div id = "Navigation">
		<?php echo anchor(base_url(),'Home',array('class' => 'navi','id' => 'testrumb')); ?> 
			<?php if(isset($menu)) : foreach($menu as $row2) : ?>
	<?php $title = $row2->title;

     $url_title = url_title($title);
	 //echo $url_title;  ?>
	<?php echo anchor("fresh/page/$url_title",$row2->title,array('class' => 'navi','id' => 'testrumb')); ?> 
	<!--<a class="navi" id="testrumb" href="fresh/page/$row->page"><?php echo  $row->page; ?> </a>-->
   
	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
		<!-- <a class="navi" href="#">About Us</a> <a class="navi" href="#">Products</a><a class="navi" href="#">Contact Us</a>-->
		</div>
	</div><!--end of header-->
	<?php
	
	$title2=$this->uri->segment(3);
	$title3=str_replace('-',' ',$title2); 
	echo $title3
	
	?>
	<?php //echo $this->uri->uri_to_assoc(3) ?>
	
	
		<!-- Captions for Orbit -->
		<!--<span class="orbit-caption" id="htmlCaption">
			<strong>Caption:</strong> I can haz <a href="#">links</a>, <em>style</em> or anything that is valid markup :)
		</span>-->
		
		
	
	<div id="content">
		
	
	<?php if(isset($records)) : foreach($records as $row) : ?>
	
	<!--<h2><?php echo  $row->title; ?> </h2>-->
	<?php echo $row->content; ?>	

	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
			
		
	</div><!--end of content-->