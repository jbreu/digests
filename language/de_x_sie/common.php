<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2017 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

global $phpbb_container;

$config = $phpbb_container->get('config');

$lang = array_merge($lang, array(
	'PLURAL_RULE'						=> 1,

	'DIGESTS_ALL_FORUMS'				=> 'Alle',
	'DIGESTS_AM'						=> ' AM', // not used if date/time formats do not permit AM and PM
	'DIGESTS_AUTHOR'					=> 'Autor',
	'DIGESTS_BAD_SEND_HOUR'				=> 'Benutzer %1$s Sendezeit ist ungültig. Sie ist %2$d. Der Wert sollte >= 0 und < 24 sein.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Bilder blockieren',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'In allen Rückblicken werden keine Bilder angezeigt, inklusive Smileys und Anhänge in Beiträgen oder privaten Nachrichten. Dies ist bei langsamen Verbindungen oder zur Minimierung des Datenverbrauchs sowie bei Foren mit sehr vielen Bildern hilfreich. Rückblicke in Textform enthalten nie Bilder.',
	'DIGESTS_BOARD_LIMIT'				=> '%d (Forenlimit)',
	'DIGESTS_BY'						=> 'Von',
	'DIGESTS_CLOSED_QUOTE'				=> '&rdquo;',
	'DIGESTS_CLOSED_QUOTE_TEXT'			=> '"',
	'DIGESTS_COUNT_LIMIT'				=> 'Maximale Anzahl der Beiträge im Rückblick',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Geben Sie eine Zahl größer als Null ein, falls Sie die Anzahl der Beiträge im Rückblick limitieren möchten.',
	'DIGESTS_DAILY'						=> 'Täglich',
	'DIGESTS_DATE'						=> 'Datum',
	'DIGESTS_DELIMITER'					=> ' :: ', // Used to help show the hierarchy of forum names from the index on down
	'DIGESTS_DISABLED_MESSAGE'			=> 'Um Felder zu aktivieren, wählen Sie Grundeinstellungen und einen Rückblickstyp',
	'DIGESTS_DISCLAIMER'				=> 'Dieser Rückblick wird den registrierten Mitgliedern des <a href="%1$s">%2$s</a> gesendet. Sie können Ihre Abonnements im <a href="%1$sucp.%3$s">User Control Panel</a> verwalten. Wenn Sie Fragen oder Anmerkungen zu Ihren Rückblicken haben, wenden Sie sich bitte an den <a href="mailto:%4$s?subject=Rückblick">%2$s Webmaster</a>.',
	'DIGESTS_EXPLANATION'				=> 'Rückblicke sind Email-Zusammenfassungen von Beiträgen, welche Ihnen regelmäßig zugesendet werden. Rückblicke werden täglich, wöchentlich oder monatlich zu einem bestimmten Tag und Zeitpunkt gesendet. Sie können Rückblicke für alle Forenbereiche, auf welche Sie lesenden Zugriff haben, abonnieren. Sie können Ihr Abonnement jederzeit beenden, indem Sie diese Seite besuchen. Die meisten Benutzer halten Rückblicke für sehr sinnvoll. Wir empfehlen Ihnen, Sie auszuprobieren!',
	'DIGESTS_FILTER_ERROR'				=> 'Der Rückblick-Mailer wurde mit ungültigem user_digest_filter_type = %s aufgerufen',
	'DIGESTS_FILTER_FOES'				=> 'Entferne Beiträge meiner Gegner',
	'DIGESTS_FILTER_TYPE'				=> 'Beitragstypen im Rückblick',
	'DIGESTS_FORMAT_HTML'				=> 'HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'HTML bietet Formatierung, BBCode und Signaturen (soweit erlaubt).',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'HTML, Beiträge in Tabellenform',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Ähnlich zu HTML, nur dass Beiträge in Tabellenform dargestellt werden',
	'DIGESTS_FORMAT_PLAIN'				=> 'Einfaches HTML',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Einfaches HTML verwendet keine Foren-Designs oder -Farben',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Einfaches HTML, Beiträge in Tabellenform',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Ähnlich zu einfachem HTML, nur dass Beiträge in Tabellenform dargestellt werden',
	'DIGESTS_FORMAT_STYLING'			=> 'Rückblick-Darstellung',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Bitte beachten Sie, dass die konkrete Darstellung von den Fähigkeiten Ihres Email-Programmes abhängig ist. Bewegen Sie Ihren Mauszeiger über den Design-Typ um mehr über jedes Design zu erfahren.',
	'DIGESTS_FORMAT_TEXT'				=> 'Text',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'Keine Verwendung von HTML im Rückblick. Reine Textdarstellung.',
	'DIGESTS_FORUMS_WANTED'				=> 'Gewünschte Foren',
	'DIGESTS_FREQUENCY'					=> 'Gewünschter Rückblicks-Typ',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Wöchentliche Rückblicke werden %s versandt. Monatliche Rückblicke werden am ersten Tag des Monats versandt. Der Wochentag wird anhand der Coordinated Universal Time (UTC) bestimmt.',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Rückblicks-Typ',
	'DIGESTS_HOURS_ABBREVIATION' 		=> ' Uhr',	// see: http://www.scienceeditingexperts.com/which-is-the-correct-abbreviation-for-hours-2h-2-h-2hs-2-hs-2hrs-or-2-hrs, DIGESTS_AM and DIGESTS_PM are used instead if specified in user_dateformat
	'DIGESTS_INTRODUCTION' 				=> 'Hier ist der letzte Rückblick des %s-Forums. Antworten Sie <em>nicht</em> auf diese Email, um Beiträgen oder persönlichen Nachrichten zu antworten. Bitte melden Sie sich im Forum an, um an Diskussionen teilzunehmen! (Falls das Format des Rückblicks unzureichend ist, stellen Sie sicher dass alle Email-Inhalte geladen werden.)',
	'DIGESTS_JUMP_TO_MSG'				=> 'Nachrichten-ID',
	'DIGESTS_JUMP_TO_POST'				=> 'Beitrags-ID',
	'DIGESTS_LASTVISIT_RESET'			=> 'Zurücksetzung meines letzten Besuchsdatums, wenn mir ein Rückblick gesendet wurde',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'Falls aktiviert, sollen Beiträge als gelesen markiert werden, wenn Sie vor dem Versand eines Rückblicks erstellt wurden. Die Auswahl dieser Option teilt dem Forum mit, dass das Lesen des Rückblicks das Lesen von Beiträgen im Forum ersetzt.',
	'DIGESTS_LINK'						=> 'Link',
	'DIGESTS_MARK_READ'					=> 'Als gelesen markieren, wenn sie im Rückblick auftauchen',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Maximale dargestellte Anzahl von Wörtern eines Beitrags',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Um eine konsistente Darstellung sicherzustellen, wird bei gekürzten Beiträgen HTML entfernt. Ist dieses Feld leer or wird auf 0 gesetzt, werden die vollständigen Beiträge dargestellt. Wenn die &ldquo;Zeige keinenBeitragstext&rdquo;-Option aktiviert ist, wird dieses Feld ignoriert und kein Beitragstext wird im Rückblick angezeigt.',
	'DIGESTS_MAX_SIZE'					=> 'Maximale Anzahl an Wörtern, welche in einem Beitrag dargestellt werden',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Minimale Anzahl der Wörter eines Beitrags, damit der Beitrag im Rückblick aufgeführt wird',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'Wenn Sie dieses Feld leer lassen oder auf 0 setzen, werden Texte beliebiger Länge dargestellt.',
	'DIGESTS_MONTHLY'					=> 'Monatlich',
	'DIGESTS_NEW'						=> 'Neu',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'Zeige nur neue Beiträge',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'Hiermit werden alle Beiträge aus dem Rückblick ausgeschlossen, welche vor dem letzten Besuch im Forum erstellt wurden. Wenn Sie das Forum regelmäßig besuchen und die meisten Beiträge lesen, ersparen Sie sich so redundante Einträge in Ihrem Rückblick. Dies könnte jedoch auch dazu führen, dass Sie Beiträge in ungelesenen Forenbereichen verpassen.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'Es gibt keine neuen markierten Beiträge.',
	'DIGESTS_NO_CONSTRAINT'				=> 'Keine Einschränkungen',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'Mindestens ein Forum muss ausgewählt sein',
	'DIGESTS_NO_LIMIT'					=> 'Kein Limit',
	'DIGESTS_NO_POSTS'					=> 'Es gibt keine neuen Beiträge.',
	'DIGESTS_NO_POST_TEXT'				=> 'Zeige überhaupt keinen Beitragstext',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'Sie haben keine neuen ungelesenen privaten Nachrichten.',
	'DIGESTS_NO_TIMEZONE'				=> 'Sie müssen <a href="%s">Ihre Zeitzone in Ihrem Profil angeben</a>.',
	'DIGESTS_NONE'						=> 'Keiner (Abonnements beenden)',
	'DIGESTS_ON'						=> 'an',
	'DIGESTS_OPEN_QUOTE'				=> '&ldquo;',
	'DIGESTS_OPEN_QUOTE_TEXT'			=> '"',
	'DIGESTS_PM'						=> ' PM', // not used if date/time formats do not permit AM and PM
	'DIGESTS_PM_SUBJECT'				=> 'Betreff der privaten Nachricht',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br>(Klicken Sie auf das Bild, um es in voller Größe zu sehen.)',
	'DIGESTS_POST_TEXT'					=> 'Beitragstext',
	'DIGESTS_POST_TIME'					=> 'Beitragszeit',
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br>____________________<br>', // Place here whatever code (make sure it is valid HTML) you want to use to distinguish the end of a post from the beginning of the signature line
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'geschrieben im Thema',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'Alle Beiträge',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'Nur die ersten Beiträge von Themen',
	'DIGESTS_POWERED_BY'				=> 'phpbbservices.com',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Rückblicks-Erweiterung (Digests) für phpBB erstellt von',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Füge meine ungelesenen privaten Nachrichten hinzu',
	'DIGESTS_PUBLISH_DATE'				=> 'Der Rückblick wurde speziell für %1$s am %2$s bereitgestellt',
	'DIGESTS_REGISTER'					=> 'Empfange Rückblicke',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'Die Standardeinstellungen des Forums werden verwendet. Sie können die Rückblicks-Einstellungen nach der Registrierung ändern oder das Abonnement abbestellen.',
	'DIGESTS_REMOVE_YOURS'				=> 'Entferne meine Beiträge',
	'DIGESTS_REPLY'						=> 'Antwort',
	'DIGESTS_ROBOT'						=> 'Bot',
	'DIGESTS_SALUTATION' 				=> 'Guten Tag',
	'DIGESTS_SELECT_FORUMS'				=> 'Schließe Beiträge dieser Foren ein',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Bitte beachten Sie, dass die anzeigten Kategorien und Forenbereiche diejenigen umfassen, für welche Sie Leserechte haben. Die Forenauswahl ist deaktiviert, falls Sie die Option "Nur markierte Themen" aktiviert haben. Passwortgeschützte Foren werden nicht angezeigt und können nicht ausgewählt werden. Wenn "Alle" deaktiviert ist und keine Markierungen ausgewählt wurden, müssen Sie mindestens ein Forum auswählen.<br /><br />Fett gedruckte Forennamen (falls vorhanden) sind Foren, die der Administrator in jedem Rückblick aktiviert hat. Sie können diese Forenbereiche nicht deaktivieren. Durchgestrichene Forennamen sind für die Anzeige in Rückblicken nicht auswählbar. Davon sind markierte Themen ausgenommen.',
	'DIGESTS_SEND_HOUR' 				=> 'Sendestunde',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'Die Rückblicks-Sendestunde ist die Zeit basierend auf der Zeitzone in Ihren Profileinstellungen.',
	'DIGESTS_SEND_IF_NO_NEW_MESSAGES'	=> 'Sende Rückblick auch ohne neue Nachrichten:',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Sende Rückblick auch wenn es keine neuen Beiträge gibt',
	'DIGESTS_SENDER'	 				=> 'Sender',
	'DIGESTS_SENT_TO'					=> 'gesendet an',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'sendete Ihnen eine private Nachricht mit dem Betreff',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Zeige Anhänge',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'Falls aktiviert, werden angehängte Bilder in Ihrem Rückblick angezeigt. Angehängte Dokumente werden als Links angezeigt (nur in HTML-Rückblicken). Der BBCode [img] ist durch diese Einstellung nicht betroffen.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Zeige nur neue Beiträge',
	'DIGESTS_SHOW_PMS' 					=> 'Zeige meine privaten Nachrichten',
	'DIGESTS_SIZE_ERROR'				=> sprintf("Dieses Feld ist ein verpflichtendes Feld. Sie müssen eine positive Ganzzahl eingeben, kleiner oder gleich des von Ihrem Administator vorgegeben Maximums. Das Maximum ist %u. Wenn der angegebene Wert Null ist, gibt es keine Beschränkung.", $config['phpbbservices_digests_max_items']),
	'DIGESTS_SIZE_ERROR_MIN'			=> 'Sie müssen eine Ganzzahl eingeben oder das Feld leer lassen. Wenn der Wert Null ist, gibt es keine Beschränkung.',
	'DIGESTS_SKIP'						=> 'Direkt zum Inhalt',
	'DIGESTS_SORT_BY'					=> 'Sortierreihenfolge der Beiträge',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'Alle Rückblicke werden nach Kategorie und nach Forenbereich sortiert, so wie sie im Forum angeszeigt werden. Sortierungsoptionen werden nur auf Beiträge innerhalb von Forenbereichen angewendet. Die Traditionalle Reihenfolge ist der Standard seit phpBB 2 und entspricht einer Sortierung nach dem letzten Themenbeitrag.',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Traditionalle Reihenfolge',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Traditionalle Reihenfolge, neueste Beiträge zuerst',
	'DIGESTS_SORT_POST_DATE'			=> 'Von Alt zu Neu',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'Von Neu zu Alt',
	'DIGESTS_SORT_USER_ORDER'			=> 'Verwende Foreneinstellungen',
	'DIGESTS_SUBJECT_TITLE'				=> '%1$s %2$s Rückblick',
	'DIGESTS_TAG_REPLACED'				=> '<strong>Hinweis: Inhalt aus Sicherheitsgründen entfernt. Klicken Sie auf den Beitrag oder Themenlink, um den vollständigen Inhalt zu sehen.</strong>',
	'DIGESTS_TITLE'						=> 'Rückblicke',
	'DIGESTS_TRANSLATED_BY'				=> 'übersetzt von',
	'DIGESTS_TRANSLATOR_NAME'			=> 'Jakob Breu',	// Leave null string to suppress translator name
	'DIGESTS_TRANSLATOR_CONTACT'		=> 'https://github.com/jbreu',	// Leave null string to suppress contact info, if used use: mailto:name@emailaddress.com or a URL if you have a website.
	'DIGESTS_TOC'						=> 'Inhaltsverzeichnis',
	'DIGESTS_TOC_EXPLAIN'				=> 'Wenn das Forum sehr stark frequentiert wird, möchten Sie vielleicht ein Inhaltsverzeichnis in Ihrem Rückblick haben. In HTML-Rückblicken enthält das Inhaltsverzeichnis Links, mit denen Sie direkt zu bestimmten Beiträgen oder privaten Nachrichten springen können.',
	'DIGESTS_UNKNOWN'					=> 'Unbekannt',
	'DIGESTS_UNREAD'					=> 'Ungelesen',
	'DIGESTS_UPDATED'					=> 'Ihre Rückblicks-Einstellungen wurden gespeichert',
	'DIGESTS_USE_BOOKMARKS'				=> 'Nur markierte Themen',
	'DIGESTS_WEEKDAY' 					=> 'Sonntag,Montag,Dienstag,Mittwoch,Donnerstag,Freitag,Samstag',
	'DIGESTS_WEEKLY'					=> 'Wöchentlich',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => '%s hat private Nachrichten',
	'DIGESTS_YOUR_DIGEST_OPTIONS' 		=> '%s&rsquo;s Rückblicks-Einstellungen:',

	'UCP_DIGESTS'								=> 'Rückblicke',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'			=> 'Zusätzliche Kriterien',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Zusätzliche Kriterien einstellen',
	'UCP_DIGESTS_BASICS'						=> 'Grundeinstellungen',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Grundlegende Einstellungen',
	'UCP_DIGESTS_FORUMS_SELECTION'				=> 'Forenauswahl',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Forenauswahl einstellen',
	'UCP_DIGESTS_MODE_ERROR'					=> 'Rückblicke wurden mit einem ungültigen Modus von %s aufgerufen',
	'UCP_DIGESTS_POST_FILTERS'					=> 'Beitragsfilter',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Beitragsfilter einstellen',
));
