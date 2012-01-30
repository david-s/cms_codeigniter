<h4><?php echo anchor('site/members_area', 'admin home'); ?></h4>
<h2>upload images to slider</h2>


	<div id="upload">
		<?php
		echo form_open_multipart('site/gall_up');
		echo form_upload('userfile');
		echo form_submit('upload', 'Upload');
		echo form_close();
		?>		
	</div>
	
<h3>delete slider image</h3>
<?php if(isset($images)) : foreach($images as $row) : ?>
		
		<?php echo form_open('site/update');?>
<h3><?php echo anchor("site/delete_gall/$row->id", $row->img.'-delete'); ?> </h3>
	<?php echo form_close(); ?>
	
	

	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
	
	<hr />
	