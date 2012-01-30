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
	
   
	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
		
		</div>
	</div><!--end of header-->
	<?php
	
	$title2=$this->uri->segment(3);
	$title3=str_replace('-',' ',$title2); 
	echo $title3
	
	?>
	<?php //echo $this->uri->uri_to_assoc(3) ?>
	
	<?php if(isset($settings)) : foreach($settings as $row4) : ?>
		
	
<?php

//echo $row4->twitter;

//echo $row4->twitjs;

 if($row4->gallery==1){echo'<div id="featured">';  foreach($slider as $row3){ echo'<img src="'; echo base_url(); echo'images/'; echo  $row3->img;echo  '">	' ; } echo'</div>';   }  ?> 

<?php if($row4->twitter==1) {echo $row4->twitjs; echo $row4->twitname; echo $row4->twitjs2;    }?>

<?php if($row4->twitfon==1) {echo $row4->tfriends; echo $row4->twitname; echo $row4->tfriends2;    }?>



	<?php ; endforeach; ?>

	<?php else : ?>	

	<?php endif; ?>
	





	<div id="content">
		
	
	<?php if(isset($records)) : foreach($records as $row) : ?>
	
	<h2><?php echo  $row->title; ?> </h2>
	<?php echo $row->content; ?>	

	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
			
		
		<div id="twitter">
			<p><a href="http://twitter.com/jquery">http://twitter.com/jquery</a></p>
		</div>
		
	</div><!--end of content-->