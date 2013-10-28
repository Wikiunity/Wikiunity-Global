<?php
//Einbindung der Wikiunity Standard Buttons (wu-buttons-de.css)
$wgHooks['BeforePageDisplay'][] = 'wfButtonWUdeCSS';

function wfButtonWUdeCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-buttons-de.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Buttons/wu-buttons-de.css">
 ');
 return true;
}
