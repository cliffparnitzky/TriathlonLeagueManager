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
$GLOBALS['TL_DCA']['tl_module']['palettes']['triathlonLeagueManagerTable'] = '{title_legend},name,headline,type;{triathlonLeagueTable_legend},triathlonLeagueTable;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['triathlonLeagueTable'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['triathlonLeagueTable'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => TriathlonLeagueManagerHelper::getTablesForBackend(),
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50', 'includeBlankOption'=>true),
	'sql'                     => "int(10) unsigned NOT NULL default '0'"
);

?>