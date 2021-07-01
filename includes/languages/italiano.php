<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
  edit 01/11/2020
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_TIME, ['it_IT.UTF-8', 'it_IT.UTF8','ita_ITA']);

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';
const JQUERY_DATEPICKER_FORMAT = 'dd/mm/yy'; // see http://docs.jquery.com/UI/Datepicker/formatDate

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the application's default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
const HTML_PARAMS = 'dir="LTR" lang="it"';

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

// constants for use in tep_prev_next_display function
const TEXT_RESULT_PAGE = 'Pagina dei risultati:';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> prodotti)';

const PREVNEXT_TITLE_FIRST_PAGE = 'Prima pagina';
const PREVNEXT_TITLE_PREVIOUS_PAGE = 'Pagina precedente';
const PREVNEXT_TITLE_NEXT_PAGE = 'Pagina successiva';
const PREVNEXT_TITLE_LAST_PAGE = 'Ultima pagina';
const PREVNEXT_TITLE_PAGE_NO = 'Pagina %d';
const PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE = 'Precedenti  %d pagine';
const PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE = 'Successive %d pagine';
const PREVNEXT_BUTTON_FIRST = '&lt;&lt;PRIMO';
const PREVNEXT_BUTTON_PREV = '[&lt;&lt;&nbsp;Precedente]';
const PREVNEXT_BUTTON_NEXT = '[Successivo&nbsp;&gt;&gt;]';
const PREVNEXT_BUTTON_LAST = 'ULTIMO&gt;&gt;';

const IMAGE_BUTTON_ADD_ADDRESS = 'ggiungi indirizzo';
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

const ICON_ARROW_RIGHT = 'Altro';

const TEXT_SORT_PRODUCTS = 'Ordina Prodotti ';
const TEXT_DESCENDINGLY = 'Discendente';
const TEXT_ASCENDINGLY = 'Ascendente';
const TEXT_BY = ' Per ';

const TEXT_UNKNOWN_TAX_RATE = 'Importo tasse assente';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'La data di scadenza della carta di credito non è corretta.<br>Controlla la data e riprova.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'Il numero della carta di credito immesso è invalido.<br>Controlla il numero e riprova.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'I primi quattro numeri digitati sono: %s<br>Se questi numeri sono corretti, noi accettiamo la carta di credito.<br>Se non sono giusti, riprova.';

// category views
const TEXT_VIEW = 'Vista: ';
const TEXT_VIEW_LIST = ' Lista';
const TEXT_VIEW_GRID = ' Griglia';

// search placeholder
const TEXT_SEARCH_PLACEHOLDER = 'Ricerca';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Informazioni Richieste';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// grid/list
const TEXT_SORT_BY = 'Ordina per ';
// moved from index
const TABLE_HEADING_IMAGE = '';
const TABLE_HEADING_MODEL = 'Modello';
const TABLE_HEADING_PRODUCTS = 'Nome Prodotto';
const TABLE_HEADING_MANUFACTURER = 'Produttore';
const TABLE_HEADING_QUANTITY = 'Stock';
const TABLE_HEADING_PRICE = 'Prezzo';
const TABLE_HEADING_WEIGHT = 'Peso';
const TABLE_HEADING_BUY_NOW = 'Compra Subito';
const TABLE_HEADING_LATEST_ADDED = 'Data Inserimento';
const TABLE_HEADING_ORDERED = 'Più Venduti';

// product notifications
const PRODUCT_SUBSCRIBED = '%s è stato aggiunto alla tua lista notifiche';
const PRODUCT_UNSUBSCRIBED = '%s è stato rimosso dalla tua lista notifiche';
const PRODUCT_ADDED = '%s è stato aggiunto al tuo Carrello';
const PRODUCT_REMOVED = '%s è stato rimosso dal tuo Carrello';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><strong>JavaScript seems to be disabled in your browser.</strong></p>
<p>Devi abilitare JavaScript nel tuo  browser per utilizzare tutte le funzionalità di questo sito.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Clicka qui per le istruzione riguardo l\'abilitazione javascript nel tuo  browser</a>.</p>
EOT;

// sitewide is-product
const IS_PRODUCT_SHOW_PRICE = '%s';
const IS_PRODUCT_SHOW_PRICE_SPECIAL = '<del>%s</del> <span class="text-danger">Adesso %s</span>';
const IS_PRODUCT_BUTTON_BUY = '<i class="fas fa-shopping-cart"></i>';
const IS_PRODUCT_BUTTON_VIEW = '<i class="fas fa-eye"></i> View';

// sitewide product listing
const LISTING_SORT_DOWN = '<i class="fas fa-level-down-alt text-primary"></i>';
const LISTING_SORT_UP = '<i class="fas fa-level-up-alt text-primary"></i>';
const LISTING_SORT_UNSELECTED = '<i class="fas fa-level-up-alt text-black-50"></i>';
// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Edit</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>';

const ENTRY_COMMENTS = 'C\'è qualcosa che dobbiamo sapere?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Commenta qui...';
const TABLE_HEADING_OR = '-or-';
