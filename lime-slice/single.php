<?php get_header(); ?>
<div id="main-block">
    <div id="content">
	<?php if (have_posts()) : ?>
        <ul>
		<?php while (have_posts()) : the_post(); ?>
			<li class="post" id="post-<?php the_ID(); ?>">
                <span class="date"><?php the_time('d')?><span><?php the_time('M')?></span></span>
                <div class="title">
            	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute()?>"><?php the_title(); ?></a></h2>
                </div>
        		<div class="entry">
                            <?php the_post_thumbnail() ?>
        		    <?php the_content('Read the rest of this entry &raquo;'); ?>
        		</div>
                        <div class="pagi"><?php wp_link_pages()?></div>
                
                <div class="postdata">
                    <span class="permalink"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute()?>">Permalink</a></span>
                    <span class="category">Filed under: <?php the_category(', ') ?></span><br/>
                    <?php the_tags( '<span class="tags">Tags: ', ', ', '</span><br/>'); ?>
                    <span class="comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
                </div>
			</li>
		<?php endwhile; ?>
        </ul>
        
        <?php comments_template(); ?>
        		
    	<?php else : ?>
            <p>&nbsp;</p>
    		<h2 class="t-center">Not Found</h2>
    		<p class="t-center">Sorry, but you are looking for something that isn't here.</p>

    	<?php endif; ?>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
















