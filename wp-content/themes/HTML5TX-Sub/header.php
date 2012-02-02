<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link href="wp-content/themes/HTML5TX-Sub/css/html5reset.css" rel="stylesheet" type="text/css" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<script type="text/javascript">
		document.createElement('header');
		document.createElement('article');
	</script>
	
		<!--[if IE]><link rel="stylesheet" href="wp-content/themes/#/css/ie.css" type="text/css" /><![endif]-->

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="mainHeader">
			<header>
				<div id="topline">
					<a id="top"></a>
					<div><img src="wp-content/themes/HTML5TX/images/stars.png" alt="stars" /></div>
					<div id="toplineLeft">MADE IN</div>
					<div><img src="wp-content/themes/HTML5TX/images/shield.png" id="shield" alt="HTML5 Shield" /></div>
					<div id="toplineRight">TEXAS</div>                
					<div><img src="wp-content/themes/HTML5TX/images/stars.png" alt="stars" /></div>
				</div>
			</header>
		</div>

<?php include 'main.php'; ?>