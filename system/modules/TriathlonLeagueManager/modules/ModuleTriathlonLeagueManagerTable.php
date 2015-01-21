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
 * Run in a custom namespace, so the class can be replaced
 */
namespace TriathlonLeagueManager;

/**
 * Class ModuleTriathlonLeagueManagerTable
 *
 * Front end module "triathlonLeagueManagerTable".
 * @copyright  Cliff Parnitzky 2013-2015
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class ModuleTriathlonLeagueManagerTable extends \Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_triathlonLeagueManagerTable';

	/**
	 * Redirect to the selected page
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['triathlonLeagueManagerTable'][0]) . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		$objLeagueTable = \TriathlonLeagueTablesModel::findByPK($this->triathlonLeagueTable);
		
		if ($objLeagueTable)
		{
			$this->Template->tableData = deserialize($objLeagueTable->tableData);
			$this->Template->teams = \TriathlonLeagueManagerHelper::getTeamsForFrontend($objLeagueTable->ratingType);
			$this->Template->ratingType = $objLeagueTable->columnType;
			$this->Template->ratingTypeText = $GLOBALS['TL_LANG']['TriathlonLeagueManager']['ratingType'][$objLeagueTable->columnType];
			$this->Template->columnType = $objLeagueTable->columnType;
			$this->Template->columnTypeText = $GLOBALS['TL_LANG']['TriathlonLeagueManager']['columnType'][$objLeagueTable->columnType];

			$strUpdateDate = \Date::parse(\Config::get('dateFormat'), $objLeagueTable->updateDate);
			$arrRaceCount = deserialize($objLeagueTable->raceCount);

			$this->Template->updateDate = $strUpdateDate;
			$this->Template->raceCount = $arrRaceCount;
			
			$this->Template->tfoot = sprintf($GLOBALS['TL_LANG']['TriathlonLeagueManager']['tfoot'], $strUpdateDate, $arrRaceCount[0], $arrRaceCount[1]);
		}
	}
}

?>