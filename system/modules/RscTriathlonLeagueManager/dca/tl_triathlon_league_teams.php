<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2013
 * @author     Cliff Parnitzky
 * @package    RscTriathlonLeagueManager
 * @license    LGPL
 */

/**
 * Table tl_triathlon_league_teams
 */
$GLOBALS['TL_DCA']['tl_triathlon_league_teams'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'           => 'Table',
		'enableVersioning'        => true
	),

	// List
	'list' => array
	(
		'sorting' => array (
			'mode'                    => 2,
			'fields'                  => array('name'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields'                => array('name', 'ratingType'),
			'format'                => '%s <span style="color:#b3b3b3; padding-left:3px;">%s</span>',
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__' => array(),
		'default'      => '{general_legend},name,ratingType,website,ownTeam;{image_legend},logo'
	),

	// Fields
	'fields' => array
	(
		'name' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['name'],
			'exclude'               => true,
			'filter'                => true,
			'sorting'               => true,
			'search'                => true,
			'inputType'             => 'text',
			'eval'                  => array('mandatory'=>true, 'tl_class'=>'w50')
		),
		'ratingType' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['ratingType'],
			'exclude'               => true,
			'filter'                => true,
			'sorting'               => true,
			'search'                => true,
			'inputType'             => 'select',
			'options'               => array('men_mixed', 'women'),
			'reference'             => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['ratingTypeOptions'],
			'eval'                  => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50')
		),
		'website' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['website'],
			'exclude'               => true,
			'search'                => true,
			'inputType'             => 'text',
			'eval'                  => array('tl_class'=>'clr w50', 'rgxp'=>'url')
		),
		'ownTeam' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['ownTeam'],
			'exclude'               => true,
			'filter'                => true,
			'search'                => true,
			'inputType'             => 'checkbox',
			'eval'                  => array('tl_class'=>'m12 w50')
		),
		'logo' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_triathlon_league_teams']['logo'],
			'exclude'               => true,
			'inputType'             => 'fileTree',
			'eval'                  => array('mandatory'=>true, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'png', 'tl_class'=>'clr')
		)
	)
);

/**
 * Class tl_triathlon_league_teams
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * PHP version 5
 * @copyright  Cliff Parnitzky 2011
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class tl_triathlon_league_teams extends Backend
{

} 

?>