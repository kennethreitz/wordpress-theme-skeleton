<?php
add_action('wp_head', 'page_head');
add_action('wp_footer', 'page_foot');
get_header();
function page_head(){?><?php }
function page_foot(){?><?php }?>

<div class="contentBody">
<article>
<h1 class="contentTitle">404&#8212; File Not Found</h1>
<div class="content">
<h2>Oops, Not Found!</h2>
<p>Sorry, we were unable to find the page you were looking for. </p>
</div>
</article>
</div>
<?php get_footer(); ?>
