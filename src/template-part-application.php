<?php
/*
Template Name: Part - Application
*/
?>

<!-- REMOVE LATER -->
<script type="text/javascript">
	var changedFlag = {};
	var hadFocusFlag = {};
	$(function(){
		$('[type=checkbox]').on('change', function(e) {
			var $elm = $(e.target),
				$label = $elm.parent('label');

			if($elm.is(':checked')) $label.addClass('checked');
			else					$label.removeClass('checked');
		});

		$('input')
			.on('focus', function(e) {
				var name = $(e.target).attr('name');

				if(!hadFocusFlag[name]) {
					hadFocusFlag[name] = true;
					ga('send', 'event', 'application', name + ' had focus', 'unspecified platform');
				}
			})
			.on('change', function(e) {
				var name = $(e.target).attr('name');

				if(!changedFlag[name]) {
					changedFlag[name] = true;
					ga('send', 'event', 'application', name + ' had changed', 'unspecified platform');
				}

			});

		$('input:not([type=submit]), textarea')
		  .on('focus', function(e) {
			  $(e.target).parent('label')
			  	.addClass('focus');
		  })
		  .on('blur', function(e) {
		  	  $(e.target).parent('label').removeClass('focus');
		  })
		  .on('keypress', function(e) {
		  	$(e.target).parent('label').removeClass('error');
		  });

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
						$('input[type=text], input[type=url], input[type=email], input[type=tel], textarea')
							  .val('')
							  .attr('disabled', 'disabled')
							.parent('label')
							  .addClass('disabled');

						$('input[type="checkbox"]')
							  .removeAttr('checked')
							  .attr('disabled', 'disabled')
							.parent('label')
							  .removeClass('checked')
							  .addClass('disabled');

						$('input[type=submit]')
							  .val('Success!')
							  .attr('disabled', 'disabled')
							  .animate({
							  	opacity: 0
							  })
							.after(
								$('<p>')
								.text('Thank you for applying. We will get back to you by email on February 17th.')
							);

					} else {
						switch (req.message) {
							case 'error_1' :
								console.log('Invalid first name.');
								$('[name=fname]').parent().addClass('error').focus();
								break;
							case 'error_2' :
								console.log('Invalid last name.');
								$('[name=lname]').parent().addClass('error').focus();
								break;
							case 'error_3' :
								console.log('Invalid phone number.');
								$('[name=phone]').parent().addClass('error').focus();
								break;
							case 'error_4' :
								console.log('Invalid email address.');
								$('[name=email]').parent().addClass('error').focus();
								break;
							case 'error_5' :
								console.log('Motivation too short.');
								$('[name=motivation]').parent().addClass('error').focus();
								break;
							case 'error_6' :
								console.log('You have not filled in a role.');
								$('[name=programmer],[name=designer],[name=concept]').parent().addClass('error').focus();
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
	<form action="/wp-admin/admin-ajax.php" class="application-form" method="post" novalidate>
		<input type="hidden" name="action" value="do_ajax" />
		<input type="hidden" name="fn" value="submit_application" />

		<div class="row">
			<label class="icon-user"><input name="fname" placeholder="First name" type="text" class="short" /></label>
			<label class="icon-user"><input name="lname" placeholder="Last name" type="text" class="short" /></label>
			<label class="icon-phone"><input name="phone" placeholder="Phone" type="tel" class="short" /></label>
			<label class="icon-mail"><input name="email" placeholder="Email" type="email" class="long" /></label>
		</div>

		<label class="icon-edit"><textarea name="motivation" placeholder="Motivation" rows="8" cols="79"></textarea></label>

		<p>Please mark the role<i>(s)</i> in which you would feel comfortable participating:</p>

		<div class="row">
			<label class="icon-tick"><input type="checkbox" name="programmer" /> Programmer</label>
			<label class="icon-tick"><input type="checkbox" name="designer" /> Designer</label>
			<label class="icon-tick"><input type="checkbox" name="concept" /> Concept Developer</label>
		</div>

		<p>Additional information <i>(optional)</i>:</p>
		<div class="row">
			<label class="icon-globe"><input name="website" placeholder="Website" type="url" class="long" /></label>
			<label class="icon-linkedin"><input name="linkedin" placeholder="LinkedIn" type="url" class="long" /></label>
		</div>
		<p>Keep me updated with news about this and future IDEAID events:</p>
		<div class="row">
			<label class="icon-tick"><input type="checkbox" name="newsletter"> Keep me updated</label>
		</div>
		<input type="submit" value="DONATE MY BRAIN!" />
	</form>
</section>