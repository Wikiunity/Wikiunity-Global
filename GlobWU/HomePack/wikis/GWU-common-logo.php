<?php
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 1.0',
        'url' => 'http://wikiunity.com',
        'author' => '[[User:McCouman|Michael McCouman jr.]]',
        'description' => 'GlobWU stellt alle Standards sowie Einstellungen für Host-Wikis bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'version 1.0',
);

//Einbindung der Wikiunity Logos (wu-logo-eng.css)
$wgHooks['BeforePageDisplay'][] = 'wfLogoNoneWUengCSS';

function wfLogoNoneWUengCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wunone-logo-eng.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Logo/wunone-logo-eng.css">
 ');
 return true;
}