<div id="wrapper">
     <h2>Home</h2>
    <?php echo anchor('login/', 'Login', 'class="link-class"') ?> as admin<br/>
      <?php echo anchor('email/', 'newsletter', 'class="link-class"') ?> sign up<br/>
      <?php echo anchor('home2/', 'Click', 'class="link-class"') ?> here for blog view
	
	<hr />
	
	

	
	  <div id="container">
		<h1>Super Pagination with CodeIgniter</h1>
		
		<?php echo $this->table->generate($records); ?>
		<?php echo $this->pagination->create_links(); ?>
	 </div>
     


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
	
</div> <!--end newsletter-form-->

	
	</div>
