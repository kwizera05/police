<?php
/**
* @package   Template Overrides YOOtheme
* @version   1.5.2 2009-02-03 17:07:24
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) 2007 - 2009 YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<h2>
	<?php echo JText::_('Error') ?>
</h2>
<p>
	<?php $this->escape($this->error); ?>
</p>