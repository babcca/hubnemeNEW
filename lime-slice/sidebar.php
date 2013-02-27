<div id="left-box">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar') ) : ?>
    <?php else : ?>
    <div id="sidebar">
            <div class="box pages">
                <h3>Navigation:</h3>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'menu' => 'main', 'depth'=> 2 ) ); ?>
            </div>
            <div class="box category">
		<?php wp_list_categories(array('title_li'=>'<h3>Category:</h3>')); ?>
            </div>
            <div class="archive box">
            	<h3>Archives:</h3>
            	<ul>
            	    <?php wp_get_archives('type=monthly'); ?>
            	</ul>
            </div>

        <div class="box blogroll">
	    <?php wp_list_bookmarks(array('title_before'=>'<div class="header"><h3>', 'title_after'=>'</h3></div>', 'category_before'=>'', 'category_after'=>'')); ?>
        </div>
 
            <div class="meta box">
            	<h3>Meta:</h3>
            	<ul>
                	<li><a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS"><abbr title="Really Simple Syndication">RSS</abbr></a></li>
                	<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                	<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
                	<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
                	<?php wp_meta(); ?>
            	</ul>
            </div>
    </div>
    <?php endif; ?>
</div>
