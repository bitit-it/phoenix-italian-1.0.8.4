<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
   edit 01/11/2020
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
setlocale(LC_TIME, ['it_IT.UTF-8', 'it_IT.UTF8','ita_ITA'});

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG= '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const PHP_DATE_TIME_FORMAT = 'd/m/Y H:i:s'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';
const JQUERY_DATEPICKER_I18N_CODE = 'it_IT'; // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
const JQUERY_DATEPICKER_FORMAT = 'mm/dd/yy'; // see http://docs.jquery.com/UI/Datepicker/formatDate

// Global entries for the <html> tag
const HTML_PARAMS = 'dir="ltr" lang="it"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = 'osCommerce Online Merchant Administration Tool';

// header text in includes/header.php
const HEADER_TITLE_ONLINE_CATALOG = '<i class="fas fa-shopping-cart text-primary"></i> <span class="border-bottom border-primary">Catalogo On-line</span>';
const HEADER_TITLE_PHOENIX_CLUB = '<span class="border-bottom border-primary">Phoenix Club</span>';
const HEADER_TITLE_CERTIFIED_ADDONS = '<span class="border-bottom border-primary">Moduli e servizi certificati</span>';
const HEADER_TITLE_LOGOFF = '<i class="fas fa-lock"></i> <span class="border-bottom border-danger"> %s, Esci in sicurezza</span>';

// javascript messages
const JS_STATE_SELECT = '-- Seleziona Sopra --';

 // images
const IMAGE_ANI_SEND_EMAIL = 'Invio  E-Mail';
const IMAGE_BACK = 'Indietro';
const IMAGE_BACKUP = 'Backup';
const IMAGE_CANCEL = 'Cancella';
const IMAGE_CONFIRM = 'Conferma';
const IMAGE_COPY = 'Copia';
const IMAGE_COPY_TO = 'Copia in';
const IMAGE_DETAILS = 'Dettagli';
const IMAGE_DELETE = 'Cancella';
const IMAGE_EDIT = 'Modifica';
const IMAGE_EMAIL = 'Email';
const IMAGE_EXPORT = 'Esporta';
const IMAGE_ICON_STATUS_GREEN = 'Attivo';
const IMAGE_ICON_STATUS_GREEN_LIGHT = 'Attiva';
const IMAGE_ICON_STATUS_RED = 'Inattivo';
const IMAGE_ICON_STATUS_RED_LIGHT = 'Disattiva';
const IMAGE_ICON_INFO = 'Info';
const IMAGE_INSERT = 'Inserisci';
const IMAGE_LOCK = 'Blocca';
const IMAGE_MODULE_INSTALL = 'Installa Modulo';
const IMAGE_MODULE_REMOVE = 'Rimuovi Modulo';
const IMAGE_MOVE = 'Sposta';
const IMAGE_NEW_CATEGORY = 'Nuova Categoria';
const IMAGE_NEW_COUNTRY = 'Nuovo Paese';
const IMAGE_NEW_CURRENCY = 'Nuova Valuta';
const IMAGE_NEW_CUSTOMER_DATA_GROUP = 'Nuovo gruppo di dati dei clienti';
const IMAGE_NEW_FILE = 'Nuovo documento';
const IMAGE_NEW_FOLDER = 'Nuova Cartella';
const IMAGE_NEW_LANGUAGE = 'Nuova Lingua';
const IMAGE_NEW_NEWSLETTER = 'Nuova Newsletter';
const IMAGE_NEW_PRODUCT = 'Nuovo Prodotto';
const IMAGE_NEW_TAX_CLASS = 'Nuova Classe di tasse';
const IMAGE_NEW_TAX_RATE = 'Nuova Valore Tassa';
const IMAGE_NEW_TAX_ZONE = 'Nuova Zona Tasse';
const IMAGE_NEW_ZONE = 'Nuova Zona';
const IMAGE_ORDERS = 'Ordini';
const IMAGE_ORDERS_INVOICE = 'Fatture';
const IMAGE_ORDERS_PACKINGSLIP = 'Distinta di imballaggio';
const IMAGE_PREVIEW = 'Anteprima';
const IMAGE_RESTORE = 'Riprisitna';
const IMAGE_RESET = 'Resetta';
const IMAGE_SAVE = 'Salva';
const IMAGE_SEARCH = 'Carca';
const IMAGE_SELECT = 'Seleziona';
const IMAGE_SEND = 'Invia';
const IMAGE_SEND_EMAIL = 'Ivia Email';
const IMAGE_UNLOCK = 'Sblocca';
const IMAGE_UPDATE = 'Carica';
const IMAGE_UPDATE_CURRENCIES = 'Aggiorna Cambio Valuta';
const IMAGE_UPLOAD = 'Carica';

const ICON_CROSS = 'Falso';
const ICON_CURRENT_FOLDER = 'Cartella Corrente';
const ICON_DELETE = 'Cancella';
const ICON_ERROR = 'Errore';
const ICON_FILE = 'Documento';
const ICON_FILE_DOWNLOAD = 'Scarica';
const ICON_FOLDER = 'Cartella';
const ICON_LOCKED = 'Bloccato';
const ICON_PREVIOUS_LEVEL = 'Livello Precedente';
const ICON_PREVIEW = 'Anteprima';
const ICON_STATISTICS = 'Statistiche';
const ICON_SUCCESS = 'Compleato';
const ICON_TICK = 'Vero';
const ICON_UNLOCKED = 'Sbloccato';
const ICON_WARNING = 'Attenzione';

// constants for use in tep_prev_next_display function
const TEXT_RESULT_PAGE =  'Pagina %s di %d';
const TEXT_DISPLAY_NUMBER_OF_COUNTRIES =  'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> nazioni)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMER_DATA_GROUPS = 'Visualizza <strong>%d</strong> per <strong>%d</strong> (of <strong>%d</strong> gruppi di dati dei clienti)';
const TEXT_DISPLAY_NUMBER_OF_CUSTOMERS =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> clienti)';
const TEXT_DISPLAY_NUMBER_OF_CURRENCIES =  'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> valute)';
const TEXT_DISPLAY_NUMBER_OF_ENTRIES =  'Visualizzati <strong>%d</strong> di <strong>%d</strong> (of <strong>%d</strong> entries)';
const TEXT_DISPLAY_NUMBER_OF_LANGUAGES =  'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> lingue)';
const TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> produttori)';
const TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS =  'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> newsletters)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> ordini)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> stato ordini)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> prodotti)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> prodotti in attesa)';
const TEXT_DISPLAY_NUMBER_OF_REVIEWS =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> recensioni prodotto)';
const TEXT_DISPLAY_NUMBER_OF_SPECIALS =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> prodotti in offerta)';
const TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> tipi di tassa)';
const TEXT_DISPLAY_NUMBER_OF_TAX_ZONES =  'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> tasse stat./prov)';
const TEXT_DISPLAY_NUMBER_OF_TAX_RATES =  'Visualizzate <b>%d</b> su <b>%d</b> (di <b>%d</b> aliquote fiscali)';
const TEXT_DISPLAY_NUMBER_OF_ZONES =  'Visualizzati <b>%d</b> su <b>%d</b> (di <b>%d</b> stati/Province)';

const SPLIT_PAGES = 'Selezione Pagina';

const TEXT_DEFAULT =  'Predefinito';
const TEXT_SET_DEFAULT =  'Setta come Predefinito';

const TEXT_NONE =  '--none--';
const TEXT_TOP =  'Top';
const TEXT_ALL = 'Tutti';

const ERROR_DESTINATION_DOES_NOT_EXIST =  'Errore: Destinazione non esistente.';
const ERROR_DESTINATION_NOT_WRITEABLE =  'Errore: Destinazione non scrivibile.';
const ERROR_FILE_NOT_SAVED =  'Errore: File caricato non salvato.';
const ERROR_FILETYPE_NOT_ALLOWED =  'Errore: Tipo di file caricamento non consentito.';
const SUCCESS_FILE_SAVED_SUCCESSFULLY =  'Successo: File caricato salvato con successo.';
const WARNING_NO_FILE_UPLOADED =  'Attenzione: Nessuno file caricato.';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION =  '<p>I contenuti in orizzontale possono essere 12 o meno per riga.</p><p>12/12 = 100% width, 6/12 = 50% width, 4/12 = 33% width.</p><p>Il totale delle colonne in ogni riga deve essere uguale a  12 (esempi:  3 sezioni di 4 colonne ciascuno, 1 elemento di 12 colonne e così via).</p>';

// seo helper
const PLACEHOLDER_COMMA_SEPARATION =  'Devono, essere, separati, da, una, virgola';

// message for required inputs
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

const TEXT_IMAGE_NON_EXISTENT = 'IMAGE DOES NOT EXIST';
