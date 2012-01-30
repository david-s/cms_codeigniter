<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
     <p>This section represents the area that only logged in members can access.</p>
	<h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
	<h4><?php echo anchor('site/members_area', 'admin home'); ?></h4>
	    <h2>Pages</h2>
	 
		
		<?php if(isset($records)) : foreach($records as $row) : ?>
	<?php $title = $row->title;

     $url_title = url_title($title);
	 //echo $url_title;  ?>
	<?php echo anchor("site/editPage/$url_title",$row->title,array('class' => 'navi','id' => 'testrumb')); ?> 
	<!--<a class="navi" id="testrumb" href="fresh/page/$row->page"><?php echo  $row->page; ?> </a>-->
   
	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>


	

		
	
	
	<p>
		
	</p>
	<h3> create new page</h3>
	<?php echo anchor("site/createview/",'create page',array('class' => 'navi','id' => 'testrumb')); ?> 
	
	<h3> Home page settings </h3>
	<?php echo anchor("site/homesettings/",'settings',array('class' => 'navi','id' => 'testrumb')); ?> 
	
	<h3> add images to gallery</h3>
	<?php echo anchor("site/gall_up/",'gallery',array('class' => 'navi','id' => 'testrumb')); ?> 
	

   
	
	

	
	<hr />
	
	<h2>Delete</h2>
	
	<p>
		To sample the delete method, simply click on one of the headings listed above. A delete
		query will automatically run.
	</p>
	
	