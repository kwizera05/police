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

<div class="joomla <?php echo $this->params->get('pageclass_sfx')?>">
	
	<div class="user">
	
		<?php if ( $this->params->get( 'show_page_title' ) ) : ?>
		<h1 class="pagetitle">
			<?php echo $this->escape($this->params->get('page_title')); ?>
		</h1>
		<?php endif; ?>

		<p><?php echo JText::_('REMIND_USERNAME_DESCRIPTION'); ?></p>

		<form action="index.php?option=com_user&amp;task=remindusername" method="post" class="josForm form-validate">
		<fieldset>
			<legend><?php echo JText::_( 'REMIND_USERNAME_EMAIL_TIP_TITLE' ) ?></legend>

			<div>
				<label for="email" class="hasTip" title="<?php echo JText::_('REMIND_USERNAME_EMAIL_TIP_TITLE'); ?>::<?php echo JText::_('REMIND_USERNAME_EMAIL_TIP_TEXT'); ?>"><?php echo JText::_('Email Address'); ?>:</label>
			<input id="email" name="email" type="text" class="required validate-email" />
			</div>
			<div>
				<button type="submit"><?php echo JText::_('Submit'); ?></button>
			</div>
		</fieldset>
		<?php echo JHTML::_( 'form.token' ); ?>
		</form>

	</div>
</div>