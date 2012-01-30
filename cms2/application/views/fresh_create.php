<h4><?php echo anchor('site/members_area', 'admin home'); ?></h4>
<h2>create page</h2>


<?php echo form_open('site/createPage');?>


	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" />
	</p>
	
	<p>
		<label for="content">Content:</label>
		<textarea class="ckeditor" name="content" id="content">	</textarea>	
		
	</p>	
	
	<p>
		<input type="submit" value="Submit" />
	</p>
	<?php echo form_close(); ?>