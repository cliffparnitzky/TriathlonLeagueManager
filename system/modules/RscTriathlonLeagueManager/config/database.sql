-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_triathlon_league_team`
-- 

CREATE TABLE `tl_triathlon_league_teams` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `ratingType` varchar(255) NOT NULL default '',
  `website` varchar(512) NOT NULL default '',
  `ownTeam` char(1) NOT NULL default '', 
  `logo` varchar(512) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8; 

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `triathlonLeagueRatingType` varchar(255) NOT NULL default '',
  `triathlonLeagueColumns` varchar(255) NOT NULL default '',
  `triathlonLeagueTable` blob NULL,
  `triathlonLeagueUpdateDate` varchar(255) NOT NULL default '',
  `triathlonLeagueRaceCount` varchar(255) NOT NULL default '',
	`triathlonLeagueTableTemplate` varchar(255) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 