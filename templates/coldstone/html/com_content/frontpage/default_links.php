<?php
/**
* @package   Template Overrides YOOtheme
* @version   1.5.2 2009-02-03 17:07:24
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) 2007 - 2009 YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<h3>
	<?php echo JText::_( 'More Articles...' ); ?>
</h3>

<ul>
	<?php foreach ($this->links as $link) : ?>
	<li>
		<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($link->slug, $link->catslug, $link->sectionid)); ?>"><?php echo $link->title; ?></a>
	</li>
	<?php endforeach; ?>
</ul>