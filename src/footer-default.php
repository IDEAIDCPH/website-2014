		<footer>
			<aside class="sponsors well center">
				<h1>Thanks to our sponsors</h1>
				<ul class="inline-list js-slider">
					<?php foreach(get_sponsors() as $k => $post): setup_postdata($post);?>
					<li><?php the_post_thumbnail('six-cols'); ?></li>
					<?php endforeach; ?>
				</ul>
			</aside>
			<section class="social-media center">
				<a href="http://fb.com/ideaidcph" class="icon" title="IDEAID on Facebook" style="text-decoration: none;">
                	<img src="<?php echo get_template_directory_uri() ?>/img/facebook-icon@2x.png" alt="IDEAID on Facebook" width="48" height="48">
	            </a>
	            <a href="http://twitter.com/ideaidcph" class="icon" title="IDEAID on Twitter" style="text-decoration: none;">
	                <img src="<?php echo get_template_directory_uri() ?>/img/twitter-icon@2x.png" alt="IDEAID on Twitter" width="48" height="48">
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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-46707863-2', 'ideaid.org');
		  ga('require', 'linkid', 'linkid.js');
		  ga('send', 'pageview');

		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/fastclick/0.6.10/fastclick.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
	</body>
</html>