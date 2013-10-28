<?php
//Einbindung der Wikiunity Standard Buttons (wu-buttons-eng.css)
$wgHooks['BeforePageDisplay'][] = 'wfButtonWUengCSS';

function wfButtonWUengCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wu-buttons-eng.css",'
 <link rel="stylesheet" type="text/css" href="/w/extensions/GlobWU/HomePack/Buttons/wu-buttons-eng.css">
 ');
 return true;
}