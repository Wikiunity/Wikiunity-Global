<?php
//********************Info zur Erweiterung***************************************************************//
/* Erweiterung zum Einfügen von CSS & JS Daten.                                                          */
/* Für ein schnelleres Backup und leitungsärmere DB- Abfragen.                                           */
/* Diese Erweiterung macht genaue einbindungen von Grafischen Designs genauso möglich,                   */
/* wie das globale Einbinden der Standards, wie Button oder Klappmenüs.                                  */
/*                                                                                                       */
/* Alle Versionen oder Backups, wie auch änderunegen bitte im:                                           */
/* => http://developing.wikiunity.com                                                                    */
/* Zur Informationellen Übersicht, bitte IMMER fŸr alle Staffs festhalten und protokolieren!!!           */
/*                                                                                                       */
/* Produced by Michael McCouman jr.                                                                      */
//********************HOME*******************************************************************************//

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
#require_once("$IP/extensions/GlobWU/HomePack/GlobWU.home-de.php" );  
/*                                                                                                       */
//************** ENG Home */
/* Hier findest du alle Einbindungen die für das ENG Homewikis (www.wikiunity.com) relevant sind.        */
#require_once("$IP/extensions/GlobWU/HomePack/GlobWU.home-eng.php" );  
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
#require_once("$IP/extensions/GlobWU/GlobalPack/GlobWU.global-de.php" );   
/*                                                                                                       */
//************** ENG Global *//
/* Hier findest du alle Einbindungen die für die ENG Wikiunity gelten Bsp.:(config.wikiunity.com)        */
#require_once("$IP/extensions/GlobWU/GlobalPack/GlobWU.global-eng.php" ); 
/*                                                                                                       */
//********************GLOBAL******************************************************************************/