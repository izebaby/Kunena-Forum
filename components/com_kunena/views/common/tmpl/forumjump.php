<?php
/**
 * Kunena Component
 * @package Kunena.Template.Default
 * @subpackage Common
 *
 * @copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena') ?>" id="jumpto" name="jumpto" method="post" target="_self">
	<span class="kright">
		<input type="hidden" name="view" value="category" />
		<input type="hidden" name="task" value="jump" />
		<?php echo $this->categorylist; ?>
		<input type="submit" name="Go" class="kbutton ks" value="<?php echo JText::_('COM_KUNENA_GO'); ?>" />
	</span>
</form>