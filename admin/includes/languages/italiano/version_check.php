<?php
/*
  $Id$

  CE Phoenix, E-Commerce Made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Controllo Versione');

define('TABLE_HEADING_VERSION', 'Versione');
define('TABLE_HEADING_RELEASED', 'Data Rilascio');
define('TABLE_HEADING_ACTION', 'Azione');

define('TITLE_INSTALLED_VERSION', 'Versione Installata: <strong>CE Phoenix v%s</strong>');

const VERSION_SERVER_FAILURE = 'Non è possibile caricare le versioni disponibili dal server. Controlla la tua connessione e riprova.';
define('VERSION_RUNNING_LATEST', 'Stai utilizzando l\'ultima versione  CE Phoenix.');
const VERSION_UPGRADES_AVAILABLE = <<<'EOT'
<strong>CE Phoenix %s</strong> è disponibile per essere scaricata !<hr>
<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/viewtopic.php?f=26&t=309">Certified Developers</a>
 and detailed "<a class="alert-link" target="_blank" href="https://phoenixcart.org/forum/app.php/tag/phoenix-update">Do It Yourself</a>"
le istruzioni sono disponibili sul  Phoenix Club.
EOT;
