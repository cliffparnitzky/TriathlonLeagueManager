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
	'TriathlonLeagueManager',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'TriathlonLeagueManager\TriathlonLeagueManagerHelper'       => 'system/modules/TriathlonLeagueManager/classes/TriathlonLeagueManagerHelper.php',

	// Elements
	'TriathlonLeagueManager\ContentTriathlonLeagueManagerTable' => 'system/modules/TriathlonLeagueManager/elements/ContentTriathlonLeagueManagerTable.php',

	// Models
	'TriathlonLeagueManager\TriathlonLeagueTablesModel'         => 'system/modules/TriathlonLeagueManager/models/TriathlonLeagueTablesModel.php',
	'TriathlonLeagueManager\TriathlonLeagueTeamsModel'          => 'system/modules/TriathlonLeagueManager/models/TriathlonLeagueTeamsModel.php',

	// Modules
	'TriathlonLeagueManager\ModuleTriathlonLeagueManagerTable'  => 'system/modules/TriathlonLeagueManager/modules/ModuleTriathlonLeagueManagerTable.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_triathlonLeagueManagerTable'  => 'system/modules/TriathlonLeagueManager/templates/elements',
	'mod_triathlonLeagueManagerTable' => 'system/modules/TriathlonLeagueManager/templates/modules',
));
