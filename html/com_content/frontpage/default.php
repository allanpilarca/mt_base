<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<section id="content-featured" class="<?php echo $this->params->get('pageclass_sfx', 'default');?>">
	
<?php if ($this->params->get('show_page_title', 1)) : ?>
	<h1><?php echo $this->escape($this->params->get('page_title')); ?></h1>
<?php endif; ?>

<div class="container">
	<?php 
		if ($this->params->def('num_leading_articles', 1))
		{
			for ($i = $this->pagination->limitstart; $i < ($this->pagination->limitstart + $this->params->get('num_leading_articles')); $i++)
			{
				if ($i >= $this->total)
					break;
				echo '<div class="content_list">'."\n";
				$this->item =& $this->getItem($i, $this->params);
				echo $this->loadTemplate('item');
				echo '</div>'."\n\n";
			}
		} else
			$i = $this->pagination->limitstart;

		$startIntroArticles = $this->pagination->limitstart + $this->params->get('num_leading_articles');
		$endIntroArticles = $startIntroArticles + $this->params->get('num_intro_articles', 4);
		for( $z = $startIntroArticles; ($z < $endIntroArticles)&&($z < $this->total); $z++ )
		{
			((($z - $startIntroArticles) % $this->params->get('num_columns',2))==0)?$divider="":$divider=" column_separator";
			((($z - $startIntroArticles) % $this->params->get('num_columns',2))==0)?$clear="clear: left;":$clear="";
			echo "<div style=\"width:";
			echo intval(100 / $this->params->get('num_columns')) - 1 . "%;margin-left: 1%;$clear";
			echo "\" class=\"content_column $divider\">\n";
			$this->item =& $this->getItem($i, $this->params);
			echo $this->loadTemplate('item');
			$i++;
			echo "</div>\n";
		}
		echo "<br style='clear:both;'>\n"
	?>
	<?php if ($this->params->def('num_links', 4) && ($i < $this->total)) : ?>
			<?php
				$this->links = array_splice($this->items, $i - $this->pagination->limitstart);
				echo $this->loadTemplate('links');
			?>
	<?php endif; ?>
</div>
<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->get('pages.total') > 1)) : ?>
<footer class="pagination">
	<p class="nav">
			<?php echo $this->pagination->getPagesLinks(); ?>
	</p>
	<?php if ($this->params->def('show_pagination_results', 1)) : ?>
	<p class="count">
			<?php echo $this->pagination->getPagesCounter(); ?>
	</p>
	<?php endif; ?>
</footer>
<?php endif; ?>
</section>
