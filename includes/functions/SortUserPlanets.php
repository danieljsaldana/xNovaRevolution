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

if(!defined('INSIDE')) die('Hacking attempt!');

function SortUserPlanets ($CurrentUser)
{
	global $db;
	$Order = ( $CurrentUser['planet_sort_order'] == 1 ) ? "DESC" : "ASC" ;
	$Sort  = $CurrentUser['planet_sort'];

	$QryPlanets  = "SELECT `id`, `name`, `galaxy`, `system`, `planet`, `planet_type`, `image`, `b_building`, `b_building_id` FROM ".PLANETS." WHERE `id_owner` = '". $CurrentUser['id'] ."' AND `destruyed` = '0' ORDER BY ";

	if($Sort == 0)
		$QryPlanets .= "`id` ". $Order;
	elseif($Sort == 1)
		$QryPlanets .= "`galaxy`, `system`, `planet`, `planet_type` ". $Order;
	elseif ($Sort == 2)
		$QryPlanets .= "`name` ". $Order;

	$PlanetRAW = $db->query($QryPlanets);
	
	while($Planet = $db->fetch_array($PlanetRAW))
	{
		$Planets[$Planet['id']]	= $Planet;
	}
	
	$db->free_result($PlanetRAW);
	
	return $Planets;
}
?>