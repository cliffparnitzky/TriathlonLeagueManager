<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package TriathlonLeagueManager
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'CliffParnitzky\Contao\TriathlonLeagueManager',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'CliffParnitzky\Contao\TriathlonLeagueManager\TriathlonLeagueManagerHelper'       => 'system/modules/TriathlonLeagueManager/classes/TriathlonLeagueManagerHelper.php',

	// Elements
	'CliffParnitzky\Contao\TriathlonLeagueManager\ContentTriathlonLeagueManagerTable' => 'system/modules/TriathlonLeagueManager/elements/ContentTriathlonLeagueManagerTable.php',

	// Models
	'CliffParnitzky\Contao\TriathlonLeagueManager\TriathlonLeagueTablesModel'         => 'system/modules/TriathlonLeagueManager/models/TriathlonLeagueTablesModel.php',
	'CliffParnitzky\Contao\TriathlonLeagueManager\TriathlonLeagueTeamsModel'          => 'system/modules/TriathlonLeagueManager/models/TriathlonLeagueTeamsModel.php',

	// Modules
	'CliffParnitzky\Contao\TriathlonLeagueManager\ModuleTriathlonLeagueManagerTable'  => 'system/modules/TriathlonLeagueManager/modules/ModuleTriathlonLeagueManagerTable.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_triathlonLeagueManagerTable'  => 'system/modules/TriathlonLeagueManager/templates/elements',
	'mod_triathlonLeagueManagerTable' => 'system/modules/TriathlonLeagueManager/templates/modules',
));
