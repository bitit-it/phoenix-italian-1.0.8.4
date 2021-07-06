<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE =  'Categorie / Prodotti';
const HEADING_TITLE_SEARCH =  'Cerca:';
const HEADING_TITLE_GOTO =  'Vai a:';

const SECTION_HEADING_GENERAL = '<i class="fas fa-language fa-fw mr-1"></i>Specifiche Linguaggio';
const SECTION_HEADING_DATA = '<i class="fas fa-box-open fa-fw mr-1"></i>Specifiche Prodotto';
const SECTION_HEADING_IMAGES = '<i class="fas fa-images fa-fw mr-1"></i>Immagini Prodotto';

const TABLE_HEADING_ID =  'ID';
const TABLE_HEADING_CATEGORIES_PRODUCTS =  'Categorie / Prodotti';
const TABLE_HEADING_ACTION =  'Azione';
const TABLE_HEADING_STATUS =  'Stato';

const TEXT_NEW_PRODUCT =  'Nuovo prodotto in &quot;%s&quot;';
const TEXT_EXISTING_PRODUCT = 'Modifica Prodotto <small>in %s</small>';

const TEXT_CATEGORIES =  'Categorie:';
const TEXT_PRODUCTS =  'Prodotti:';
const TEXT_PRODUCTS_PRICE_INFO =  'Prezzo:';
const TEXT_PRODUCTS_TAX_CLASS =  'Tipo di tassa:';
const TEXT_PRODUCTS_AVERAGE_RATING =  'Valore medio:';
const TEXT_PRODUCTS_QUANTITY_INFO =  'Quantità;:';
const TEXT_DATE_ADDED =  'Data inserimento:';
const TEXT_DATE_AVAILABLE =  'Data disponibilità;:';

const TEXT_LAST_MODIFIED =  'Ultima modifica:';
const TEXT_IMAGE_NONEXISTENT =  'L\'IMMAGINE NON ESISTE';
const TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS =  'Inserire una nuova categoria o un nuovo prodotto in questo livello';
const TEXT_PRODUCT_DATE_ADDED =  'Questo prodotto &egrave; stato aggiunto al catalogo il ';
const TEXT_PRODUCT_DATE_AVAILABLE =  'Questo prodotto sarà; disponibile il%s.';

const TEXT_EDIT_INTRO =  'Eseguire i cambiamenti necessari';
const TEXT_EDIT_CATEGORIES_NAME =  'Nome categoria:';
const TEXT_EDIT_CATEGORIES_IMAGE =  'Immagine per la categoria:';
const TEXT_EDIT_SORT_ORDER =  'Categoria num.:';

const TEXT_INFO_COPY_TO_INTRO =  'Scegliere la nuova categoria in cui copiare questo prodotto';
const TEXT_INFO_CURRENT_CATEGORIES =  'Categorie correnti:';

const TEXT_INFO_HEADING_NEW_CATEGORY =  'Nuova Categoria';
const TEXT_INFO_HEADING_EDIT_CATEGORY =  'Modifica Categoria';
const TEXT_INFO_HEADING_DELETE_CATEGORY =  'Cancella Categoria';
const TEXT_INFO_HEADING_MOVE_CATEGORY =  'Sposta Categoria';
const TEXT_INFO_HEADING_DELETE_PRODUCT =  'Cancella Prodotto';
const TEXT_INFO_HEADING_MOVE_PRODUCT =  'Sposta Prodotto';
const TEXT_INFO_HEADING_COPY_TO =  'Copia in';

const TEXT_DELETE_CATEGORY_INTRO =  'Sicuro di voler eliminare questa categoria?';
const TEXT_DELETE_PRODUCT_INTRO =  'Sicuro di voler eliminare permanentemente questo prodotto?';

const TEXT_DELETE_WARNING_CHILDS =  '<b>ATTENZIONE:</b> Ci sono %s (sotto-)categorie collegate a questa categoria!';

const TEXT_MOVE_PRODUCTS_INTRO =  'Seleziona la categoria in cui vuoi spostare il file <b>%s</b>';
const TEXT_MOVE_CATEGORIES_INTRO =  'Seleziona la categoria in cui vuoi spostare il file <b>%s</b>';
const TEXT_MOVE =  'Spostare <b>%s</b> in:';

const TEXT_NEW_CATEGORY_INTRO =  'Inserire le seguenti informazioni per la nuova categoria';
const TEXT_CATEGORIES_NAME =  'Nome categoria:';
const TEXT_CATEGORIES_IMAGE =  'Immagine per la categoria:';
const TEXT_SORT_ORDER =  'Categoria num.:';

const TEXT_PRODUCTS_STATUS =  'Stato prodotto:';
const TEXT_PRODUCTS_DATE_AVAILABLE =  'Data disponibilità;:';
const TEXT_PRODUCTS_DATE_AVAILABLE_HELP = 'DD-MM-YYYY';
const TEXT_PRODUCT_AVAILABLE =  'Disponibile';
const TEXT_PRODUCT_NOT_AVAILABLE =  'Esaurito';
const TEXT_PRODUCTS_MANUFACTURER =  'Produttore:';
const TEXT_PRODUCTS_NAME =  'Nome prodotto:';
const TEXT_PRODUCTS_DESCRIPTION =  'Descrizione prodotto:';
const TEXT_PRODUCTS_QUANTITY =  'Quantità; prodotto:';
const TEXT_PRODUCTS_MODEL =  'Modello prodotto:';
const TEXT_PRODUCTS_IMAGE =  'Immagine prodotto:';
const TEXT_PRODUCTS_MAIN_IMAGE =  'Principale';
const TEXT_PRODUCTS_LARGE_IMAGE =  'Immagine grande';
const TEXT_PRODUCTS_LARGE_IMAGE_HTML_CONTENT =  'Il contenuto HTML (per popup)';
const TEXT_PRODUCTS_ADD_LARGE_IMAGE =  'Aggiungi immagine grande';
const TEXT_PRODUCTS_URL =  'URL prodotto:';
const TEXT_PRODUCTS_URL_WITHOUT_HTTP =  '<small>(senza http://)</small>';
const TEXT_PRODUCTS_PRICE_NET =  'Prezzo prodotto (Netto):';
const TEXT_PRODUCTS_PRICE_GROSS =  'Products Price (Lordo):';
const TEXT_PRODUCTS_WEIGHT =  'Peso con confezione:';

const EMPTY_CATEGORY =  'Categoria vuota';

const TEXT_HOW_TO_COPY =  'Metodo di Copia:';
const TEXT_COPY_AS_LINK =  'Copia come Link';
const TEXT_COPY_AS_DUPLICATE =  'Copia come duplicato';

const ERROR_CANNOT_LINK_TO_SAME_CATEGORY =  'Errore: Non puoi linkare i prodotti nella stessa Categoria.';
const ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE =  'Errore: La Directory del Catalogo delle Immagini non &egrave; scrivibile:  %s';
const ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST =  'Errore: La Directory del Catalogo delle Immagini non esiste:  %s';
const ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT =  'Errore: Questa categoria non pu&ograve; essere mossa in usa sotto-categoria.';

const TEXT_CATEGORIES_DESCRIPTION =  'Descrizione Categoria:<br><small>Mostrata nelle pagine Categoria</small>';
const TEXT_EDIT_CATEGORIES_DESCRIPTION =  'Modifica la descrizione della categoria:';

const TEXT_CATEGORIES_SEO_DESCRIPTION =  'SEO Meta Description Categorie  :<br><small>Add a &lt;description&gt; Meta Element.</small>';
const TEXT_EDIT_CATEGORIES_SEO_DESCRIPTION =  'Edit the Category Meta Description for SEO:<br><small>Changes the &lt;description&gt; Meta Element.</small>';

const TEXT_PRODUCTS_GTIN = 'Prodotti <abbr title="GTIN must be stored as 14 Digits. Any GTIN smaller than this will be zero-padded per GTIN Specifications.">GTIN</abbr>:<br><small>1 of UPC, EAN, ISBN etc</small>';
const TEXT_PRODUCTS_GTIN_HELP = 'Il GTIN deve essere memorizzato come 14 cifre. Qualsiasi GTIN inferiore a questo verrà riempito con zero secondo le specifiche GTIN';

const TEXT_PRODUCTS_SEO_DESCRIPTION = 'Product Meta Description for SEO:<br><small>Add a &lt;description&gt; Meta Element.<br>HTML is not allowed.</small>';
const TEXT_PRODUCTS_SEO_DESCRIPTION_HELP = 'Add a &lt;descrizione&gt; per elementi Meta .  HTML non permesso.';
const TEXT_PRODUCTS_SEO_KEYWORDS = 'Meta Keywords prodotti per SEO:<br><small>Add a &lt;keyword&gt; Meta Element or Search Engine.<br>Must be comma separated. HTML is not allowed.</small>';
const TEXT_PRODUCTS_SEO_KEYWORDS_HELP = 'Aggiungi le frasi di ricerca separate da virgola. HTML non permesso.';
const TEXT_PRODUCTS_SEO_TITLE = 'Titolo prodotto per il SEO:<br><small>Sostituisci il nome del prodotto nell\'elemento Meta &lt;title&gt;  <br>alternativamente inserisci anche le categorie.<br>Lascia vuoto per mettere il nome del prodotto di base.</small>';
const TEXT_PRODUCTS_SEO_TITLE_HELP = 'Sostituisci il nome del prodotto nel &lt;title&gt; Meta Elemento e opzionalmente il Breadcrumb Trail.<br>Lascia in bianco per il mettere il nome del prodotto.';
const TEXT_CATEGORIES_SEO_TITLE = 'Titolo Categoria per il  SEO:<br><small>Sostituisci il titolo della Categoria nell\'elemento Meta &lt;title&gt; .<br>lascia vuoti per lasciare il nome della categoria di base</small>';
const TEXT_EDIT_CATEGORIES_SEO_TITLE = 'Modifica il titolo della Categoria per il SEO:<br><small>Sostituisci il titolo della Categoria nell\'elemento Meta &lt;title&gt; <br>alternativamente inserisci anche albero delle categorie..<br>lascia vuoti per lasciare il nome della categoria di base.</small>';

const TEXT_PRODUCTS_OTHER_IMAGES = 'Galleria Immagini';
 
