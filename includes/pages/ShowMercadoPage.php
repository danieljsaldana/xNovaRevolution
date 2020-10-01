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

function ShowMercadoPage()
{
	global $USER, $PLANET, $LNG, $LANG;

	$PlanetRess = new ResourceUpdate();
	$PlanetRess->CalcResource();
	$PlanetRess->SavePlanetToDB();

	$template	= new template();

	$template->assign_vars(array(	
		'mercado_negro'		=> $LNG['mercado_negro'],
		'comerciante'	=> $LNG['comerciante'],
		'bonus' => $LNG['bonus_n'],
		'mercado_negro_desc'		=> $LNG['mercado_negro_desc'],
		'comerciante_desc'	=> $LNG['comerciante_desc'],
		'bonus_desc' => $LNG['bonus_n_desc'],
	));
	
	$template->show("mercado_general.tpl");
}
?>