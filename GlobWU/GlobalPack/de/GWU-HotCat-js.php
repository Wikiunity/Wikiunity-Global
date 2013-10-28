<?php
/*
* Copyright 2012 - Wikiunity by Michael McCouman jr. (CEO)
* @info Wikiunity(c) Extension 2012 for MediaWiki
* @dev/founder by Michael Kaufmann
* @cover by Michael Kaufmann
* @Hostname by Michael Kaufmann
* @developers and founders by Tim Weyer, Bob Weinand
*/

$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 1.0 (Wikibyte Extem)',
        'url' => 'http://labs.wikibyte.org',
        'author' => '[[User:Lupo]], [[User:McCouman]], [[User:TheDJ]], [[User:Superm401]], [[User:Magnus Manske]]',
        'description' => 'GlobWU stellt alle Standards sowie Einstellungen für Host-Wikis bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'version 1.5.6',
);

//Einbindung der Wikiunity HotCats (HotCat.js)
$wgHooks['BeforePageDisplay'][] = 'wfHotCatJS';

function wfHotCatJS() {
 global $wgOut;
 $wgOut->addHeadItem("HotCat.js",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/GlobalPack/HotCat/HotCat.js">
 ');
 return true;
}
