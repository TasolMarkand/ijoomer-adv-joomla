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

class ijoomeradvControllerPushnotif extends JControllerLegacy
{
	public function home()
	{
		$this->setRedirect(JRoute::_('index.php?option=com_ijoomeradv', true), null);
	}

	function add()
	{
		$app = JFactory::getApplication();
		$app->input->set('layout', 'detail');
		$app->input->set('hidemainmenu', 1);

		parent::display ();
	}

	function apply()
	{
		$model = $this->getModel('pushnotif');

		if ($model->store())
		{
			$msg = JText::_('COM_IJOOMERADV_PUSH_NOTIFICATION_SAVED');
		}
		else
		{
			$msg = JText::_('COM_IJOOMERADV_ERROR_SAVING_PUSH_NOTIFICATION');
		}

		// Check the table in so it can be edited.... we are done with it anyway
		$link = JRoute::_('index.php?option=com_ijoomeradv&view=pushnotif');
		$this->setRedirect($link, $msg);
	}

	function sendPushNotification()
	{
		$model = $this->getModel('pushnotif');

		$model->send_push_notification($device_token, $message = '', $badge = 1, $type = '');
		parent::display();
	}
}