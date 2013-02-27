</div><!--#main-->

<div id="footer">
    <div class="content">
        <span class="copyright">&copy; <?php echo date('Y');?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</span>
        <span class="links">
            <a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS" class="rss">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
            <a href="<?php bloginfo('comments_rss2_url'); ?>" title="The latest comments to all posts in RSS" class="rss">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
	    <?php wp_loginout(); ?>
            <a href="http://wordpress.searchperience.com" class="powered"><img src="<?php echo get_template_directory_uri(); ?>/images/cubes.gif" alt="Searchperience"/></a>
        </span>
    </div>
</div><!--#footer-->
<?php wp_footer(); ?>
</div>
</body>
</html>
