<?php
$sLangName  = "Deutsch";
$iLangNr    = 0;
$aLang = array(
    'oxprobs_module'             => 'Problemf&auml;lle',
    'oxprobs_displayarticles'    => 'Artikel',
    'oxprobs_displaygroups'      => 'Gruppierungen',
    'oxprobs_delivery'           => 'Versand/Bezahlung',
    'oxprobs_users'              => 'Benutzer',
    'oxprobs_pictures'           => 'Bilder',
    
    'OXPROBS_NOSTOCK'            => 'Kein Lagerbestand',
    'OXPROBS_NOARTNUM'           => 'Keine Art.-Nr.',
    'OXPROBS_NOSHORTDESC'        => 'Ungen&uuml;gende Kurzbeschreibung',
    'OXPROBS_NOPIC'              => 'Ohne Produktbild',
    'OXPROBS_DBLACTIVE'          => 'Doppelt aktiviert',
    'OXPROBS_LONGPERIOD'         => 'Zu langer Aktionszeitraum',
    'OXPROBS_INVPERIOD'          => 'Ung&uuml;ltiger Aktionszeitraum',
    'OXPROBS_NOPRICE'            => 'Ohne VK-Preisangabe',
    'OXPROBS_NOBUYPRICE'         => 'Ung&uuml;ltige EK-Preisangabe',
    'OXPROBS_NOEAN'              => 'Ohne EAN',
    'OXPROBS_EANCHK'             => 'Fehlerhafte EAN',
    'OXPROBS_NOMPN'              => 'Ohne Hersteller Art.-Nr.',
    'OXPROBS_NOCAT'              => 'Ohne Kategoriezuordnung',
    'OXPROBS_ORPHAN'             => 'Verwaiste Varianten',
    'OXPROBS_NODESC'             => 'Leere Beschreibung',
    'OXPROBS_NOMANU'             => 'Ohne Hersteller',
    'OXPROBS_NOVEND'             => 'Ohne Lieferant',
    'OXPROBS_NOSTOCK_INFO'       => 'Nachfolgende Artikel und Varianten haben keinen oder einen negativen Lagerbestand. <br />'
                                  . '(Es werden nur Artikel mit Lieferstatus = Standard ber&uuml;cksichtigt)',
    'OXPROBS_NOARTNUM_INFO'      => 'Nachfolgende Artikel und Varianten besitzen keine Artikel-Nummer',
    'OXPROBS_NOSHORTDESC_INFO'   => 'Nachfolgende Artikel und Varianten besitzen keine oder eine ungen&uuml;gende Kurzbeschreibung',
    'OXPROBS_NOPIC_INFO'         => 'Nachfolgende Artikel und Varianten haben kein Produktbild oder nur das Platzhalter-Bild.',
    'OXPROBS_DBLACTIVE_INFO'     => 'Nachfolgende Artikel und Varianten sind sowohl &uuml;ber die Option "Aktiv" als auch &uuml;ber einen Zeitraum aktiviert.',
    'OXPROBS_LONGPERIOD_INFO'    => 'Nachfolgende Artikel und Varianten sind f&uuml;r einen zu langen Zeitraum aktiviert.',
    'OXPROBS_INVPERIOD_INFO'     => 'Nachfolgende Artikel und Varianten sind f&uuml;r einen ung&uuml;ltigen Zeitraum aktiviert.',
    'OXPROBS_NOPRICE_INFO'       => 'Nachfolgende Artikel und Varianten haben keinen oder einen negativen Verkaufs-Preis.',
    'OXPROBS_NOBUYPRICE_INFO'    => 'Nachfolgende Artikel und Varianten haben keinen oder zu geringen Einkaufs-Preis.',
    'OXPROBS_NOEAN_INFO'         => 'Nachfolgende Artikel und Varianten besitzen keine EAN.',
    'OXPROBS_EANCHK_INFO'        => 'Nachfolgende Artikel und Varianten besitzen eine fehlerhafte EAN.',
    'OXPROBS_NOMPN_INFO'         => 'Nachfolgende Artikel und Varianten besitzen keine Hersteller Artikel-Nummer',
    'OXPROBS_NOCAT_INFO'         => 'Nachfolgende Artikel und Varianten sind ohne Zuordnung zu einer Kategorie. <br />'
                                  . '(Diese werden evtl. an Preissuchmaschinen exportiert, sind aber im Shop nicht sichtbar)',
    'OXPROBS_ORPHAN_INFO'        => 'Nachfolgende Varianten sind aktiv, obwohl der Stammartikel deaktiviert ist. <br />'
                                  . '(Diese werden evtl. an Preissuchmaschinen exportiert, sind aber im Shop nicht sichtbar)',
    'OXPROBS_NODESC_INFO'        => 'Nachfolgende Artikel und Varianten sind ohne eine Beschreibung.',
    'OXPROBS_NOMANU_INFO'        => 'Nachfolgende Artikel besitzen keinen Hersteller.',
    'OXPROBS_NOVEND_INFO'        => 'Nachfolgende Artikel besitzen keinen Lieferanten.',
    
    'OXPROBS_INVACTIONS'         => 'Ung&uuml;ltige Aktionen',
    'OXPROBS_INVCATS'            => 'Ung&uuml;ltige Kategorien',
    'OXPROBS_INVMAN'             => 'Ung&uuml;ltige Hersteller',
    'OXPROBS_INVVEN'             => 'Ung&uuml;ltige Lieferant',
    'OXPROBS_INVACTIONS_INFO'    => 'Nachfolgende Aktionen sind noch nicht g&uuml;ltig, abgelaufen oder inaktiv. <br />'
                                  . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden k&ouml;nnen.',
    'OXPROBS_INVCATS_INFO'       => 'Nachfolgende Kategorien, deren Eltern oder Gro&szlig;eltern sind deaktiviert. <br />'
                                  . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden k&ouml;nnen.',
    'OXPROBS_INVMAN_INFO'        => 'Nachfolgende Hersteller sind deaktiviert oder ohne ein Icon. <br />'
                                  . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden k&ouml;nnen.',
    'OXPROBS_INVVEN_INFO'        => 'Nachfolgende Lieferanten sind deaktiviert oder ohne ein Icon. <br />'
                                  . 'Sie enthalten aber aktive Artikel, die trotzdem bestellt werden k&ouml;nnen.',
    'OXPROBS_DEACT_ACT'          => 'Inaktive Aktion',
    'OXPROBS_EXP_ACT'            => 'Abgelaufene Aktion',
    'OXPROBS_PROSPEC_ACT'        => 'Zuk&uuml;nftige Aktion',
    'OXPROBS_DEACT_CATS'         => 'Inaktive Kategorie',
    'OXPROBS_DEACT_PARENTCAT'    => 'Inaktive Elternkategorie',
    'OXPROBS_DEACT_GRANDCAT'     => 'Inaktive Gro&szlig;elternkategorie',
    'OXPROBS_DEACT_MAN'          => 'Inaktiver Hersteller',
    'OXPROBS_NOICON_MAN'         => 'Kein Icon zugewiesen',
    'OXPROBS_DEACT_VEN'          => 'Inaktiver Lieferant',
    'OXPROBS_NOICON_VEN'         => 'Kein Icon zugewiesen',

    'OXPROBS_DELSETCOST'         => 'Versandarten und -kosten',
    'OXPROBS_DELSETPAY'          => 'Versand- und Zahlungsarten',
    'OXPROBS_STATE'              => 'Status',
    'OXPROBS_DELSETCOST_INFO'    => '',
    'OXPROBS_DELSETPAY_INFO'     => '',
    
    'OXPROBS_USRDBL_NAME'        => 'Gleicher Name und Ort',
    'OXPROBS_USRDBL_ADDR'        => 'Gleiche Stra&szlig;e und Ort',
    'OXPROBS_USRDBL_NAME_INFO'   => 'Nachfolgende Benutzer sind mehrfach mit gleichem Namen und Ort im Shop vorhanden (aber mit unterschiedlichen Logins).',
    'OXPROBS_USRDBL_ADDR_INFO'   => 'Nachfolgende Benutzer sind mehrfach mit gleicher Stra&szlig;e und Ort im Shop vorhanden (aber mit unterschiedlichen Logins).',
    'OXPROBS_LOGINS'             => 'Logins',

    'OXPROBS_MANU_NOPICS'        => 'Hersteller ohne Bilder',
    'OXPROBS_MANU_NOPICS_INFO'   => 'Nachfolgende Hersteller sind keine Bilder zugeordnet oder das zugeordnete Bild wurde nicht gefunden.',
    'OXPROBS_NOPIC_DEF'          => 'Kein Bild festgelegt',
    'OXPROBS_NOPIC_FOUND'        => 'Bild-Datei nicht gefunden',

    'SHOP_MODULE_GROUP_OXPROBS_ARTICLESETTINGS'    => 'Artikel-Analyse',
    'SHOP_MODULE_sOxProbsEANField'           => 'Zu pr&uuml;fendes EAN-Feld',
    'SHOP_MODULE_sOxProbsEANField_oxean'     => 'EAN',
    'SHOP_MODULE_sOxProbsEANField_oxdistean' => 'Hersteller EAN',
    'SHOP_MODULE_sOxProbsMinDescLen'         => 'Mindest-Textl&auml;nge der Artikel-Beschreibung',
    'SHOP_MODULE_sOxProbsBPriceMin'          => 'Mindest-Faktor f&uuml;r EK-Preis (z.B. 0.5 = 50% des VK)',
    'SHOP_MODULE_sOxProbsMaxActionTime'      => 'Maximale Dauer einer Aktion (in Tagen)',
    'SHOP_MODULE_GROUP_OXPROBS_USERSETTINGS' => 'Benutzer-Analyse',
    'SHOP_MODULE_sOxProbsNameLength'         => 'Mindest-L&auml;nge von Vor- und Nachname',
    
    'charset'                    => 'ISO-8859-15',
);

?>