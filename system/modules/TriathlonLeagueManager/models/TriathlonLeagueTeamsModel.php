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
 * Class TriathlonLeagueTeamsModel
 *
 * @copyright  Cliff Parnitzky 2015
 * @author     Cliff Parnitzky
 * @package    Models
 */
class TriathlonLeagueTeamsModel extends \Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_triathlon_league_teams';

		/**
	 * Find teams which have the same given rating type
	 *
	 * @param integer $strRatingType The rating type
	 * @param array   $arrOptions    An optional options array
	 *
	 * @return \Model\Collection|null A collection of models or null if no team where found for this given rating type
	 */
	public static function findByRatingType($strRatingType, array $arrOptions=array())
	{
		$t = static::$strTable;
		return static::findBy(array("$t.ratingType = ?"), array($strRatingType), $arrOptions);
	}

}