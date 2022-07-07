<?php
include ('../tools/functions.php');
checkAllPages();
//Datenbankverbindung erstellen
$con = getDBConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Impressum</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../img/favicon_frame5.png">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="../styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="../styles/css/styles.css">
</head>

<body style="background: rgb(255,246,232); padding-top: 10rem;">
    <?php
if (checkLoginhtml()) {
    include ('../view/header_log.php');
} else {
    include ('../view/header.php');
}
?>
    <h1 class="text-center mb-4">Impressum</h1>
    <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
          Angaben gemäß § 5 TMG
Felix Regler
Egerländerstr. 19
Gebäude 44
64354 Reinheim
Kontakt
Telefon: 015730957466
Telefax: +49 (0) 123 44 55 99
E-Mail: felix.regler03@gmail.com
Redaktionell verantwortlich
Jona Kaufmann
Musterstraße 110
90210 Musterstadt


Disclaimer – rechtliche Hinweise
§ 1 Warnhinweis zu Inhalten
Die kostenlosen und frei zugänglichen Inhalte dieser Webseite wurden mit größtmöglicher Sorgfalt erstellt.
Der Anbieter dieser Webseite übernimmt jedoch keine Gewähr für die Richtigkeit und Aktualität der
bereitgestellten kostenlosen und frei zugänglichen journalistischen Ratgeber und Nachrichten. Namentlich
gekennzeichnete Beiträge geben die Meinung des jeweiligen Autors und nicht immer die Meinung des
Anbieters wieder. Allein durch den Aufruf der kostenlosen und frei zugänglichen Inhalte kommt keinerlei
Vertragsverhältnis zwischen dem Nutzer und dem Anbieter zustande, insoweit fehlt es am
Rechtsbindungswillen des Anbieters.

§ 2 Externe Links
Diese Website enthält Verknüpfungen zu Websites Dritter ("externe Links"). Diese Websites unterliegen der
Haftung der jeweiligen Betreiber. Der Anbieter hat bei der erstmaligen Verknüpfung der externen Links die
fremden Inhalte daraufhin überprüft, ob etwaige Rechtsverstöße bestehen. Zu dem Zeitpunkt waren keine
Rechtsverstöße ersichtlich. Der Anbieter hat keinerlei Einfluss auf die aktuelle und zukünftige Gestaltung
und auf die Inhalte der verknüpften Seiten. Das Setzen von externen Links bedeutet nicht, dass sich der
Anbieter die hinter dem Verweis oder Link liegenden Inhalte zu Eigen macht. Eine ständige Kontrolle der
externen Links ist für den Anbieter ohne konkrete Hinweise auf Rechtsverstöße nicht zumutbar. Bei
Kenntnis von Rechtsverstößen werden jedoch derartige externe Links unverzüglich gelöscht.

§ 3 Urheber- und Leistungsschutzrechte
Die auf dieser Website veröffentlichten Inhalte unterliegen dem deutschen Urheber- und
Leistungsschutzrecht. Jede vom deutschen Urheber- und Leistungsschutzrecht nicht zugelassene
Verwertung bedarf der vorherigen schriftlichen Zustimmung des Anbieters oder jeweiligen Rechteinhabers.
Dies gilt insbesondere für Vervielfältigung, Bearbeitung, Übersetzung, Einspeicherung, Verarbeitung bzw.
Wiedergabe von Inhalten in Datenbanken oder anderen elektronischen Medien und Systemen. Inhalte und
Rechte Dritter sind dabei als solche gekennzeichnet. Die unerlaubte Vervielfältigung oder Weitergabe
einzelner Inhalte oder kompletter Seiten ist nicht gestattet und strafbar. Lediglich die Herstellung von
Kopien und Downloads für den persönlichen, privaten und nicht kommerziellen Gebrauch ist erlaubt.
Die Darstellung dieser Website in fremden Frames ist nur mit schriftlicher Erlaubnis zulässig.

§ 4 Besondere Nutzungsbedingungen
Soweit besondere Bedingungen für einzelne Nutzungen dieser Website von den vorgenannten
Paragraphen abweichen, wird an entsprechender Stelle ausdrücklich darauf hingewiesen. In diesem Falle
gelten im jeweiligen Einzelfall die besonderen Nutzungsbedingungen.
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
    </div>

    <?php include ('../view/footer.php'); ?>
    <script src="../styles/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>