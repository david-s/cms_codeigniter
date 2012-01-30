<div id="wrapper">
		
     <h2>Home</h2>
    <?php echo anchor('login/index/uri', 'Login', 'class="link-class"') ?> as admin<br/>
      <?php echo anchor('email/index/uri', 'newsletter', 'class="link-class"') ?> sign up<br/>
      <?php echo anchor('home/index/uri', 'Click', 'class="link-class"') ?> here for table view

	
	<hr />
	<div id="home2">
	<h2>Read</h2>
	<?php if(isset($records)) : foreach($records as $row) : ?>
	
	<h2><?php echo  $row->title; ?> </h2>
	<div class="pageCont"><?php echo $row->content; ?></div>		

	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
	
	<hr />
	
	</div>
	
	
     
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	

<script type="text/javascript" charset="utf-8">
	$('tr:odd').css('background', '#e3e3e3');
</script>
	
	

<div id="newsletter_form">
	<h2>Newsletter</h2>
	<?php echo form_open('home/send'); ?>
	
	<?php
	
	$name_data = array(
		'name' => 'name',
		'id' => 'name',
		'value' => set_value('name')
	);
	
	?>
	
	<p><label for="name">Name: </label><?php echo form_input($name_data); ?></p>
	
	<p>
		<label for="name">Email Address: </label>
		<input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
	</p>
	
	<p><?php echo form_submit('submit', 'Submit'); ?></p>
	
	<?php echo form_close(); ?>
	
	<?php echo validation_errors('<p class="error">'); ?>
		
		<p><?= $alert;?></p> 
		<p><?= $name;?></p> 
	
</div><!--end newsletter-form-->
	
	</div>
