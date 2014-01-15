<?php
/*
Template Name: Part - Application
*/
?>

<!-- REMOVE LATER -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('form').on('submit', function (e){

			var cur = $(e.currentTarget);
			$('.error').removeClass('error');

			$.ajax({
				url: cur.attr('action'),
				type: cur.attr('method'),
				data: $(cur).serialize(),
				dataType: "JSON",
				success: function (req){

					if(req.success) {
						
						// Daniel
						$('input[type=text], input[type=url], input[type=email], input[type=tel], textarea').val('');
						$('input[type="checkbox"]').removeAttr('checked');
						$('input[type=submit]').val('Success!').attr('disabled', true);

					} else {
						switch (req.message) {
							case 'error_1' : 
								console.log('Invalid first name.');
								$('[name=fname]').parent().addClass('error');
								break;
							case 'error_2' : 
								console.log('Invalid last name.');
								$('[name=lname]').parent().addClass('error');
								break;
							case 'error_3' : 
								console.log('Invalid phone number.');
								$('[name=phone]').parent().addClass('error');
								break;
							case 'error_4' : 
								console.log('Invalid email address.');
								$('[name=email]').parent().addClass('error');
								break;
							case 'error_5' : 
								console.log('Motivation too short.');
								$('[name=motivation]').parent().addClass('error');
								break;
							case 'error_6' : 
								console.log('You have not filled in a role.');
								$('[name=programmer],[name=designer],[name=concept]').parent().addClass('error');
								break;
							case 'error_7' : 
								console.log('You have already applied. Please contact us if you wish to re-submit your application.');
								alert('You have already applied. Please contact us if you wish to re-submit your application.');
								break;
						}
					}
				}
			});

			return false;		
		});
	});
</script>

<!-- /REMOVE LATER -->


<section class="grid-wrapper page-application">
	<form action="/wp-admin/admin-ajax.php" method="post" no-validate>
		<input type="hidden" name="action" value="do_ajax" />
		<input type="hidden" name="fn" value="submit_application" />

		<div class="row">
			<label><i class="icon"></i><input name="fname" placeholder="First name" type="text" class="short" /></label>
			<label><i class="icon"></i><input name="lname" placeholder="Last name" type="text" class="short" /></label>
			<label><i class="icon"></i><input name="phone" placeholder="Phone" type="tel" class="short" /></label>
			<label><i class="icon"></i><input name="email" placeholder="Email" type="email" class="long" /></label>
		</div>
		
		<label><i class="icon"></i><textarea name="motivation" placeholder="Motivation" rows="8" cols="79"></textarea></label>
		
		<p>Please mark the role<i>(s)</i> in which you would feel comfortable participating:</p>
	
		<div class="row">
			<label><i class="icon"></i><input type="checkbox" name="programmer" /> Programmer</label>
			<label><i class="icon"></i><input type="checkbox" name="designer" /> Designer</label>
			<label><i class="icon"></i><input type="checkbox" name="concept" /> Concept Developer</label>
		</div>
	
		<p>Additional information <i>(optional)</i>:</p>
		<div class="row">
			<label><i class="icon"></i><input name="website" placeholder="Website" type="url" class="long" /></label>
			<label><i class="icon"></i><input name="linkedin" placeholder="Linkedin" type="url" class="long" /></label>
		</div>
		<input type="submit" value="DONATE MY BRAIN!" />
	</form>
</section>