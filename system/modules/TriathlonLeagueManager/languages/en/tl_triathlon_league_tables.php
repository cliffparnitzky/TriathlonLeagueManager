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
 * @copyright  Cliff Parnitzky 2015
 * @author     Cliff Parnitzky
 * @package    TriathlonLeagueManager
 * @license    LGPL
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['title']              = array('Title', 'Please enter the title for this table.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['league']             = array('Liga', 'Please select the league for this table.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['ratingType']         = array('Rating type', 'Please select the rating type.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['columnType']         = array('Column type', 'Please select the column type for entering the points.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableData']          = array('Table', 'Please enter the league table.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePlace']         = array('Place', 'Please enter the placeing. When automatic sorting is active, the place will be assigned dynamically.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableTeam']          = array('Team', 'Please select the team.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePoints']        = array('Points', 'Please enter the current points of the team.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableScoringPoints'] = array('Scoring points', 'Please enter the current scoring points of the team.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePlaceNumber']   = array('Place number', 'Please enter the current place number of the team.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['autoSortTable']      = array('Sort table automatically', 'Specify whether the table should be sorted automatically. It is sorted by points or scoring points + place numbers. To change the order of the places in case of a tie, the automatic sorting must be disabled. Then, the arrows can be used  for moving.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['updateDate']         = array('Last updated', 'Please enter last update date of the table.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['raceCount']          = array('Race x of y', 'Please enter the race count. How many races (x) of y races have already been completed.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['general_legend']   = 'General';
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tabledata_legend'] = 'Table data';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['new']    = array('New table', 'Create a new table');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['show']   = array('Table details', 'Show the details of table ID %s');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['edit']   = array('Edit table', 'Edit table ID %s');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['copy']   = array('Duplicate table', 'Duplicate table ID %s');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['delete'] = array('Delete table', 'Delete table ID %s');


?>