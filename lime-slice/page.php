<?php get_header(); ?>
<div id="main-block">
    <div id="content">
	<?php if (have_posts()) : ?>
        <ul>
		<?php while (have_posts()) : the_post(); ?>
			<li class="post" id="post-<?php the_ID(); ?>">
                <span class="date"><?php the_time('d')?><span><?php the_time('M')?></span></span>
                <div class="title">
            	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </div>

        		<div class="entry">
        		    <?php the_content('Read the rest of this entry &raquo;'); ?>
        		</div>
			</li>
		<?php comments_template(); ?>
		<?php endwhile; ?>
        </ul>
        
    	<?php else : ?>
    
    		<h2 class="t-center">Not Found</h2>
    		<p class="t-center">No posts found matched your criteria</p>

    	<?php endif; ?>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
















