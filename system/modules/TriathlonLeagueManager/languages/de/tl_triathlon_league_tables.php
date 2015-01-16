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
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['title']              = array('Titel', 'Geben Sie den Titel für diese Tabelle an.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['league']             = array('Liga', 'Geben Sie die Liga für diese Tabelle an.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['ratingType']         = array('Wertungstyp', 'Wählen Sie den Wertungstyp aus.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['columnType']         = array('Spaltentyp', 'Wählen Sie den Spaltentyp für die Erfassung der Punkte aus.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableData']          = array('Tabelle', 'Erfassen Sie die Liga Tabelle.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePlace']         = array('Platz', 'Geben Sie die Platzierung an. Bei aktiver automatischer Sortierung wird die Platznummer dynamisch vergeben.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableTeam']          = array('Team', 'Wählen Sie das Team aus.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePoints']        = array('Punkte', 'Erfassen Sie die aktuelle Punktzahl des Teams.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tableScoringPoints'] = array('Wertungspunkte', 'Erfassen Sie die aktuellen Wertungspunkte des Teams.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tablePlaceNumber']   = array('Platzziffer', 'Erfassen Sie die aktuelle Platzziffer des Teams.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['autoSortTable']      = array('Tabelle automatisch sortieren', 'Legen Sie fest, ob die Tabelle automatisch sortiert werden soll. Es wird nach Punkten bzw. Wertungspunkten + Platzziffern sortiert. Um bei Punktgleichheit die Reihenfolge der Plätze zu ändern, muss die automatische Sortierung deaktiviert sein. Dann können die Pfeile zum Verschieben genutzt werden.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['updateDate']         = array('Stand (Datum der letzten Aktualisierung)', 'Erfassen Sie letzte Aktualisierungsdatum der Tabelle.');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['raceCount']          = array('Rennen x von y', 'Erfassen den Stand der Rennen. Wieviel Rennen (x) von y Rennen wurden bereits absolviert.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['general_legend']   = 'Allgemein';
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['tabledata_legend'] = 'Tabellendaten';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['new']    = array('Neue Tabelle', 'Eine neue Tabelle anlegen');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['show']   = array('Details des Teams', 'Details des Teams ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['edit']   = array('Team bearbeiten', 'Team ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['copy']   = array('Team duplizieren', 'Team ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_triathlon_league_tables']['delete'] = array('Team löschen', 'Team ID %s löschen');

?>