<?php
//Einbindung der Wikiunity Standard Seiteneinbindungen (wu-site-eng.css)
$wgHooks['BeforePageDisplay'][] = 'wfSiteWUengCSS';

function wfSiteWUengCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-site-eng.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Seiten/wu-site-eng.css">
 ');
 return true;
}
