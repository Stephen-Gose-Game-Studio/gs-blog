<?php if(!defined('IN_GS')){die('You cannot load this file directly!');} // Security Check
/**************************************************************************************************\
* German (Deutsch) Language File for GetSimple Blog                                                *
* ------------------------------------------------------------------------------------------------ *
* Last Modified: 13 February 2016                                                                  *
* Compiled By: gschintgen ()                                                                       *
\**************************************************************************************************/
 
$i18n = array(
  
  # Language Configuration
  'LANGUAGE_CODE'             =>  array('de_DE','de','deu','german'), // Cross-Platform posibilities for `setlocal()`
  'DATE_FORMAT'               =>  '%c',
  'DATE_DISPLAY'              =>  '%B %e, %Y',
  'DATE_ARCHIVE'              =>  'F Y',
  
  # Plugin Information
  'PLUGIN_TITLE'              =>  ($plugin = 'GetSimple Blog'),
  'PLUGIN_DESC'               =>  'Blogge jetzt schnell und einfach mit GetSimple',
  
  # Tab/Sidebar Actions (Administration)
  'BLOG_TAB_BUTTON'           =>  'B<em>l</em>og',
  'MANAGE_POSTS_BUTTON'       =>  'Artikel verwalten',
  'CATEGORIES_BUTTON'         =>  'Kategorien',
  'AUTOIMPORTER_BUTTON'       =>  'RSS Auto-Importer',
  'SETTINGS_BUTTON'           =>  'Einstellungen',
  'UPDATE_BUTTON'             =>  'Updates suchen',
  'HELP_BUTTON'               =>  'Hilfe',
  
  # Generic Strings
  'WRITE_OK'                  =>  'Datei erfolgreich geschrieben',
  'EDIT_OK'                   =>  'Datei erfolgreich bearbeitet',
  'DATA_FILE_ERROR'           =>  'Die Datei konnte nicht geschrieben werden',
  'CANCEL'                    =>  'Zurück',
  'DELETE'                    =>  'Löschen',
  'SAVE'                      =>  'Benutzerdefinierte Felder speichern',
  'OR'                        =>  'oder',
  'YES'                       =>  'Ja',
  'NO'                        =>  'Nein',
  'ADDED'                     =>  'Hinzugefügt',
  'MANAGE'                    =>  'Verwaltung',
  'LANGUAGE'                  =>  'Sprache',
  'DATE'                      =>  'Datum',
  
  # Class Constructor
  'DATA_BLOG_DIR'             =>  'Blog-Ordner erfolgreich angelegt',
  'DATA_BLOG_DIR_ERR'         =>  'Der data/blog Ordner konnte nicht angelegt werden!',
  'DATA_BLOG_DIR_ERR_HINT'    =>  'Du musst den Ordner manuell anlegen, um das Plugin verwenden zu können',
  'DATA_BLOG_CATEGORIES'      =>  'Die Datei <em>data/other/blog_categories.xml</em> wurde erfolgreich angelegt',
  'DATA_BLOG_CATEGORIES_ERR'  =>  'Die Datei <em>data/other/blog_categories.xml</em> konnte nicht angelegt werden!',
  'DATA_BLOG_RSS'             =>  '<em>data/other/blog_rss.xml</em> erfolgreich angelegt',
  'DATA_BLOG_RSS_ERR'         =>  'Die Datei <em>blog_rss.xml</em> konnte nicht angelegt werden!',
  'BLOG_SETTINGS'             =>  'Blog-Einstellungen',
  
  # 'Post Management' Strings
  'POST_ADDED'                =>  'Artikel erfolgreich gespeichert.',
  'POST_ERROR'                =>  'Der Artikel konnte nicht gespeichert werden!',
  'POST_DELETED'              =>  'Artikel erfolgreich entfernt.',
  'POST_DELETE_ERROR'         =>  'Dieser Artikel konnte nicht entfernt werden!',
  'BLOG_CREATE_EDIT_NO_TITLE' =>  'Ein "Artikel-Titel" muss angegeben werden, um einen Artikel zu veröffentlichen.',
  'BLOG_RETURN_TO_PREV_PAGE'  =>  'zurück zum Artikel',
  'ADD_NEW_POST'              =>  'Artikel erstellen',
  'EDIT_EXISTING_POST'        =>  'Artikel bearbeiten',
  'VIEW_POST'                 =>  'Artikel anzeigen',
  'POST_OPTIONS'              =>  'Artikel-Optionen',
  'UPLOAD_THUMBNAIL'          =>  'Vorschaubild hochladen',
  'UPLOAD_ENABLE_JAVASCRIPT'  =>  'JavaScript muss aktiviert sein, um den Datei-Uploader zu benutzen.',
  'SAVE_POST'                 =>  'Artikel speichern',
  'MANAGE_POSTS'              =>  'Artikel',
  'CUSTOM_FIELDS_BUTTON'      =>  'Benutzerdefinierte Felder',
  'NEW_POST_BUTTON'           =>  'Artikel erstellen',
  'MANAGE_POSTS_DESC'         =>  'Bestehende Artikel bearbeiten oder neue erstellen. Die nachstehende Tabelle zeigt die derzeit bestehenden Artikel.',
  'NO_POSTS'                  =>  'Keine Artikel vorhanden',
  'CLICK_TO_CREATE'           =>  'Hier klicken zum Erstellen',
  'PAGE_TITLE'                =>  'Seitentitel',
  
  # 'Category Management' Strings
  'CATEGORY_ADDED'            =>  'Kategorie erfolgreich angelegt.',
  'CATEGORY_ERROR'            =>  'Die Kategorie konnte nicht gespeichert werden.',
  'MANAGE_CATEGORIES'         =>  'Kategorien verwalten',
  'ADD_CATEGORY'              =>  'Kategorie hinzufügen',
  'SETTINGS_CATEGORY_DESC'    =>  'Kategorien für Blog-Artikel hinzufügen oder bearbeiten. Dies ermöglicht es, die Artikel zu sortieren und nur die anzuzeigen, die einer bestimmten Kategorie angehören.',
  'CATEGORY_NAME'             =>  'Kategorie-Name',
  'CATEGORY_RSS_FEED'         =>  'RSS-Feed der Kategorie',
  
  # 'RSS Auto-Importer' Strings
  'FEED_ADDED'                =>  'Der RSS-Feed wurde erfolgrreich hinzugefügt.',
  'FEED_ERROR'                =>  'Leider konnte der RSS-Feed nicht gespeichert werden!',
  'FEED_DELETED'              =>  'RSS-Feed erfolgreich entfernt.',
  'FEED_DELETE_ERROR'         =>  'Der RSS-Feed konnte nicht entfernt werden.',
  'READ_FULL_ARTICLE'         =>  'Den ganzen Artikel ausgeben',
  'RSS_FEED_NO_POSTS_DESC'    =>  'Es sind keine weiteren Artikel für diesen RSS-Feed verfügbar. Bitte kontaktiere den Administrator der Website für weitere Informationen.',
  'RSS_FILE_OPEN_FAIL'        =>  'Konnte die Datei &apos;rss.rss&apos; nicht öffnen.',
  'RSS_FILE_WRITE_FAIL'       =>  'Konnte die Datei &apos;rss.rss&apos; nicht schreiben!',
  'RSS_HEADER'                =>  'RSS Auto-Importer',
  'ADD_FEED'                  =>  'RSS-Feed hinzufügen',
  'SETTINGS_FEED_DESC'        =>  'Der RSS Auto-Importer importiert RSS-Feeds anderer Webseiten und erstellt Artikel auf deren Basis. Dies ist nützlich wenn Du diesen Blog mit Inhalten von anderen Blogs betreiben möchtest.',
  'ADD_NEW_FEED'              =>  'RSS-Feed anlegen',
  'BLOG_CATEGORY'             =>  'Blog-Kategorie',
  'RSS_FEED'                  =>  'RSS-Feed',
  'FEED_CATEGORY'             =>  'RSS-Feed-Kategorie',
  'DELETE_FEED'               =>  'Feed löschen',
  'RSS_SETTINGS_HEADER'       =>  'RSS Auto-Importer Einstellungen',
  'SETTINGS_RSS_DESC'         =>  'Wähle deine Einstellungen für den RSS Auto-Importer. Der Auto-Importer kann entweder den ganzen Inhalt von Feeds importieren oder eine Textvorschau mit einem Link zum Original-Artikel.',
  'RSS_IMPORTER'              =>  'RSS Auto-Importer aktivieren',
  'RSS_CONTENT_DESCRIPTION'   =>  'Ganzer RSS-Inhalt oder Textauszug',
  'RSS_INCLUDE_CONTENT'       =>  'ganzer Inhalt',
  'RSS_INCLUDE_EXCERPT'       =>  'Auszug',
  'RSS_TITLE'                 =>  'Titel des RSS-Feeds',
  'RSS_DESCRIPTION'           =>  'Beschreibung des RSS-Feeds',
  'RSS_IMPORTER_PASS'         =>  'Auto-Importer-Passwort (beliebig)',
  'RSS_FEED_NUM_POSTS'        =>  'Anzahl Artikel im RSS-Feed',
  
  # 'Settings' Strings
  'SETTINGS_SAVE_OK'          =>  'Einstellungen erfolgreich gesichert.',
  'SETTINGS_SAVE_ERROR'       =>  'Einstellungen konnten nicht gesichert werden.',
  'BLOG_SETTINGS'             =>  'Blog-Einstellungen',
  'SETTINGS_MAIN_DESC'        =>  'Dies sind die Haupteinstellungen für deinen Blog.',
  'PAGE_URL'                  =>  'Seite auf der die Artikel angezeigt werden',
  'EXCERPT_OPTION'            =>  'Artikel-Format (auf Artikelseite)',
  'FULL_TEXT'                 =>  'Volltext',
  'EXCERPT'                   =>  'Auszug',
  'EXCERPT_LENGTH'            =>  'Länge des Artikelauszugs (Zeichen)',
  'POSTS_PER_PAGE'            =>  'Anzahl der Artikel auf einer Seite',
  'RECENT_POSTS'              =>  'Anzahl der letzten Artikel',
  'DISPLAY_POST_COUNT_ARCH'   =>  'Anzahl der Artikel im Archiv anzeigen',
  'HTACCESS_HEADLINE'         =>  'Lesbare URLs',
  'PRETTY_URLS'               =>  'Lesbare URLs verwenden',
  'VIEW_HTACCESS'             =>  'Anzeigen, wie der Inhalt der .htacess Datei sein sollte.',
  'PRETTY_URLS_PARA'          =>  'Wenn ja, aktualisiere bitte die .htaccess Datei nach dem Speichern.',
  'HTACCESS_1'                =>  'Sperrt den direkten Zugriff auf die XML-Dateien - diese beinhalten die gesamten Daten!',
  'HTACCESS_2'                =>  'Üblicherweise ist RewriteBase nur &apos;/&apos;, ersetze es durch Deinem Unterordnerpfad.',
  'HTACCESS_3'                =>  'WICHTIG -> Falls die Website in einem Unterordner angesiedelt ist, musst Du dies entsprechend anpassen (z.B. /unterordner/)',
  'BLOG_PRETTY_NOTICE'        =>  'Du musst lesbare URLs in GetSimple aktivieren, damit hier Anweisungen angezeigt werden',
  'SAVE_SETTINGS'             =>  'Einstellungen sichern',
  'MAIN_SETTINGS_BUTTON'      =>  'Haupteinstellungen',
  
  # 'Help' Strings
  'HELP'                      =>  'Hilfe',
  'FRONT_END_FUNCTIONS'       =>  'Front-End-Funktionen',
  'HELP_CATEGORIES'           =>  'Blog-Kategorien anzeigen',
  'HELP_SEARCH'               =>  'Blog-Suche anzeigen',
  'HELP_ARCHIVES'             =>  'Blog-Archiv anzeigen',
  'HELP_RECENT'               =>  'Die neuesten Blog-Artikel anzeigen',
  'HELP_RECENT_2'             =>  'Die Funktion hat 4 <strong>optionale</strong> Parameter',
  'HELP_RECENT_3'             =>  'Verwendungsbeispiel (Auszug anzeigen, Auszugslänge, Vorschaubild anzeigen und "weiterlesen"-Link ausgeben)',
  'RSS_LOCATION'              =>  'RSS-Feed deines Blogs',
  'DYNAMIC_RSS_LOCATION'      =>  'Dynamische RSS-Feed-Datei (erzeugt automatisch einen aktuellen RSS-Feed)',
  'AUTO_IMPORTER_TITLE'       =>  'RSS-Feed Cronjob-Einstellungen',
  'AUTO_IMPORTER_DESC'        =>  'Der Cronjob sollte über die Webserver-Verwaltung angelegt werden. (Dieses Plugin nimmt an, dass Du weißt wie.) Der untenstehende Code dient als Cronjob-Beispiel:',
  'BLOG_PAGE_DESC_TITLE'      =>  'Hilfe für personalisierte Blog-Seite',
  'BLOG_PAGE_RECOM'           =>  'Es wird empfohlen, die Funktion <code>show_blog_post()</code> in plugins/blog/inc/frontEndFunctions.php anzuschauen, um zu sehen, wie eine personalisierte Blog-Seite am Besten angelegt wird.',
  'BLOG_PAGE_DESC_LINE_1'     =>  'Du kannst html, php, xml und js in diesem Textfeld benutzen.',
  'BLOG_PAGE_DESC_LINE_2'     =>  'Es ist als ob der Code direkt ins Plugin eingefügt würde. Die Artikel-Daten werden als Objekt übergeben.',
  'BLOG_PAGE_DESC_LINE_3'     =>  'Um also auf ein benutzerdefiniertes Feld zuzugreifen, kannst Du wie folgt vorgehen:',
  'BLOG_PAGE_AVAILABLE_FUNC'  =>  'Verfügbare Funktionen:',
  'BLOG_PAGE_FRMT_DATE_LABEL' =>  'Datumsformat',
  'BLOG_PAGE_FRMT_DATA_DESC'  =>  'Du übergibst die Daten direkt aus dem Objekt und die Funktion formatiert das Datum.',
  'BLOG_PAGE_GET_URL_TO_AREAS'=>  'URL des Blog-Bereichs',
  'BLOG_PAGE_URL_EX_LABEL'    =>  'Bsp. (URL des Artikels)',
  'BLOG_PAGE_AVAILABLE_AREAS' =>  'Verfügbare Bereiche',
  'BLOG_PAGE_POST'            =>  'Artikel',
  'BLOG_PAGE_TAG'             =>  'Tag',
  'BLOG_PAGE_PAGE'            =>  'Seite',
  'BLOG_PAGE_ARCHIVE'         =>  'Archiv',
  'BLOG_PAGE_CATEGORY'        =>  'Kategorie',
  'BLOG_PAGE_CREATE_EXCERPT'  =>  'Auszug erstellen',
  'BLOG_PAGE_EXCERPT_DESC'    =>  'Dies legt einen Auszug der festgelegten Länge an. Die Variable <i>$excerpt_length</i> muss ganzzahlig sein und legt die Länge des Textauszugs fest.',
  'BLOG_PAGE_DECODE_CONTENT'  =>  'Inhalt dekodieren',
  
  # 'Front-End' Strings
  'BY'                        =>  'von',
  'ON'                        =>  'am',
  'IN'                        =>  'in',
  'TAGS'                      =>  'Tags',
  'NO_CATEGORIES'             =>  'Keine Kategorien verfügbar!',
  'NO_POSTS'                  =>  'Keine Artikel verfügbar!',
  'NO_ARCHIVES'               =>  'Das Archiv ist leer!',
  'SEARCH'                    =>  'Suche',
  'FOUND'                     =>  'Die folgenden Artikel wurden gefunden:',
  'NOT_FOUND'                 =>  'Leider wurden keine Artikel gefunden.',
  'NEXT_PAGE'                 =>  '&larr; nächste Seite',
  'PREV_PAGE'                 =>  'vorherige Seite &rarr;',
  'ARCHIVE_PRETITLE'          =>  'Blog-Archiv: ',
  'CATEGORY_PRETITLE'         =>  'Blog-Kategorie: ',
  'READ_MORE'                 =>  'Weiterlesen', // <-- New in 3.4.2
  
  # Custom Fields Manager
  'CUSTOM_FIELDS'             =>  'Benutzerdefinierte Felder verwalten',
  'CUSTOMFIELDS_DESCR'        =>  'Diese Erweiterung ermöglicht es, benutzerdefinierte Felder beim Bearbeiten einer Seite anzuzeigen.',
  'CUSTOM_FIELDS_OPTIONS_AREA'=>  'Optionsbereich',
  'OPTIONS_AREA_DESCRP'       =>  '(Optionsbereich: benutzerdefinierte Felder werden <em>in</em> den "Artikel-Optionen" angezeigt.)',
  'NAME'                      =>  'Name',
  'LABEL'                     =>  'Label',
  'TYPE'                      =>  'Typ',
  'DEFAULT_VALUE'             =>  'Standardwert',
  'ADD'                       =>  'Neues Feld hinzufügen',
  'CUSTOM_FIELDS_MAIN_AREA'   =>  'Hauptbereich',
  'MAIN_AREA_DESCRP'          =>  '(Hauptbereich: benutzerdefinierte Felder werden <em>unterhalb</em> der "Artikel-Optionen" angezeigt.)',
  'TEXT_FIELD'                =>  'Textfeld',
  'LONG_TEXT_FIELD'           =>  'Großes Textfeld',
  'DROPDOWN_BOX'              =>  'Dropdown-Box',
  'CHECKBOX'                  =>  'Checkbox',
  'WYSIWYG_EDITOR'            =>  'WYSIWYG-Editor',
  'TITLE'                     =>  'Titel',
  'HIDDEN_FIELD'              =>  'Verstecktes Feld',
  
  # VersionCheck Updater
  'VERSION_NOMESSAGE'         =>  'Keine Fehlermeldung gesetzt! Dies ist ein Problem.',
  'VERSION_NORESPONSE'        =>  'Keine Antwort vom "Extend API"-Server erhalten.',
  'VERSION_NOFUNCTION'        =>  'Deine PHP-Umgebung ist nicht richtig konfiguriert!',
  'VERSION_UPDATEAVAILABLE'   =>  'Eine Aktualisierung ist verfügbar!',
  'VERSION_UPTODATE'          =>  $plugin.' ist aktuell!',
  'VERSION_BETA'              =>  'Du benutzt gerade eine Beta-Version von '.$plugin.'.',
  'VERSION_FAILEDCOMPARE'     =>  'Versionsvergleich bei Aktualisierungsüberprüfung fehlgeschlagen.',
  'VERSION_APIFAIL'           =>  'Die Überprüfung über die Extend API ist fehlgeschlagen.',
  'VERSION_INTERNALERROR'     =>  'Ein interner Fehler mit VersionCheck ist aufgetreten.',
  'VERSION_STATUS'            =>  'Plugin-Aktualisierungen',
  'VERSION_STATUS_DESC'       =>  'Stelle sicher, dass du die neueste Version von '.$plugin.' benutzt und somit von den neuesten Fehlerbereinigungen und Features profitieren kannst.',
  'VERSION_UPDATESTATUS'      =>  'Aktualisierungsstatus',
  'VERSION_CURRENTVER'        =>  'Aktuelle Version',
  'VERSION_LATESTVER'         =>  'Neueste Version',
  
);
