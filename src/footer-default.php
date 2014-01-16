		<footer>
			<!--<aside class="sponsors well center">
				<h1>Thanks to our sponsors</h1>
				<ul class="inline-list js-slide">
					<?php foreach(get_sponsors() as $k => $post): setup_postdata($post);?>
					<?php if(has_post_thumbnail()): ?>
					<li><?php the_post_thumbnail('six-cols'); ?></li>
					<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</aside>-->
			<section class="social-media center">
				<a href="http://fb.com/ideaidcph" class="icon" title="IDEAID on Facebook">
                	<img src="<?php echo get_template_directory_uri() ?>/img/facebook-icon@2x.png" alt="IDEAID on Facebook" width="32" height="32">
	            </a>
	            <a href="http://twitter.com/ideaidcph" class="icon" title="IDEAID on Twitter">
	                <img src="<?php echo get_template_directory_uri() ?>/img/twitter-icon@2x.png" alt="IDEAID on Twitter" width="32" height="32">
	            </a>
	            <p>
	            	<a href="mailto:info@ideaid.org">Contact us</a> for more information.
	            </p>
			</section>
		</footer>

	
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=559465344140662";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	</body>
</html>