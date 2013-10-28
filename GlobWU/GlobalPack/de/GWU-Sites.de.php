<?php

$wgExtensionCredits['parserhook'][] = array(
        'name' => 'AdvertisingInclude 4.0',
        'url' => 'http://wikiunity.com',
        'author' => 'Michael [[User:McCouman|McCouman]] jr.',
        'description' => 'Integrates the flying banners in Wikiunity',
);

	


//*******************Wikiunity*Buttons***********************************//
//Einbindung der McCouman Seite CSS
$wgHooks['BeforePageDisplay'][] = 'wfWikiunityButtonsCSS';

function wfWikiunityButtonsCSS() {
 global $wgOut;
 $wgOut->addHeadItem("wikiunity-buttons.css",'<link rel="stylesheet" type="text/css" href="/w/extensions/AdvertisingInclude/wikiunity-buttons.css">');
 return true;
}


//************************Pages***********************************//
//Einbindung der McCouman Seite CSS
$wgHooks['BeforePageDisplay'][] = 'wfMcCoumanCSS';

function wfMcCoumanCSS() {
 global $wgOut;
 $wgOut->addHeadItem("mccouman.css",'<link rel="stylesheet" type="text/css" href="/w/extensions/AdvertisingInclude/mccouman.css">');
 return true;
}

//********************************AUFKLAPPMENU**********************//
//Einbindung der Aufklapmenüs -colapsis.css 
$wgHooks['BeforePageDisplay'][] = 'wfColButtonCSS';

function wfColButtonCSS() {
 global $wgOut;
 $wgOut->addHeadItem("colapsis.css ",'<link rel="stylesheet" type="text/css" href="/w/extensions/AdvertisingInclude/colapsis.css">');
 return true;
}
//Einbindung der Aufklapmenüs -colapsis.css 
$wgHooks['BeforePageDisplay'][] = 'wfColButtonJS';

function wfColButtonJS() {
 global $wgOut;
 $wgOut->addHeadItem("colapsis.js",'<script type="text/javascript" src="/w/extensions/AdvertisingInclude/colapsis.js"></script>');
 return true;
}