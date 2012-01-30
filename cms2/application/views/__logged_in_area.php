
 <script src="<?=base_url()?>js/tinymce/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
	<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
	<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
     <p>This section represents the area that only logged in members can access.</p>
	<h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
	
	    <h2>Create</h2>
<!--	<?php echo form_open('site/create');?>


	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" />
	</p>
	
	<p>
		<label for="content">Content:</label>
		<textarea name="content" id="content">	</textarea>	
		
	</p>	
	
	<p>
		<input type="submit" value="Submit" />
	</p>
	<?php echo form_close(); ?>-->
	
	<hr />
	
	<h2>Read</h2>
	<?php if(isset($records)) : foreach($records as $row) : ?>
		
		<?php echo form_open('site/update');?>
	
	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" value="<?php echo $row->title; ?>" />
	</p>
	
	<p>
		<label for="content">Content:</label>
	<textarea name="content" id="content">	<?php echo $row->content; ?></textarea>	
	
	</p>	
	
	<p>
		<input type="submit" value="Submit" />
	</p>
	<h3><?php echo anchor("site/delete/$row->id", 'delete'); ?> </h3>
	<?php echo form_close(); ?>
	
	

	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
	
	<hr />
	
	<h2>Delete</h2>
	
	<p>
		To sample the delete method, simply click on one of the headings listed above. A delete
		query will automatically run.
	</p>
