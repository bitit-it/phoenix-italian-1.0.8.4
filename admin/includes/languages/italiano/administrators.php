<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Amministratori');

define('TABLE_HEADING_ADMINISTRATORS', 'Amministratori');
define('TABLE_HEADING_ACTION', 'Azioni');
define('TABLE_HEADING_HTPASSWD', 'Password di sicurezza by htpasswd');

define('TEXT_INFO_INSERT_INTRO', 'Inserisci un nuovo amministratore');
define('TEXT_INFO_EDIT_INTRO', 'Effettua le variazioni necessarie');
define('TEXT_INFO_DELETE_INTRO', 'Sei sicuro di voler cancellare l\'amministratore?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Nuovo amministratore');
define('TEXT_INFO_USERNAME', 'Username:');
define('TEXT_INFO_NEW_PASSWORD', 'Nuova Password:');
define('TEXT_INFO_PASSWORD', 'Password:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD', 'Protetto con htaccess/htpasswd');

define('ERROR_ADMINISTRATOR_EXISTS', 'Errore: L\'amministratore esiste attualmente.');

define('HTPASSWD_INFO', '<strong>Aggiungi protezione con htaccess/htpasswd</strong><p>Questo osCommerce Online Merchant Administration Tool non sono state impostate le chiavi di sicurezza htaccess/htpasswd.</p><p>Impostando il livello di sicurezza htaccess/htpasswd verra\' automaticamente memorizzato il nome e la password dell\amministratore in un file htpasswd quando aggiornerai il record password dell\'amministratore.</p><p><strong>P.S.:</strong>, se questo livello di sicurezza :&egrave; abilitato e non  puoi accedere al pannello Amministratore, effettua i seguenti cambiamenti e contatta il tuo hosting provider per abilitare la protezione htaccess/htpasswd:</p><p><u><strong>1. Edita questo file:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Se sono presenti, rimuovi le seguenti linee di codice:</p><p><i>%s</i></p><p><u><strong>2. Cancella questo file:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<strong>Protezione aggiuntiva con htaccess/htpasswd</strong><p>Questo strumento di OScommerce installa una Protezione aggiuntiva con htaccess/htpasswd means.</p>');
define('HTPASSWD_PERMISSIONS', '<strong>Protezione aggiuntiva con htaccess/htpasswd</strong><p>Lo strumento on line per installare una protezione aggiuntiva tramite htaccess/htpasswd means.</p><p>richiede che sia scrivibile il file  htaccess/htpasswd security layer:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Ricarica la pagina per la conferma che il file si settato correttamente.</p>');

define('IMAGE_INSERT_NEW_ADMIN', 'Nuovo utente amministratore');

