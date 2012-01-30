
	 <h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
     <p>This section represents the area that only logged in members can access.</p>
	 <h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
	 <h4><?php echo anchor('site/members_area', 'admin home'); ?></h4>
	
	    <h2>Create</h2>
	
	
	<hr />
	
	<h2>Settings Page</h2>
	<?php if(isset($records)) : foreach($records as $row) : ?>
		
		
		
	

		
		<?php echo form_open('site/homesettings2');?>
	
<h2><?php  if( $row->gallery ==1 ){echo 'Gallery is currently <span class="blue">On</span>';}else{echo 'Gallery is currenlty <span class="red">Off</span>';}  ?></h2>

	<p>
		<label for="title">gallery</label>
		<input type="radio" name="gallery" value="1" /> on<br />
        <input type="radio" name="gallery" value="0" /> off
	
	</p>
		<h2><?php  if( $row->twitter==1 ){echo 'twitter is currently <span class="blue">On</span>';}else{echo 'twitter is currenlty <span class="red">Off</span>';}  ?></h2>
		<p>
		<label for="title">twitter</label>
		<input type="radio" name="twiton" value="1" /> on<br />
        <input type="radio" name="twiton" value="0" /> off <br />
        twitter user name <input type="text"  name="twitname" value="<?php echo $row->twitname; ?>" />
	
	</p>
	
	
		<h2><?php  if( $row->twitfon==1 ){echo 'twitter friends is currently <span class="blue">On</span>';}else{echo 'twitter frineds is currenlty <span class="red">Off</span>';}  ?></h2>
		<p>
		<label for="title">twitter friends</label>
		<input type="radio" name="twitfon" value="1" /> on<br />
        <input type="radio" name="twitfon" value="0" /> off <br />
        twitter user name <input type="text"  name="twitname" value="<?php echo $row->twitname; ?>" />
	
	</p>
	
	
	<p>
	
<input type="submit" value="Submit" />
		
	</p>	
	
	<p>
		
	</p>
	<?php echo form_close(); ?>
	
		
	
	
	
	
	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
	
	<hr />
	
	

	
	