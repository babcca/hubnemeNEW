<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="http://umime-hubnout.cz/kontakt//css/validationEngine.jquery.css" type="text/css"/>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script> 
	<!--JS-->
    <script>
	      $(document).ready(function() {
	        $("a[rel]").overlay();
        	});
    </script>
    <script>
        $(document).ready(function () {  
          var top = $('#comment').offset().top - parseFloat($('#comment').css('marginTop').replace(/auto/, 0));
           $(window).scroll(function (event) {
            // what the y position of the scroll is
            var y = $(this).scrollTop();
            // whether that's below the form
            if (y >= top) {
              // if so, ad the fixed class
              $('#comment').addClass('fixed');
                } else {
              // otherwise remove it
          $('#comment').removeClass('fixed');
              }
           });
        });
    </script>
<!--formular-->
  <script src="http://umime-hubnout.cz/kontakt/js/languages/jquery.validationEngine-cz.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://umime-hubnout.cz/kontakt/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  <script>
    $(document).ready(function(){
      // binds form submission and fields to the validation engine
      $("#formID").validationEngine('attach');
    });
  </script>


</head>

<body <?php body_class() ?>>
    <div id="root">
        <div id="header">
    		<?php if ('blank' != get_header_textcolor()) : ?>
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    <div class="description"><?php bloginfo('description'); ?></div>
                <?php endif; ?>
        </div>

    <div id="main">
