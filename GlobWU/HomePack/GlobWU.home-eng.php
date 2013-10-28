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
        'name' => 'GlobWU 1.2',
        'url' => 'http://wikiunity.com',
        'author' => '[[User:McCouman|Michael McCouman jr.]]',
        'description' => 'GlobWU stellt alle Standards sowie Einstellungen für Host-Wikis bereit.<br> Die hilft vor allem  dabei, schnellere Backups der globalen Wikis zu verwalten. ',
		'version' => 'Version 1.1a ',
);
//********************HOME********************************************************************************/
/* Dies Einstellungen sind für die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmenüs, Seitendesigns und Standard Buttons      */
/* in den Homewikis fest zu legen. Dies spart DB- Einträge und ist somit nicht für Nutzer einsehbar.     */
/*                                                                                                       */
//************** ENG Home */
/* Hier findest du alle Einbindungen die für das ENG Homewikis (www.wikiunity.com) relevant sind.        */
/*                                                                                                       */
/* CSS für ENG Buttons  */
require_once("$IP/extensions/GlobWU/HomePack/eng/GWU-Buttons.eng.php" ); 

/* CSS für ENG Wikilogo */
require_once("$IP/extensions/GlobWU/HomePack/eng/GWU-Logo.eng.php" ); 

/* CSS für ENG Seiten */
require_once("$IP/extensions/GlobWU/HomePack/eng/GWU-Sites.eng.php" );
/*                                                                                                       */
/*                                                                                                       */
//********************HOME********************************************************************************/


//********************GLOBAL******************************************************************************/
/* Dies Einstellungen sind für die folgenden Seiten als Standard eingebunden und erzeugen u.a.           */
/* Einbindungen durch CSS und JavaScripts, um Logos, Klappmenüs, Seitendesigns und Standard Buttons      */
/* um diese in allen Wikis von Wikiunity fest zu legen. Es dient als Packet und kan durch die MWSeiten   */
/* geändert werden. "Beispiel:(MediaWiki:Common.js/css)"                                                 */
/*                                                                                                       */
//************** ENG Global *//
/* Hier findest du alle Einbindungen die für die ENG Wikiunity gelten Bsp.:(config.wikiunity.com)        */
/*                                                                                                       */
/* CSS für ENG Buttons  */
#require_once("$IP/extensions/GlobWU/GlobalPack/eng/GWU-Buttons.eng.php" ); 

/* CSS für ENG Wikilogo */
#require_once("$IP/extensions/GlobWU/GlobalPack/eng/GWU-Logo.eng.php" ); 

/* CSS für ENG Seiten */
#require_once("$IP/extensions/GlobWU/GlobalPack/eng/GWU-Sites.eng.php" );

/*                                                                                                       */
//********************GLOBAL******************************************************************************/