<?php
//Einbindung der Wikiunity Logos (wu-logo-de.css)
$wgHooks['BeforePageDisplay'][] = 'wfLogoWUdeCSS';

function wfLogoWUdeCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-logo-de.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Logo/wu-logo-de.css">
 ');
 return true;
}