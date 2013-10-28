<?php
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 1.0',
        'url' => 'http://wikiunity.com',
        'author' => '[[User:McCouman|Michael McCouman jr.]]',
        'description' => 'GlobWU stellt alle Standards sowie Einstellungen für Host-Wikis bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'version 1.0',
);

//Einbindung der Wikiunity Developer Logos (wu-logo-eng.css)
$wgHooks['BeforePageDisplay'][] = 'wfDevLogoWUCSS';

function wfDevLogoWUCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-logo-dev.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Logo/wu-logo-dev.css">
 ');
 return true;
}