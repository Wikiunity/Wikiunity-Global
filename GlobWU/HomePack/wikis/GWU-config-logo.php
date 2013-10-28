<?php
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 1.0',
        'url' => 'http://wikiunity.com',
        'author' => '[[User:McCouman|Michael McCouman jr.]]',
        'description' => 'GlobWU stellt alle Standards sowie Einstellungen für Host-Wikis bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'version 1.0',
);

//Einbindung der Wikiunity Config Logo CSS (wu-logo-eng.css)
$wgHooks['BeforePageDisplay'][] = 'wfConfigLogoWUCSS';

function wfConfigLogoWUCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-logo-config.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Logo/wu-logo-config.css">
 ');
 return true;
}