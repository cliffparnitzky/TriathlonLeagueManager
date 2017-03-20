<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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
 * Table tl_triathlon_league_tables
 */
$GLOBALS['TL_DCA']['tl_triathlon_league_tables'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'           => 'Table',
		'enableVersioning'        => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
		'onsubmit_callback' => array
		(
			array('tl_triathlon_league_tables', 'storeLeagueTable')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array (
			'mode'                    => 2,
			'fields'                  => array('title'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields'                => array('title', 'league'),
			'format'                => '%s <span style="color:#b3b3b3; padding-left:3px;">%s</span>'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__' => array('ratingType', 'columnType'),
		'default'      => '{general_legend},title,league;{tabledata_legend},ratingType;'
	),
	
	// Subpalettes
	'subpalettes' => array
	(
		'ratingType_men_mixed' => 'columnType',
		'ratingType_women'     => 'columnType',
		'columnType_pkt'       => 'tableData,autoSortTable,updateDate,raceCount',
		'columnType_wp_pz'     => 'tableData,autoSortTable,updateDate,raceCount',
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['title'],
			'exclude'                 => true,
			'filter'                  => true,
			'sorting'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(512) NOT NULL default ''"
		),
		'league' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['league'],
			'exclude'                 => true,
			'filter'                  => true,
			'sorting'                 => true,
			'search'                  => true,
			'inputType'               => 'select',
			'options'                 => array('1_bundesliga', '2_bundesliga', '3_regionalliga', '4_landesliga', '5_verbandsliga'),
			'reference'               => &$GLOBALS['TL_LANG']['TriathlonLeagueManager']['league'],
			'eval'                    => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'ratingType' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['ratingType'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('men_mixed', 'women'),
			'reference'               => &$GLOBALS['TL_LANG']['TriathlonLeagueManager']['ratingType'],
			'load_callback'           => array(array('tl_triathlon_league_tables', 'setSelectedRatingType')),
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50', 'includeBlankOption'=>true, 'submitOnChange'=>true),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'columnType' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['columnType'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('pkt', 'wp_pz'),
			'reference'               => &$GLOBALS['TL_LANG']['TriathlonLeagueManager']['columnType'],
			'load_callback'           => array(array('tl_triathlon_league_tables', 'setSelectedColumnType')),
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50', 'includeBlankOption'=>true, 'submitOnChange'=>true),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'tableData' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableData'],
			'inputType'               => 'multiColumnWizard',
			'eval'                    => array
			(
				'mandatory'           => false,
				'style'               => 'min-width: 100%;',
				'tl_class'            => 'clr',
				'minCount'            => 1,
				'columnsCallback'     =>array('tl_triathlon_league_tables', 'getLeagueTableColumns')
			),
			'sql'                     => "blob NULL"
		),
		'autoSortTable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['autoSortTable'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'clr m12 w50', 'submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'updateDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['updateDate'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'clr w50 wizard'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'raceCount' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['raceCount'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'digit', 'multiple'=>true, 'size'=>2, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		)
	)
);

/**
 * Class tl_triathlon_league_tables
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * PHP version 5
 * @copyright  Cliff Parnitzky 2015
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class tl_triathlon_league_tables extends Backend
{
	public static $selectedRatingType;
	public static $selectedColumnType;
	
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Used to remember the selected rating type
	 * @param String $value
	 * @return the value
	 */
	public function setSelectedRatingType($value)
	{
		tl_triathlon_league_tables::$selectedRatingType = $value;
		return $value;
	}
	
	/**
	 * Used to remember the selected rating type
	 * @param String $value
	 * @return the value
	 */
	public function setSelectedColumnType($value)
	{
		tl_triathlon_league_tables::$selectedColumnType = $value;
		return $value;
	}
	
	/**
	 * Get all calendars and return them as array
	 * @return array
	 */
	public function getUnusedTeams(MultiColumnWizard $mcw)
	{
		$selectedTeams = array();
		foreach ($mcw->value as $option) {
			$selectedTeams[] = $option['tableTeam'];
		}
		
		$arrTeams = array();
		$objTeams = \TriathlonLeagueTeamsModel::findByRatingType(tl_triathlon_league_tables::$selectedRatingType, array('order'=>'name'));

		if ($objTeams != null)
		{
			while ($objTeams->next())
			{
				if ($objTeams->id == $selectedTeams[$mcw->activeRow] || !in_array($objTeams->id, $selectedTeams))
				{
					$arrTeams[$objTeams->id] = $objTeams->name;
				}
			}
		}
	
		return $arrTeams;
	}
	
	/**
	 * Get the columns for the league table
	 * @return array
	 */
	public function getLeagueTableColumns (MultiColumnWizard $mcw)
	{
		$arrColumns = array();
		$arrColumns['tablePlace'] = array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePlace'],
			'exclude'          => true,
			'inputType'        => 'text',
			'eval'             => array('style'=>'width: 40px;')
		);
		
		$arrColumns['tableTeam'] = array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableTeam'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options_callback' => array('tl_triathlon_league_tables', 'getUnusedTeams'),
			'eval'             => array('chosen'=>true, 'style'=>'width: 280px;', 'includeBlankOption'=>true, 'mandatory'=>true, 'submitOnChange'=>true)
		);
		
		if (tl_triathlon_league_tables::$selectedColumnType == 'wp_pz')
		{
			$arrColumns['tableScoringPoints'] = array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableScoringPoints'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('style'=>'width: 130px;', 'mandatory'=>true, 'rgxp'=>'digit')
			);
			
			$arrColumns['tablePlaceNumber'] = array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePlaceNumber'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('style'=>'width: 130px;', 'mandatory'=>true, 'rgxp'=>'digit')
			);
		}
		else if (tl_triathlon_league_tables::$selectedColumnType == 'pkt')
		{
			$arrColumns['tablePoints'] = array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePoints'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('style'=>'width: 280px;', 'mandatory'=>true, 'rgxp'=>'digit')
			);
		}
		
		return $arrColumns;
	}
	
	function comparePkt($a, $b)
	{
		if ($a['tablePoints'] == $b['tablePoints']) {
			return 0;
		}
		return ($a['tablePoints'] < $b['tablePoints']) ? -1 : 1;
	}
	
	function compareWpPz($a, $b)
	{
		if ($a['tableScoringPoints'] == $b['tableScoringPoints']) {
			if ($a['tablePlaceNumber'] == $b['tablePlaceNumber']) {
				return 0;
			}
			return ($a['tablePlaceNumber'] < $b['tablePlaceNumber']) ? -1 : 1;
		}
		return ($a['tableScoringPoints'] < $b['tableScoringPoints']) ? -1 : 1;
	}
	
	/**
	 * ONSUBMIT CALLBACK to sort the table when saving.
	 */
	public function storeLeagueTable(DataContainer $dc)
	{
		// Return if there is no active record (override all)
		if (!$dc->activeRecord || $dc->activeRecord->dateAdded > 0)
		{
			return;
		}
		
		// return if auto sort is inactive
		if (!$dc->activeRecord->autoSortTable)
		{
			return;
		}

		$arrLeagueTable = $dc->activeRecord->tableData;
		if (!is_array($arrLeagueTable))
		{
			$arrLeagueTable = deserialize($arrLeagueTable);
		}
		
		if (tl_triathlon_league_tables::$selectedColumnType == 'wp_pz')
		{
			usort($arrLeagueTable, array($this, 'compareWpPz'));
		}
		else if (tl_triathlon_league_tables::$selectedColumnType == 'pkt')
		{
			usort($arrLeagueTable, array($this, 'comparePkt'));
		}
		
		// now set the place number
		foreach ($arrLeagueTable as $index => $entry)
		{
			$arrLeagueTable[$index]['tablePlace'] = ($index + 1);
		}
		
		$this->Database->prepare("UPDATE tl_triathlon_league_tables %s WHERE id=?")->set(array('tableData'=>serialize($arrLeagueTable)))->execute($dc->id);
	}
}

?>