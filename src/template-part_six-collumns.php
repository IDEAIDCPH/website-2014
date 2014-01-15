<?php
/*
Template Name: Part - Six collumns
*/

// Get subpages of current page with
// current page as their parent
$args = array(
	'child_of' => get_the_ID(),
	'parent' => get_the_ID(),
	'sort_column' => 'menu_order'
);
?>
<section class="grid-wrapper">

<?php
// Get pages with arguments and
// loop through them
foreach(get_pages($args) as $subpage) : 
	$post = $subpage; ?>
	<article class="one-of-six">
		<?php the_post_thumbnail('six-cols'); ?>
		<h1><?php echo $subpage->post_title; ?></h1>
		<?php echo wpautop($subpage->post_content); ?>
	</article>
<?php endforeach; ?>

</section>