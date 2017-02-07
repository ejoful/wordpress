<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php 
if ( is_category() ) : 
global $post; 
$categories = get_the_category(); 
foreach ($categories as $category) : 
?> 
<div class='widget widget_pages'> 
<h3>本分类最近更新</h3> 
<ul> 
<?php 
$posts = get_posts('numberposts=1&category='. $category->term_id); 
foreach($posts as $post) : 
?> 
<li> 
<a href='<?php the_permalink(); ?>'><?php echo mb_strimwidth(get_the_title(), 0, 40, '…'); ?></a> 
</li> 
<?php endforeach; ?> 
</ul> 
</div> 
<?php 
endforeach; endif ; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
