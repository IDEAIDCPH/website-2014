<?php
/*
Template Name: Part - Application
*/
?>

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