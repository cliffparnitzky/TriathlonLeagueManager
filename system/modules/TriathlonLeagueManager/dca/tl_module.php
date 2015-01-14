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
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['triathlonLeagueManagerTable'] = '{title_legend},name,headline,type;{triathlonLeagueTable_legend},triathlonLeagueTable;{template_legend:hide},triathlonLeagueTableTemplate;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['triathlonLeagueTable'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['triathlonLeagueTable'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_TriathlonLeagueManager', 'getLeagueTables'),
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50', 'includeBlankOption'=>true),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['triathlonLeagueTableTemplate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['triathlonLeagueTableTemplate'],
	'default'                 => 'pl_ce_list_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_TriathlonLeagueManager', 'getLeagueTableTemplates'),
	'eval'                    => array('tl_class'=>'clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
); 

/**
 * Class tl_module_TriathlonLeagueManager
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * PHP version 5
 * @copyright  Cliff Parnitzky 2011-2015
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class tl_module_TriathlonLeagueManager extends Backend
{
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Return all templates as array
	 * @param object
	 * @return array
	 */
	public function getLeagueTables(DataContainer $dc)
	{
		$objLeagueTables = $this->Database->prepare('SELECT * FROM tl_triathlon_league_tables ORDER BY league, title')->execute();
		
		$arrOptions = array();
		$group = '';
		
		while ($objLeagueTables->next())
		{
			if ($GLOBALS['TL_LANG']['TriathlonLeagueManager']['league'][$objLeagueTables->league] != $group)
			{
				$group = $GLOBALS['TL_LANG']['TriathlonLeagueManager']['league'][$objLeagueTables->league];
			}
			$arrOptions[$group][$objLeagueTables->id] = $objLeagueTables->title;
		}
		return $arrOptions;
	}
	
	/**
	 * Return all templates as array
	 * @param object
	 * @return array
	 */
	public function getLeagueTableTemplates(DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if ($this->Input->get('act') == 'overrideAll')
		{
			$intPid = $this->Input->get('id');
		}

		return $this->getTemplateGroup('mod_triathlonLeagueManagerTable', $intPid);
	}  
}

?>