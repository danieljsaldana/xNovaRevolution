<?php

/**
 _  \_/ |\ | /¯¯\ \  / /\    |¯¯) |_¯ \  / /¯¯\ |  |   |´¯|¯` | /¯¯\ |\ |6
 ¯  /¯\ | \| \__/  \/ /--\   |¯¯\ |__  \/  \__/ |__ \_/   |   | \__/ | \|Core.
 * @author: Copyright (C) 2011  developer of xNova Revolution
 * @link: http://xnovarevolution.wordpress.com

 * @package 2Moons
 * @author Slaver <slaver7@gmail.com>
 * @copyright 2009 Lucky <douglas@crockford.com> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.3 (2011-01-21)

 * Please do not remove the credits
*/

function ShowLogoutPage()
{
	global $LNG, $SESSION;
		
	$SESSION = new Session();
	$SESSION->DestroySession();
	
	$template	= new template();
	$template->cache	= true;
	$template->isPopup(true);	
	$template->assign_vars(array(
		'lo_title'		=> $LNG['lo_title'],
		'lo_logout'		=> $LNG['lo_logout'],
		'lo_redirect'	=> $LNG['lo_redirect'],
		'lo_notify'		=> $LNG['lo_notify'],
		'lo_continue'	=> $LNG['lo_continue'],
	));
	$template->show("logout_overview.tpl");
}
?>