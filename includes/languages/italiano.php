<?php
/*
  $Id$

 CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_TIME, 'it_IT.UTF-8');

const DATE_FORMAT_SHORT = '%m/%d/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'm/d/Y'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the application's default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
const HTML_PARAMS = '"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Il mio profilo';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Informazioni Consegna';
const CHECKOUT_BAR_PAYMENT = 'Informazioni Pagamento';
const CHECKOUT_BAR_CONFIRMATION = 'Conferma';

// pull down default text
const PULL_DOWN_DEFAULT = 'Selezionare';

// javascript messages
const JS_ERROR = 'Ci sono stati degli errori nella compilazione del modulo!\nEseguire le seguenti modifiche:\n\n';

const JS_ERROR_NO_PAYMENT_MODULE_SELECTED = '* Seleziona un tipo di pagamento per il tuo acquisto.\n';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Seleziona un tipo di pagamento per il tuo acquisto.';

const IMAGE_BUTTON_ADD_ADDRESS = 'Aggiungi indirizzo';
const IMAGE_BUTTON_BACK = 'Indietro';
const IMAGE_BUTTON_BUY_NOW = 'Compra Subito';
const IMAGE_BUTTON_CHANGE_ADDRESS = 'Cambia indirizzo';
const IMAGE_BUTTON_CHECKOUT = 'Concludi al pagamento';
const IMAGE_BUTTON_CONFIRM_ORDER = 'Conferma acquisto';
const IMAGE_BUTTON_CONTINUE = 'Continue';
const IMAGE_BUTTON_DELETE = 'Cancella';
const IMAGE_BUTTON_LOGIN = 'Accedi';
const IMAGE_BUTTON_IN_CART = 'Aggiungi al carrello';
const IMAGE_BUTTON_SEARCH = 'Cerca';
const IMAGE_BUTTON_UPDATE = 'Aggiorna';
const IMAGE_BUTTON_UPDATE_PREFERENCES = 'Modifica le Preferenze';

const SMALL_IMAGE_BUTTON_DELETE = 'Cancella';
const SMALL_IMAGE_BUTTON_EDIT = 'Modifica';
const SMALL_IMAGE_BUTTON_VIEW = 'Vedi';
const SMALL_IMAGE_BUTTON_BUY = 'Compra';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'La data di scadenza della carta di credito non ?? corretta.<br>Controlla la data e riprova.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'Il numero della carta di credito immesso ?? invalido.<br>Controlla il numero e riprova.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'I primi quattro numeri digitati sono: %s<br>Se questi numeri sono corretti, noi accettiamo la carta di credito.<br>Se non sono giusti, riprova.';

const TEXT_SEARCH_PLACEHOLDER = 'Cerca';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Informazioni Richieste';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// product notifications
const PRODUCT_SUBSCRIBED = '%s ?? stato aggiunto alla tua lista notifiche';
const PRODUCT_UNSUBSCRIBED = '%s ?? stato rimosso dalla tua lista notifiche';
const PRODUCT_ADDED = '%s ?? stato aggiunto al tuo Carrello';
const PRODUCT_REMOVED = '%s ?? stato rimosso dal tuo Carrello';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><strong>JavaScript seems to be disabled in your browser.</strong></p>
<p>Devi abilitare JavaScript nel tuo  browser per utilizzare tutte le funzionalit?? di questo sito.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Clicka qui per le istruzione riguardo l\'abilitazione javascript nel tuo  browser</a>.</p>
EOT;

// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Edit</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>';

const ENTRY_COMMENTS = 'C\'?? qualcosa che dobbiamo sapere?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Commenta qui...';
