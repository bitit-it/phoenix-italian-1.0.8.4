<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gestione Pubblicità');

define('TABLE_HEADING_ADVERT', 'Annuncio');
define('TABLE_HEADING_GROUP', 'Gruppo');
define('TABLE_HEADING_SORT_ORDER', 'Ordina per');
define('TABLE_HEADING_STATUS', 'Stato');
define('TABLE_HEADING_ACTION', 'Azzioni');

define('TEXT_ADVERT_TITLE', 'Titolo');
define('TEXT_ADVERT_URL', 'URL');
define('TEXT_ADVERT_FRAGMENT', 'Frammento');
define('TEXT_ADVERT_GROUP', 'Gruppo');
define('TEXT_ADVERT_SORT_ORDER', 'Ordina per');
define('TEXT_ADVERT_NEW_GROUP', 'O crea un nuovo Gruppo');
define('TEXT_ADVERT_IMAGE', 'Immagine');
define('TEXT_ADVERT_IMAGE_LOCAL', 'O inserisci il nome di un file locale');
define('TEXT_ADVERT_IMAGE_TARGET', 'Salva nella cartella');
define('TEXT_ADVERT_HTML_TEXT', 'HTML Text');

define('TEXT_ADVERT_TITLE_HELP', 'Viene utilizzato solo nell\'Elenco degli annunci come promemoria per te.');
define('TEXT_ADVERT_URL_HELP', 'Includi https:// per i collegamenti esterni o solo il nome di una pagina per i collegamenti interni (eg product_info.php o advanced_search_result.php)');
define('TEXT_ADVERT_FRAGMENT_HELP', 'Utilizzato solo in combinazione con i link interni nel tuo negozio! Porzioni di  URL, per esempio: products_id=3 or keywords=xyz');
define('TEXT_ADVERT_SORT_HELP', 'Questo determina l\'ordinamento degli annunci * all\'interno * del suo gruppo.');

define('TEXT_ADVERT_NOTE', '
<strong>Note Annuncio:</strong>
<ul>
  <li>Puoi usare un immagine e/o HTML (solitamente solo testo!).</li>
  <li>La visualizzazione dell\'immagine e/o html dipende dai moduli installati.</li>
</ul>');
define('TEXT_INSERT_NOTE', '
<strong>Importanti note immagine:</strong>
<ul>
  <li>La cartella di caricamento deve essere scrivibile dall\'utente</li>
  <li>Non compilare il campo "Salva nella directory" se non stai caricando un\'immagine sul server web (cioè stai usando un\'immagine locale (lato server)).</li>
  <li>The "Il campo "Salva in directory" deve essere una directory esistente con una barra finale/slash (esempio: adverts/ or carousels/).</li>
</ul>');

define('TEXT_IMAGE_NONEXISTENT', 'Immagine MANCANTE!');

define('TEXT_ADVERT_DATE_ADDED', 'Data aggiunta: %s');
define('TEXT_ADVERT_STATUS_CHANGE', 'Cambio stato: %s');

define('TEXT_INFO_DELETE_INTRO', 'Sei sicuro di voler eliminare questo annuncio?');
define('TEXT_INFO_DELETE_IMAGE', 'Cancella Immagine');

define('SUCCESS_IMAGE_INSERTED', '<strong>Completato:</strong> Nuovo Annuncio Inserito.');
define('SUCCESS_IMAGE_UPDATED', '<strong>Completato:</strong> L\annuncio è aggiornato.');
define('SUCCESS_IMAGE_REMOVED', '<strong>Completato:</strong> Annuncio rimosso.');
define('SUCCESS_ADVERT_STATUS_UPDATED', '<strong>Completato:</strong> Stato annuncio aggiornato.');

define('ERROR_ADVERT_TITLE_REQUIRED', '<strong>Errore:</strong> TITOLO Annuncio richiesto.');
define('ERROR_ADVERT_GROUP_REQUIRED', '<strong>Errore:</strong> GRUOPO Annuncio richiesto.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', '<strong>Errore:</strong> La cartella di destinazione non esiste: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', '<strong>Errore:</strong> La cartella di destinazione non è scrivibile: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', '<strong>Errore:</strong> Immagine non presente.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', '<strong>Errore:</strong> Immagine non cancellabile.');
define('ERROR_ADVERT_IMAGE_OR_TEXT_REQUIRED', '<strong>Errore:</strong> Non hai inserito un testo ne un\'immagine. L\annuncio richiede un\'immagine \o un testo \o entrambi  per essere mostrato.');

define('TEXT_DISPLAY_NUMBER_OF_ADVERTS', 'Mostra <b>%s</b> da <b>%s</b> a <b>%s</b> Annunci');
define('IMAGE_NEW_ADVERT', 'New Advert');

define('TEXT_ADVERT_EXTERNAL_URL', '<i class="fas fa-external-link-alt mr-1"></i>link esterno:<br>%s');
define('TEXT_ADVERT_INTERNAL_URL', '<i class="fas fa-link mr-1"></i> link interno:<br>%s');

define('IMAGE_IMPORT_ADVERT', 'Tenta importazione banner');
define('IMAGE_IMPORT_ADVERT_EXPLANATION', 'Ciò importerà i dati dalla tabella del database "banner". Potrebbe essere necessario eliminare alcuni dati dopo l\'importazione poiché i "banner" non sono mai stati pensati per l\'uso a carosello ...');
define('SUCCESS_BANNERS_IMPORTED', '<strong>Success:</strong>   Tabella Banners Importata!');
