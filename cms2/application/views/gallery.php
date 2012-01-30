<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>CI Gallery</title>
	<meta charset="UTF-8">
	<style type="text/css">
		#gallery, #upload {
			border: 1px solid #ccc; margin: 10px auto; width: 570px; padding: 10px;
		}
		#blank_gallery {
			font-family: Arial; font-size: 18px; font-weight: bold;
			text-align: center;
		}
		.thumb {
			float: left; width: 150px; height: 100px; padding: 10px; margin: 10px; background-color: #ddd;
		}
		.thumb:hover {
			outline: 1px solid #999;
		}
		img {
			border: 0;
		}
		#gallery:after {
			content: "."; visibility: hidden; display: block; clear: both; height: 0; font-size: 0;
		}
	</style>
</head>
<body>
	<div id="gallery">
		<?php if (isset($images) && count($images)):
			foreach($images as $image):	?>
			<div class="thumb">
				<a href="<?php echo $image['url']; ?>">
					<img src="<?php echo $image['thumb_url']; ?>" />
				</a>				
			</div>
		<?php endforeach; else: ?>
			<div id="blank_gallery">Please Upload an Image</div>
		<?php endif; ?>
	</div>
	
	<div id="upload">
		<?php
		echo form_open_multipart('gallery');
		echo form_upload('userfile');
		echo form_submit('upload', 'Upload');
		echo form_close();
		?>		
	</div>
</body>
</html>