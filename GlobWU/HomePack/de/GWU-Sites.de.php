<?php
//Einbindung der Wikiunity Standard Seiteneinbindungen (wu-site-de.css)
$wgHooks['BeforePageDisplay'][] = 'wfSiteWUdeCSS';

function wfSiteWUdeCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-site-de.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Seiten/wu-site-de.css">
 ');
 return true;
}

//McCouman: Personalseite (page-mccouman.css)
$wgHooks['BeforePageDisplay'][] = 'wfSiteMcCoumanWUdeCSS';

function wfSiteMcCoumanWUdeCSS() {
 global $wgOut;
 $wgOut->addHeadItem("page-mccouman.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Seiten/page-mccouman.css">
 ');
 return true;
}