<?php
/*--------------------------------------------------------------------------------
# com_ijoomeradv_1.5 - iJoomer Advanced
# ------------------------------------------------------------------------
# author Tailored Solutions - ijoomer.com
# copyright Copyright (C) 2010 Tailored Solutions. All rights reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.ijoomer.com
# Technical Support: Forum - http://www.ijoomer.com/Forum/
----------------------------------------------------------------------------------*/

defined('_JEXEC') or die;

class ijoomeradvControllerconfig extends JControllerLegacy
{
	public function home()
	{
		$this->setRedirect('index.php?option=com_ijoomeradv',null);
	}

	function save()
	{
		$model  = $this->getModel('config');
		$config = $model->store();
		$this->setRedirect(JRoute::_('index.php?option=com_ijoomeradv', true));
	}

	function cancel()
	{
		$this->setRedirect(JRoute::_('index.php?option=com_ijoomeradv', true));
	}
}