<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('TABLE_HEADING_NEW_PRODUCTS', 'Nuovi prodotti per %s');

define('TEXT_NO_PRODUCTS', 'Non ci sono prodotti in questa categoria.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Numero di prodotti: ');
define('TEXT_SHOW', '<b>Mostra:</b>');
define('TEXT_BUY', 'Compra 1 \'');
define('TEXT_NOW', '\' Subito');
define('TEXT_ALL_CATEGORIES', 'Tutte le Categorie');
define('TEXT_ALL_MANUFACTURERS', 'Tutti i Prodotti');

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Index Page Title');
  define('META_SEO_DESCRIPTION', 'desto descrizione');
}

