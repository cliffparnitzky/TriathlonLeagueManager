<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2015 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2013-2015
 * @author     Cliff Parnitzky
 * @package    TriathlonLeagueManager
 * @license    LGPL
 */

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['triathlonLeagueManager'] = array
(
	'triathlonLeagueTeams' => array
	(
		'tables' => array('tl_triathlon_league_teams'),
		'icon'   => 'system/modules/TriathlonLeagueManager/assets/icon_teams.png'
	),
	'triathlonLeagueTables' => array
	(
		'tables' => array('tl_triathlon_league_tables'),
		'icon'   => 'system/modules/TriathlonLeagueManager/assets/icon_tables.png'
	)
);

/**
 * Front end module
 */
$GLOBALS['FE_MOD']['triathlonLeagueManager']['triathlonLeagueManagerTable'] = 'ModuleTriathlonLeagueManagerTable';

?>