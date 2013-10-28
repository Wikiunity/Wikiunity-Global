<?php
//Einbindung der Wikiunity Logos (wu-logo-eng.css)
$wgHooks['BeforePageDisplay'][] = 'wfLogoWUengCSS';

function wfLogoWUengCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-logo-eng.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Logo/wu-logo-eng.css">
 ');
 return true;
}