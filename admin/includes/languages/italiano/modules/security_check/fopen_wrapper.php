<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('MODULE_SECURITY_CHECK_FOPEN_WRAPPER_TITLE', 'allow_url_fopen');
const MODULE_SECURITY_CHECK_FOPEN_WRAPPER_ERROR = <<<'EOT'
allow_url_fopen deve essere attivato in php.ini<br>Questa è una configurazione lato Hosting/Server che deve essere fatta attraverso il pannello di controllo del tuo hosting/server, se non hai accesso, chiedi al tuo fornitore di sistema
EOT;
