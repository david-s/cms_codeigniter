<div id="contact_form">

	<h1>Contact Us!</h1>
    <?php 
	echo form_open('contact/submit');
	echo form_input('name', 'Name', 'id="name"');
	echo form_input('email', 'Email', 'id="email"');
	$data = array('name' => 'message', 'cols' => 35, 'rows' => 12);
	echo form_textarea($data, 'Message', 'id="message"');
	echo form_submit('submit', 'Submit', 'id="submit"');
	echo form_close();
	?>

</div>
<script type="text/javascript">
$('#submit').click(function() {
	
	var name = $('#name').val();
	
	if (!name || name == 'Name') {
		alert('Please enter your name');
		return false;
	}
	
	var form_data = {
		name: $('#name').val(),
		email: $('#email').val(),
		message: $('#message').val(),
		ajax: '1'		
	};
	
	$.ajax({
		url: "<?php echo site_url('contact/submit'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
		//	alert(msg);
			$('#main_content').html(msg);
		}
	});
	
	return false;
});
	
	
</script>
