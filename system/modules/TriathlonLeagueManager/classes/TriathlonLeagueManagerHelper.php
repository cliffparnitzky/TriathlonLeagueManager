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
 * Run in a custom namespace, so the class can be replaced
 */
namespace CliffParnitzky\Contao\TriathlonLeagueManager;

/**
 * Class TriathlonLeagueTablesModel
 *
 * @copyright  Cliff Parnitzky 2015
 * @author     Cliff Parnitzky
 * @package    Models
 */
class TriathlonLeagueManagerHelper
{
	/**
	 * Return an array of all tables grouped by league
	 * @return array The assoc array of tables where each key on first level is the group (league name), the key on second level is the table is and the value is the table title
	 */
	public static function getTablesForBackend()
	{
		$objLeagueTables = TriathlonLeagueTablesModel::findAll(array('order'=>'league, title'));
		
		$tables = array();
		$group = '';
		
		if ($objLeagueTables !== null)
		{
			while ($objLeagueTables->next())
			{
				if ($GLOBALS['TL_LANG']['TriathlonLeagueManager']['league'][$objLeagueTables->league] != $group)
				{
					$group = $GLOBALS['TL_LANG']['TriathlonLeagueManager']['league'][$objLeagueTables->league];
				}
				$tables[$group][$objLeagueTables->id] = $objLeagueTables->title;
			}
		}
		return $tables;
	}
	
	/**
	 * Return an array of all teams
	 * @param $ratingType String The rating type to filter for
	 * @return array The assoc array of teams where each key is the team id and the value is an array with fields: name, ownTeam, website, logo
	 */
	public static function getTeamsForFrontend($ratingType)
	{
		$arrTeams = array();
		$objTeams = \TriathlonLeagueTeamsModel::findByRatingType($ratingType);

		if ($objTeams !== null)
		{
			while ($objTeams->next())
			{
				$logo = "";
				if ($objTeams->logo != '')
				{
					$objFile = \FilesModel::findByUuid($objTeams->logo);
					if ($objFile !== null)
					{
						$logo = $objFile->path;
					}
				}
				$arrTeams[$objTeams->id] = array('name' => $objTeams->name, 'ownTeam' => $objTeams->ownTeam, 'website' => $objTeams->website, 'logo' => $logo);
			}
		}
	
		return $arrTeams;
	}
	
	/**
	 * Return the edit league table wizard
	 * @param \Contao\DataContainer
	 * @return string
	 */
	public static function getEditLeagueTableWizard(\Contao\DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=triathlonLeagueTables&amp;act=edit&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value) . '" style="padding-left:3px" onclick="Backend.openModalIframe({\'width\':768,\'title\':\'' . specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'][1], $dc->value))) . '\',\'url\':this.href});return false">' . \Contao\Image::getHtml('alias.gif', $GLOBALS['TL_LANG']['tl_content']['editalias'][0], 'style="vertical-align:top"') . '</a>';
	}
}
