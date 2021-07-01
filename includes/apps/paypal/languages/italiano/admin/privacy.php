privacy_title = Privacy Policy

privacy_body = <h3>Credenziali API</h3>

<p>L'App PayPal per commerciante online osCommerce consente ai proprietari dei negozi di impostare e configurare automaticamente l'App con le loro credenziali API PayPal senza la necessità di inserirle manualmente. Questa operazione viene eseguita in modo sicuro concedendo l'accesso a osCommerce per recuperare le credenziali API dall'account PayPal del proprietario del negozio.</p>

<p>La concessione dell'accesso a osCommerce consente di recuperare le seguenti informazioni limitate dall'account PayPal del proprietario del negozio:</p>

<ul>
  <li>API Username</li>
  <li>API Password</li>
  <li>API Codice</li>
  <li>ID Conto</li>
</ul>

<p>Non si accede ad altre informazioni sull'account (ad esempio, nome utente o password dell'account PayPal, saldo dell'account, cronologia delle transazioni, ecc.).</p>

<p>Il nome utente API, la password API, la firma API e l'ID account vengono utilizzati per configurare automaticamente i moduli PayPal in bundle nell'app PayPal, inclusi:</p>

<ul>
  <li>PayPal Payments Standard</li>
  <li>PayPal Express Checkout</li>
  <li>PayPal Payments Pro (Direct Payment)</li>
  <li>PayPal Payments Pro (Hosted Solution)</li>
  <li>Log In con PayPal</li>
</ul>

<p>Il processo viene avviato utilizzando i pulsanti "Recupera credenziali live" e "Recupera credenziali sandbox" visualizzati nelle pagine di avvio dell'app PayPal e di gestione delle credenziali. Il proprietario del negozio viene indirizzato in modo sicuro al sito Web di PayPal, dove gli viene chiesto di concedere l'accesso a osCommerce per recuperare le credenziali API, quindi viene reindirizzato al proprio negozio online per continuare la configurazione dell'app PayPal. Questa operazione viene eseguita con i seguenti passaggi:</p>

<ol>
  <li>Il proprietario del negozio fa clic su "Recupera credenziali live" o "Recupera credenziali sandbox" e viene indirizzato in modo sicuro a una pagina di inizializzazione sul sito Web di osCommerce che registra la richiesta e reindirizza immediatamente il proprietario del negozio a una pagina di accesso sul sito Web PayPal. osCommerce registra le seguenti informazioni nella richiesta:
    <ul>
      <li>Un ID di sessione generato in modo univoco.</li>
      <li>Un ID segreto da abbinare all'ID sessione.</li>
      <li>L'URL dell'app PayPal del proprietario del negozio (per reindirizzare il proprietario del negozio).</li>
      <li>L'indirizzo IP del proprietario del negozio.</li>
    </ul>
  </li>
  <li>PayPal chiede al proprietario del negozio di accedere al proprio account PayPal esistente o di creare un nuovo account.</li>
  <li>PayPal chiede al proprietario del negozio di concedere a osCommerce l'autorizzazione a recuperare le proprie credenziali API.</li>
  <li>PayPal reindirizza il proprietario del negozio alla pagina di inizializzazione sul sito Web di osCommerce.</li>
  <li>osCommerce recupera e archivia in modo sicuro le seguenti informazioni da PayPal:
    <ul>
      <li>API Username</li>
      <li>API Password</li>
      <li>API Codice</li>
      <li>ID Conto</li>
    </ul>
  </li>
  <li>Il proprietario del negozio viene reindirizzato automaticamente alla sua app PayPal.</li>
  <li>L'app PayPal esegue una chiamata HTTPS sicura al sito Web di osCommerce per recuperare le credenziali API.</li>
  <li>Il sito Web osCommerce autentica la chiamata HTTPS sicura, invia le credenziali API e scarta localmente le credenziali API e l'URL dell'app PayPal archiviati nei passaggi 1 e 5.</li>
  <li>L'App PayPal si configura con le credenziali API.</li>
</ol>

<div class="pp-panel pp-panel-warning">
  <p>Le credenziali API recuperate dall'account PayPal del proprietario del negozio vengono utilizzate solo per configurare l'app PayPal. osCommerce memorizza temporaneamente le credenziali API come descritto nella presente informativa sulla privacy e scarta le credenziali API non appena il processo è terminato. Viene eseguito anche uno script di back-end per eliminare qualsiasi informazione memorizzata per i processi che non sono stati finalizzati.</p>
</div>

<div class="pp-panel pp-panel-info">
  <p>osCommerce ha lavorato a stretto contatto con PayPal per garantire che l'app PayPal segua rigorose politiche sulla privacy e sulla sicurezza.</p>
</div>

<h3>Moduli PayPal</h3>

<p>I moduli PayPal inviano il proprietario del negozio, il negozio online e le informazioni relative al cliente a PayPal per elaborare le transazioni API. Questi includono i seguenti moduli:</p>

<ul>
  <li>PayPal Payments Standard</li>
  <li>PayPal Express Checkout</li>
  <li>PayPal Payments Pro (Direct Payment)</li>
  <li>PayPal Payments Pro (Hosted Solution)</li>
  <li>Log In con PayPal</li>
</ul>

<p>Le seguenti informazioni sono incluse nelle chiamate API inviate a PayPal:</p>

<ul>
  <li>Informazioni sull'account PayPal del venditore / proprietario del negozio, inclusi indirizzo e-mail e credenziali API.</li>
  <li>Indirizzi di spedizione e fatturazione del cliente.</li>
  <li>Informazioni sul prodotto inclusi nome, prezzo e quantità</li>
  <li>Informazioni di spedizione e fiscali applicabili all'ordine.</li>
  <li>Il totale dell'ordine e la valuta.</li>
  <li>Memorizza gli URL per elaborare, verificare e finalizzare le transazioni PayPal, inclusi gli URL riusciti, annullati e IPN.</li>
  <li>Identificazione della soluzione di e-commerce.</li>
</ul>

<div class="pp-panel pp-panel-info">
  <p>I parametri di ogni transazione inviata e ricevuta da PayPal possono essere controllati nella pagina Log App PayPal.</p>
</div>

<h3>Aggiornamento App</h3>

<p>L'App PayPal per il commerciante online di osCommerce controlla automaticamente il sito Web di osCommerce per gli aggiornamenti disponibili per l'app. Questo controllo viene eseguito una volta ogni 24 ore e se è disponibile un aggiornamento, viene visualizzata una notifica per consentire all'app di scaricare e applicare l'aggiornamento.</p>

<p>Un controllo manuale per gli aggiornamenti disponibili viene eseguito anche nella pagina Informazioni sull'app PayPal.</p>

<h3>Librerie ospitate da Google (jQuery e interfaccia utente jQuery)</h3>

<p>Se jQuery o jQuery UI non sono già caricate nello strumento di amministrazione, le pagine di amministrazione dell'app PayPal caricano automaticamente le librerie in modo sicuro tramite le librerie ospitate da Google.</p>
