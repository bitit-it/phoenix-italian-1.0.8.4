<?php
/*
  $Id$    edit 01/11/2020

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License

*/

define('NAVBAR_TITLE_1', 'Accedi');
define('NAVBAR_TITLE_2', 'Password dimenticata');

define('HEADING_TITLE', 'Ho dimenticato la mia Password!');

define('TEXT_MAIN', 'Se hai dimenticato la password, inserisci il tuo indirizzo e-mail qui sotto e ti invieremo le istruzioni su come modificare la password in modo sicuro.');

define('TEXT_PASSWORD_RESET_INITIATED', 'Controlla la tua e-mail per le istruzioni su come modificare la password. Esso contiene un collegamento che è solo per 24 ore o fino a quando la password è stata aggiornata.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Errore: L\'indirizzo email che hai inserito non è registrato presso di noi, si prega di riprovare.');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Nuova password');
define('EMAIL_PASSWORD_RESET_BODY', 'Una nuova password è stata richiesta per il tuo account ' . STORE_NAME . '.' . "\n\n" . 'Segui questo link personale per cambiare la tua password sicura:' . "\n\n" . '%s' . "\n\n" . 'Il link verrà automaticamente eliminato dopo 24 ore o dopo la password è stata modificata.' . "\n\n" . 'Se hai bisogno di aiuto con uno qualsiasi dei nostri servizi online, si prega di e-mail il proprietario del negozio: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Errore: Un link per reimpostare la password è già stata inviata. Riprova fra %s minuti.');

define('IMAGE_BUTTON_RESET_PASSWORD', 'Reimposta la Password');


