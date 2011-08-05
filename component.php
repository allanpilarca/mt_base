<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/section" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
	<?php $this->setGenerator('Joomla! 1.5 Template by MagicThemes.com'); ?>
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1 " />
	<jdoc:include type="head" />

   <!-- Modernizr which enables HTML5 elements & feature detects -->
    <script src="<?php echo JURI::base(); ?>templates/<?php echo $this->template; ?>/resources/flawless.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo JURI::base(); ?>templates/<?php echo $this->template; ?>/css/style.css" />
    
</head>
<body>
	<div id="mt-print">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
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
    <?php endif ?>

</body>
</html>