<?php defined('_JEXEC') or die(); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="no-js">
<head>
	<?php $this->setGenerator('Joomla! 1.5 Template by MagicThemes.com'); ?>
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1 " />
	<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon.ico">

	<jdoc:include type="head" />

	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" />

	<!-- Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/resources/modernizer.js"></script>

	<!--[if lte IE 6]><script src="<?php echo JURI::base(); ?>templates/<?php echo $this->template; ?>/resources/browser_upgrade/warning.js"></script><script>window.onload=function(){e("<?php echo JURI::base(); ?>templates/<?php echo $this->template; ?>/resources/browser_upgrade/")}</script><![endif]-->
</head>
<body>
	<div id="mt-template">

	</div>

    <?php if ($this->params->get('analytics_enabled', FALSE)): ?>
    	<script>
    	   var _gaq = [['_setAccount', <?php echo $this->params->get('analytics_id');?>], ['_trackPageview']];
    	   (function(d, t) {
    	    var g = d.createElement(t),
    	        s = d.getElementsByTagName(t)[0];
    	    g.async = true;
    	    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    	    s.parentNode.insertBefore(g, s);
    	   })(document, 'script');
    	  </script>
    <?php endif ?></body>
</html>