<?php if(!defined('IN_GS')){die('You cannot load this file directly!');} // Security Check
/**
 * Italian Language File for GetSimple Blog
 * 
 * Last modified: 06 Sett. 2014 - Version 3.3.0
 * Compiled by: Nicola Laviola <niklav@gmail.com>
 */

$i18n = array(
  'LANGUAGE_CODE'     => 'it_IT',               // ISO Language Code string
  'DATE_FORMAT'       => 'd/m/Y h:i:s a',       // Primary date format
  'DATE_DISPLAY'      => 'F jS, Y',             // Date format for front-end display
  'DATE_ARCHPRE'      => 'F Y',                 // Date format for Archive Pre-Title
'PLUGIN_TITLE' => "Blog",
'PLUGIN_DESC' => "Gestisci un blog",
'PLUGIN_SIDE' => "Blog Manager",
'WRITE_OK' => "File scritto correttamente",
'EDIT_OK' => "File modificato correttamente",
'POST_DELETED' => "Articolo cancellato",
'POST_DELETED_ERROR' => "Errore nella cancellazione articolo!",
'CATDELETED' => "Categoria cancellata",
'CATCREATED' => "Categoria Creata",
'HELP' => ">Aiuto",
'ALL_FAQ' => ">Tutti gli articoli",
'POST_SLUG'	 => "Slug/URL",
'POST_TAGS'	 => "Tags (separa i tags con una virgola)",
'POST_DATE'	 => "Data di pubblicazione (mm/dd/yyyy) e ora (hh:mm:s pm)",
'POST_PRIVATE'	 => "Articolo privato",
'POST_OPTIONS'	 => "Opzioni articolo",
'POST_CATEGORY'	 => "Assegna una Categoria",
'SAVE_POST'	 => "Salva Articolo",
'CANCEL'	 => "Cancella",
'DELETE'	 => "Elimina",
'OR'	 => "O",
'PAGE_URL'	 => "Pagina da utilizzare per gli articoli del blog",
'EXCERPT_LENGTH'	 => "Lunghezza excerpt (caratteri):",
'LANGUAGE'	 => "Lingua",
'POSTS_PER_PAGE'	 => "&num; di articoli per pagina",
'RECENT_POSTS'	 => "&num; di articoli recenti",
'EXCERPT_OPTION'	 => "Formato visualizzazione articoli nella pagina",
'EXCERPT'	 => "Excerpt",
'PRETTY_URLS'	 => "Usa pretty urls",
'PRETTY_URLS_PARA'	 => "Se impostato a si, devi editare il file .htaccess dopo aver salvato le opzioni",
'SAVE_SETTINGS'	 => "Salva impostazioni",
'BLOG_SETTINGS'	 => "Impostazioni del blog",
'FULL_TEXT'	 => "Testo completo",
'RSS_IMPORTER'	 => "Abilita l'imortazione RSS Automatica",
'RSS_IMPORTER_PASS'	 => "Password auto importazione (qualsiasi)",
'YES'	 => "Si",
'NO'	 => "No",
'NO_POSTS'	 => "Nessun articolo",
'OLDER_POSTS'	 => "Articoli precedenti",
'NEWER_POSTS'	 => "Articoli recenti",
'ALL_CATEOGIRES'	 => "Visualizza tutte le Categorie",
'SEARCH'	 => "Cerca nel Blog",
'FOUND'	 => "Sono stati trovati i seguenti articoli:",
'NOT_FOUND'	 => "Peccato, nessun articolo corrisponde alla tua ricerca.",
'CATEGORIES' => "Categorie",
'VIEW_ALL' => "Visualizza tutto",
'VIEW' => "Visualizza",
'ADD_P' => "Inserisci nuovo articolo",
'EDIT_CONTENT' => "Edita Contenuto: ",
'EDIT' => "Edita ",
'POST' => "Pubblica",
'DEL_CONTENT' => "Cancella Contenuto", 
'QUESTIONS' => "Articoli",
'TITLE' => "Titolo", 
'CHOOSECAT' => "Scegli Categoria...",
'ADD_CONTENT' => "Aggiungi contenuto",
'MANAGECAT' => "Gestisci Categorie",
'ADD_NCAT' => "Aggiungi nuova Categoria",
'ADD_CAT' => "Aggiungi Categoria", 
'CAT_TITLE' => "Titolo Categoria...", 
'DEL_CAT1' => "Cancella Categoria: ",
'DEL_CAT2' => "?? Questa azione cancella tutto il contenuto della Categoria!",
'CONTENT' => "contenuto",
'YR_CATNAME' => "Nome della tua categoria",
'HELP' => "Aiuto", 
'SETTINGS' => "Configurazioni", 
'RSS_FEEDS' => "RSS Feeds", 
'CATEGORIES' => "Categorie", 
'CREATE_POST' => "Scrivi Articolo", 
'MANAGE_POSTS' => "Articoli", 
'CATEGORY_ADDED' => "Categoria aggiunta correttamente", 
'CATEGORY_ERROR' => "La categoria non pu&ograve; essere salvata", 
'FEED_ADDED' => "Feed aggiunto con successo", 
'FEED_ERROR' => "Il Feed RSS non pu&oacute; essere salvata", 
'FEED_DELETED' => "Feed cancellato con successo", 
'FEED_DELETE_ERROR' => "Il Feed non pu&oacute; essere cancellato", 
'AUTO_IMPORTER_TITLE' => "Setup importatore Feed RSS", 
'AUTO_IMPORTER_DESC' => "Dovresti effettuare il setup dei cronjobs attraverso il tuo pannello di amministrazione interfaccia del tuo web hosting. Si presume che tu conosca questo plugin. I frammenti di codici seguenti ti danno un esempio..", 
'ADD_FEED' => "Aggiungi Feed RSS", 
'MANAGE_FEEDS' => "Aggiungi e gestisci Feed RSS", 
'ADD_NEW_FEED' => "Aggiungi nuovo Feer RSS", 
'BLOG_CATEGORY' => "Categoria Blog", 
'CATEGORY_NAME' => "Nome Categoria", 
'ADD_CATEGORY' => "Aggiungi Categoria", 
'MANAGE_CATEGORIES' => "Aggiungi e gestisci Categoria", 
'RSS_FEED' => "Feed RSS", 
'FEED_CATEGORY' => "Categoria Feed RSS", 
'DELETE_FEED' => "Cancella Feed", 
'TAGS' => "Tags", 
'DISPLAY_TAGS_UNDER_POST' => "Visualizza i tags sotto gli articoli?", 
'POST_ADDED' => "Articolo salvato con successo", 
'POST_ERROR' => "L'Articolo non può essere salvato", 
'HELP_CATEGORIES' => "Visualizza categorie del Blog - ", 
'HELP_SEARCH' => "Visualizza barra di ricerca del Blog", 
'HELP_ARCHIVES' => "Visualizza archivio del Blog", 
'HELP_RECENT' => "Visualizza gli articoli pi&ugrave; recenti", 
'HELP_RECENT_2' => "Questa funzione ha 4 parametri<strong>opzionali</strong>", 
'HELP_RECENT_3' => "Esempio di utilizzo (visualizza excerpt, lunghezza di default degli excerpt, visualizza miniatura e visualizza link continua)", 
'RSS_TITLE' => "Titolo Feed RSS", 
'RSS_DESCRIPTION' => "Descrizione Feed RSS", 
'RSS_LOCATION' => "Questo &egrave; il Feed Rss del blog", 
'POST_THUMBNAIL' => "Abilita miniature negli articoli", 
//Added version 1.0.2 
'NO_POSTS' => "Nessun articolo trovato", 
'CLICK_TO_CREATE' => "Clicca qui per crearne uno", 
'PAGE_TITLE' => "Titolo pagina", 
'DATE' => "Data", 
'FRONT_END_FUNCTIONS' => "Funzioni", 
'READ_FULL_ARTICLE' => "Leggi articolo completo", // Used for rss feed importer
'GO_BACK' => "Pagina precedente", 
//Error/Success Messages (_construct())
'DATA_BLOG_DIR' => "Directory data/blog Creata con successo", 
'DATA_FILE_ERROR' => "File non pu&oacute; essere scritto!", 
'DATA_BLOG_DIR_ERR' => "La cartella data/blog_posts non può essere creata!", 
'DATA_BLOG_DIR_ERR_HINT' => "Devi creare questa cartella tramite FTP affinchè il plugin funzioni correttamente", 
'DATA_BLOG_CATEGORIES' => "Il File data/other/blog_categories.xml &eacute; stato creato con successo", 
'DATA_BLOG_CATEGORIES_ERR' => "Il File data/other/blog_categories.xml non pu&ograve; essere creato!", 
'DATA_BLOG_RSS' => "Il File data/other/blog_rss.xml &eacute; stato creato con successo", 
'DATA_BLOG_RSS_ERR' => "Il File data/other/blog_rss.xml non pu&ograve; essere creato!",
//ADDED VERSION 1.1 
'DISPLAY_DISQUS_COMMENTS' => "Visualizza i commenti Disqus",
'DISPLAY_DISQUS_COUNT' => "Visualizza numero commenti Disqus",
'DISQUS_SHORTNAME' => "Abbreviazione Disqus",
'SOCIAL_SETTINGS' => "settaggi Social",
'RSS_FILE_SETTINGS' => "Settaggi Feed RSS del Blog",
'ENABLE_ADD_THIS' => "Abilita AddThis tool",
'ENABLE_SHARE_THIS' => "Abilita ShareThis tool",
'SHARE_THIS_ID' => "ShareThis ID",
'ADD_THIS_ID' => "AddThis ID",
'AD_TITLE' => "Settaggi pubblicit&agrave;",
'AD_DATA' => "Codice pubblicit&agrave;",
'DISPLAY_ALL_POSTS_AD_TOP' => "Abilita pubblicità al top di tutti i post",
'DISPLAY_ALL_POSTS_AD_BOTTOM' => "Abilita pubblicità al bottom di tutti i post",
'DISPLAY_POST_AD_TOP' => "Abilita pubblicità al top dei singoli post",
'DISPLAY_POST_AD_BOTTOM' => "Abilita pubblicità al bottom dei singoli post",
//ADDED VERSION 1.1.1
'POST_THUMBNAIL' => "Visualizza miniature nei post",
'POST_THUMBNAIL_LABEL' => "Carica miniatura",
'DISPLAY_DATE' => "Visualizza Data Articolo",
'PREVIOUS_PAGE_TEXT' => "\"Pagina articoli precedenti\" Testo",
'NEXT_PAGE_TEXT' => "\"Pagina seguente\" Testo",
'POST_THUMBNAIL_LABEL' => "Carica miniatura",
//ADDED VERSION 1.1.4
'CSS_SETTINGS' => 'settaggi CSS',
'DISPLAY_CSS' => 'Visualizza CSS',
'CSS_CODE' => 'codice CSS',
'HTACCESS_HEADLINE' => 'settaggi Pretty URL',
'CSS_POST_CONTAINER_HINT' => 'Riquadro per ogni articolo. Dal titolo alla fine del contenuto',
'CSS_POST_CONTENT_HINT' => 'include il contenuto dell&acute;articolo e la miniatura',
//ADDED VERSION 1.1.5
'RSS_FEED_NUM_POSTS' => '&num; di articoli nel Feed RSS',
'CSS_SETTINGS' => 'Settaggi CSS',
//ADDED VERSION 1.1.6
'RSS_FEED' => 'Feed RSS',
'DYNAMIC_RSS_LOCATION' => 'Dynamic RSS Feed Location (Genera Feed RSS al volo)',
//ADDED VERSION 1.2
'CUSTOM_FIELDS' => 'Campi personalizzati',
//CUSTOM FIELDS ADDED v2.0+
'MANAGE' => 'Gestisci',
'CHECKBOX' => "Check box", 
'CUSTOMFIELDS_DESCR' => "Questo plugin ti permette di specificare dei campi personalizzati che saranno visualizzati quando editi una pagina.", 
'CUSTOMFIELDS_TITLE' => "Campi personalizzati", 
'CUSTOMFIELDS_VIEW' => "Configura campi personalizzati", 
'DEFAULT_VALUE' => "Valore predefinito", 
'DELETE' => "Cancella campo", 
'DROPDOWN_BOX' => "Box Drop-down", 
'GET_CUSTOM_FIELD_DESCR' => "visualizza il campo corrispondente della pagina corrente", 
'LABEL' => "Etichetta", 
'LONG_TEXT_FIELD' => "Campo di testo", 
'NAME' => "Nome", 
'RETURN_CUSTOM_FIELD_DESCR' => "restituisce un campo per future richieste", 
'SAVE' => "Salava campo personalizzato", 
'SAVE_FAILURE' => "Campo personalizzato non pu&ograve; essere salvato.", 
'SAVE_INVALID' => "Il seguente campo personalizzato &egrave; riservato: ", 
'SAVE_SUCCESS' => "Il seguente campo personalizzato &egrave; stato salvato.", 
'TEXT_FIELD' => "Campo testo",
'TYPE' => "Tipo", 
'UNDO_FAILURE' => "Il campo personalizzato non pu&ograve; essere ripristinato.", 
'UNDO_SUCCESS' => "Il campo personalizzato &egrave; stato ripristinato.",
'USAGE_DESCR' => "Di seguito &egrave; possibile configurare i campi personalizzati. Trascina le righe per riordinare i campi. L&acute;eliminazione dei campi non rimuove i valori di campo dalle pagine. Il valore predefinito &egrave; il valore iniziale per le nuove pagine.", 
'WYSIWYG_EDITOR' => "WYSIWYG editor", 
'FUNCTIONS_DESCR' => "Questi campi sono accessibili nei vostri temi:", 
'ADD' => "Aggiungi nuovo campo", 
'VIEW_HIERARCHICAL' => 'Gerarchico', 
'VIEW_TITLE' => 'Per Title', 
'FILTER' => 'Filtra', 
'BROWSE_IMAGES' => "Sfoglia", 
'IMAGE' => "Immagine", 
'BROWSE_PAGES' => "Sfoglia", 
'LINK' => "Link",
'ORGANIZE' => "Organizza",
'BLOG_PAGE' => "Layout della Pagina del Blog",
'BLOG_PAGE_WARNING' => "Solo se \"Usi Layout Pagina del Blog personalizzata\" &egrave; abilitata",
'DISPLAY_BLOG_PAGE_HELP' => "Clicca qui per tips e suggerimenti per creare una pagina personalizzata",
'USE_CUSTOM_BLOG_PAGE' => 'Utilizza un layout della Pagina del Blog Paersonalizzato',
'BLOG_PAGE_ADD_THIS' => 'Strumenti addThis',
'BLOG_PAGE_POST' => 'articolo',
'BLOG_PAGE_TAG' => 'tag',
'BLOG_PAGE_PAGE' => 'pagina',
'BLOG_PAGE_ARCHIVE' => 'archivio',
'BLOG_PAGE_CATEGORY' => 'categoria',
'BLOG_PAGE_AVAILABLE_AREAS' => 'Aree Disponibili',
'BLOG_PAGE_URL_EX_LABEL' => 'es. (get url of post)',
'BLOG_PAGE_GET_URL_TO_AREAS' => 'Get URL To Blog Areas',
'BLOG_PAGE_SHARE_THIS' => 'Strumenti ShareThis',
'BLOG_PAGE_DISQUS_COMMENTS' => 'Commenti Disqus',
'BLOG_PAGE_CREATE_EXCERPT' => 'Crea Excerpt',
'BLOG_PAGE_CREATE_EXCERPT_DESC' => 'Questo crea un excerpt di una specifica lunghezza. La variabile $excerpt_length deve essere un intero e rappresenta la lunghezza dell&acute;excerpt.',
'BLOG_PAGE_DECODE_CONTENT' => 'Decodifica Contenuto',
'BLOG_PAGE_ADD_DATA_LABEL' => 'Echos aggiunge dei dati definiti sulla pagina delle impostazioni',
'BLOG_PAGE_FORMAT_DATA_DESC' => 'Passando i dati direttamente dall&acute;oggetto saranno formattati automaticamente.',
'BLOG_PAGE_FORMAT_DATE_LABEL' => 'Formato Data',
'BLOG_PAGE_AVAILABLE_FUNCTIONS' => 'Funzioni disponibili &amp; Aiuti:',
'BLOG_PAGE_DESC_LINE_3' => 'Per accedere a un campo personalizzato puoi inserire qualcosa di simile a qui sotto',
'BLOG_PAGE_DESC_LINE_2' => '
Si comporter&agrave; come se si codifica direttamente dal plugin stesso. I dati dell&acute;articolo sono passati tramite oggetto.',
'BLOG_PAGE_DESC_LINE_1' => 'Puoi usare html, php, xml e js in questo campo testo.',
'BLOG_PAGE_DESC_TITLE' => 'Aiuto personalizzazione Pagina Blog',
'CUSTOM_FIELDS_OPTIONS_AREA' => 'Area Opzioni',
'OPTIONS_AREA_DESCRP'	 => '(Opzioni dei campi personalizzati saranno visualizzati nella sezione "Opzioni Articolo")',
'CUSTOM_FIELDS_MAIN_AREA'	=> 'Area Principale',
'MAIN_AREA_DESCRP'	 => '(campi personalizzati principali saranno visualizzati nella sezione "Opzioni articolo")',
//END CUSTOM FIELDS
//Added Version 2.0
'BLOG_CREATE_EDIT_NO_TITLE' => 'Un "Titolo" &egrave; richiesto per aggiungere un articolo',
'BLOG_RETURN_TO_PREVIOUS_PAGE' => 'Ritorna all&acute;articolo',
'DISPLAY_READ_MORE_LINK' => 'Visualizza il link "Continua"',
'READ_MORE_LINK_TEXT' => 'Testo del link "Continua"',
'DISPLAY_POST_COUNT_ARCHIVES' => 'Visualizza numero articoli in archivio',
'BLOG_PAGE_RECOM' => 'Si raccomanda di visualizzare la funzione show_blog_post() presente in plugins/blog/inc/frontEndFunctions.php per vedere come meglio impostare una pagina personalizzata del blog.',
'BLOG_PRETTY_NOTICE' => 'Devi abilitare pretty urls in GetSimple prima. Le instruczioni saranno visualizzate qui',
'POST_DESCRIPTION' => 'Visualizza excerpt nella descrizione',
// Added Version 3.0
'NO_CATEGORIES' => 'Nessuna Categoria Disponibile!',
'NO_ARCHIVES' => 'Archivio vuoto!',
'ARCHIVE_PRETITLE' => 'Archivio Blog: ',
'CATEGORY_PRETITLE' => 'Categoria Blog: ',
'MANAGE_TITLE' => 'Articoli Blog',
'MANAGE_DESC' => 'Visualizza e modifica gli articoli esistenti del blog.',
'CREATE_TITLE' => 'Crea Nuovo Articolo',
'CREATE_DESC' => 'Crea un nuovo articolo da inserire nel blog. Viene utilizzato lo stesso editor delle pagine, ed utilizza le stesse funzioni.',
'CATEGORIES_TITLE' => 'Categorie del Blog',
'CATEGORIES_DESC' => 'Visualizza e Gestisci le Categorie per gli articoli del tuo blog.',
'RSSFEEDS_TITLE' => 'RSS Feeds',
'RSSFEEDS_DESC' => 'Aggiungi e Gestisci i Feed RSS Feeds da importare nel tuo blog.',
'CUSTF_TITLE' => 'Campi Personalizzati',
'CUSTF_DESC' => 'Crea e Gestisci i campi personalizzati per gli articoli del tuo blog.',
'SETTINGS_TITLE' => 'Impostazioni',
'SETTINGS_DESC' => 'Gestisci le impostazioni del tuo blog.',
'HELP_TITLE' => 'Centro Aiuto',
'HELP_DESC' => 'Il primo punto di lettura quando hai bisogno di aiuto per il tuo blog.',
// Added Version 3.1
'VERSION_NOMESSAGE' => 'nessun messaggio inviato! Questo &egrave; un problema.',
'VERSION_NORESPONSE' => 'Nessuna risposta dal serve API.',
'VERSION_NOFUNCTION' => 'La funzione "file_get_contents" non esiste nel PHP environment.',
'VERSION_UPDATEAVAILABLE' => 'Disponibile aggiornamento!',
'VERSION_UPTODATE' => 'GS Blog &egrave; aggiornato!',
'VERSION_BETA' => 'staiusando una versione Beta del plugin.',
'VERSION_FAILEDCOMPARE' => 'Comparazione versione Fallita durante il controllo!',
'VERSION_APIFAIL' => 'Il controllo con le API Estese &egrave; fallito',
'VERSION_INTERNALERROR' => 'Si &egrave; verificato un errore interno!',
'VERSION_CHECKFORUPDATE' => 'Controlla aggiornamento',
'UPDATE_TITLE' => 'Aggiornamento Plugin',
'UPDATE_DESC' => 'Controlla per gli ultimi aggiornamenti del plugin.',
'PLUGIN_LONG_TITLE' => 'GetSimple Blog',
'DOWNLOAD' => 'Scarica',
// Added Version 3.1.1
'VERSION_UPDATESTATUS' => 'Stato aggiornamento',
'VERSION_CURRENTVER' => 'Versione Corrente',
'VERSION_LATESTVER' => 'Ultima Versione',
// Added Version 3.2.0
'BY' => 'da',
'ON' => 'il',
'IN' => 'in',
'CUSTOM_FIELDS_BUTTON' => 'Custom Fields',
'NEW_POST_BUTTON' => 'Crea Articolo',
'SOCIAL_BUTTON' => 'Sociale',
'ADVERTISEMENT_BUTTON' => 'Pubblici&agrave;',
'CUSTOMIZE_BUTTON' => 'Personalizzazione',
'SETTINGS_BUTTON' => 'Impostazioni',
'DISPLAY_POST_AUTHOR' => 'Visualizza Autore dell&acute;articolo',
'DEFAULT_AUTHOR' => 'Autore principale',
'DISPLAY_POST_CATEGORY' => 'Visualizza Categoria Articolo',
'VIEW_HTACCESS' => 'Controlla che il flie .htaccess del sito &egrave;!',
'CUSTOMIZE_HEADER' => 'Personalizzazione',
'CUSTOM_PAGE_LAYOUT_HEADER' => 'Personalizza il Layout della pagina',
'CUSTOM_CSS_CLASS' => 'Personalizza le classi CSS',
'VIEW_AVAILABLE_CLASSES' => 'Clicca qui per visualizzare le classi e gli id disponibili',
'AVAILABLE_CLASSES' => 'Classi e ID disponibili',
'CSS_SEARCH_FORM_HINT' => 'ID per il form di ricerca',
'EXAMPLE_POST_HEADER' => 'Di seguito un esempio di un articolo singolo del blog',
'ADVERTISEMENT_HEADER' => 'Impostazioni Pubblicit&agrave;',
'SOCIAL_HEADER' => 'Impostazioni Social',
'RSS_SETTINGS_HEADER' => 'Impostazioni RSS Auto-Importer',
'MAIN_SETTINGS_BUTTON' => 'Impostazioni Generali',
'RSS_CONTENT_DESCRIPTION' => 'Includi Contenuto RSS o Sommario',
'RSS_CONTENT' => 'Contenuto RSS (Se Disponibile)',
'RSS_DESCRIPTION' => 'Sommario (con link-back)',
'RSS_HEADER' => 'RSS Auto-Importer',
'UPLOAD_THUMBNAIL' => 'Carica Miniatura',
'UPLOAD_ENABLE_JAVASCRIPT' => 'Gentilmente abilita il JavaScript per usare questo file uploader!',
'MANAGE_POSTS_BUTTON' => 'Gestisci Articoli',
'CATEGORIES_BUTTON' => 'Categorie',
'UPDATE_BUTTON' => 'Controlla Aggiornamento',
'HELP_BUTTON' => 'Aiuto',
'BLOG_TAB_BUTTON' => 'B<em>l</em>og',
'VERSION_STATUS' => "Versione Plugin Stato",
'VERSION_STATUS_DESC' => "Assicurarsi che si sta eseguendo l'ultima versione del GS Blog plug-in modo da poter beneficiare delle funzionalità più recenti.",
// Added Version 3.2.1
'MANAGE_POSTS_DESC' => 'Edita o crea nuovo articolo. La tabella seguente visualizza gli articoli esistenti.',
'SETTINGS_MAIN_DESC' => 'Modifica le opzioni del tuo blog. Queste sono le opzioni principali del tuo blog.',
'SETTINGS_CUSTOMIZE_DESC' => 'Usa questi settaggi per personalizzare il look e il layout de blog. Puoi creare dei layouts personalizzati o modificare il CSS per modificare l&grave;aspetto.',
'SETTINGS_ADVERTISEMENT_DESC' => 'Monetizza il blog aggiungendo qui il codice delle Pubbicit&agrave; scegliendo la posizione di comparsa dei tuoi Ads.',
'SETTINGS_SOCIAL_DESC' => 'Aggiungi uno dei seguenti tool social al blog per abilitare i commenti.',
'SETTINGS_RSS_DESC' => 'Scegli i settaggi per il RSS Auto-Importer. Auto-Importer pu&ograve; importare sia il contenuto completo dei feeds o un sommario con un link all&grave;articolo originario.',
'SETTINGS_FEED_DESC' => 'RSS Auto-Importer importa e crea articoli da feeds RSS di altri websites. Questo &egrave; utile se vuoi gestire contenuti di altri blog.',
'SETTINGS_CATEGORY_DESC' => 'Aggiungi o Edita le categorie da assegnare ai tuoi articoli.',
// Added in Version 3.3.0
  'SETTINGS_SAVE_OK' => 'Impostazioni salvate!',
  'SETTINGS_SAVE_ERROR' => 'Non posso salvare le impostazioni!',
  'AUTO_IMPORTER' => 'Importazone automatica',
  'HTACCESS_1' => "blocca l'accesso diretto ai files XML!",
  'HTACCESS_2' => 'Generalmente RewriteBase è \'/\', ma puoi sostituirla con il percorso della tua sottodirectory',
  'HTACCESS_3' => 'IMPORTANTE -> se il tuo sito è posizionato in una sottocartella devi cambiarla in modo che punti ad essa (es: /sottocartella/)',
  'ADDED' => 'Aggiunto',
  ,
  // Added in Version 3.3.1
  'HIDDEN_FIELD' => 'Campo nascosto',
);
