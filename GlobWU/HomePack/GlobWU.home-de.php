<?php
//********************Info zur Erweiterung***************************************************************//
/* Erweiterung zum Einfügen von CSS & JS Daten.                                                          */
/* Für ein schnelleres Backup und leitungsärmere DB- Abfragen.                                           */
/* Diese Erweiterung macht genaue einbindungen von Grafischen Designs genauso möglich,                   */
/* wie das globale Einbinden der Standards, wie Button oder Klappmenüs.                                  */
/*                                                                                                       */
/* Alle Versionen oder Backups, wie auch änderunegen bitte im:                                           */
/* => http://developing.wikiunity.com                                                                    */
/* Zur Informationellen Übersicht, bitte IMMER für alle Staffs festhalten und protokolieren!!!           */
/*                                                                                                       */
/* Produced by Michael McCouman jr.                                                                      */
//*******************************************************************************************************//
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'GlobWU 3.0',
        'url' => 'http://wikiunity.com',
        'author' => '[http://de.community.wikiunity.com/wiki/User:McCouman <span style="color:#000;">Michael McCouman jr.</span>]',
        'description' => 'GlobWU stellt alle Standard-Stylesheets f&uuml;r Wikiunity-Projekte bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'version 3.1a',
);
//********************HOME********************************************************************************/
/* Dies Einstellungen sind für die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmenüs, Seitendesigns und Standard Buttons      */
/* in den Homewikis fest zu legen. Dies spart DB- Einträge und ist somit nicht für Nutzer einsehbar.     */
/*                                                                                                       */
//************** DE Home **/
/* Hier findest du alle Einbindungen die für das DE Homewikis (www.de.wikiunity.com) relevant sind.      */
/*                                                                                                       */
/* CSS für Buttons  */
require_once("$IP/extensions/GlobWU/HomePack/de/GWU-Buttons.de.php" ); 

/* CSS für Wikilogo */
require_once("$IP/extensions/GlobWU/HomePack/de/GWU-Logo.de.php" ); 

/* CSS für Seiten */
require_once("$IP/extensions/GlobWU/HomePack/de/GWU-Sites.de.php" ); 

/*                                                                                                       */
//********************HOME********************************************************************************/


//********************GLOBAL******************************************************************************/
/* Dies Einstellungen sind für die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmenüs, Seitendesigns und Standard Buttons      */
/* um diese in allen Wikis von Wikiunity fest zu legen. Es dient als Packet und kan durch die MWSeiten   */
/* geändert werden. "Beispiel:(MediaWiki:Common.js/css)"                                                 */
/*                                                                                                       */
//************** DE Global **//
/* Hier findest du alle Einbindungen die für die DE Wikiunity gelten Bsp.:(de.gutentag.wikiunity.com)    */
/*                                                                                                       */
/* CSS für Buttons  */
#require_once("$IP/extensions/GlobWU/GlobalPack/de/GWU-Buttons.de.php" ); 

/* CSS für Wikilogo */
#require_once("$IP/extensions/GlobWU/GlobalPack/de/GWU-Logo.de.php" ); 

/* CSS für Seiten */
#require_once("$IP/extensions/GlobWU/GlobalPack/de/GWU-Sites.de.php" ); 

/*                                                                                                       */
//********************GLOBAL******************************************************************************/