<?php
include ('../tools/functions.php');
checkAllPages();
//Datenbankverbindung erstellen
$con = getDBConnection();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Datenschutzerklärung</title>
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

<body lang=DE link=blue vlink="#954F72" style="background: rgb(255,246,232); padding-top: 10rem;">

<?php
if (checkLoginhtml()) {
    include ('../view/header_log.php');
} else {
    include ('../view/header.php');
}
?>

<h1 class="text-center mb-4">Datenschutzerklärung</h1>

<div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
            
          <div class=WordSection1>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Einleitung</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Mit der folgenden Datenschutzerklärung
möchten wir Sie darüber aufklären, welche Arten Ihrer personenbezogenen Daten
(nachfolgend auch kurz als &quot;Daten“ bezeichnet) wir zu welchen Zwecken und
in welchem Umfang verarbeiten. Die Datenschutzerklärung gilt für alle von uns
durchgeführten Verarbeitungen personenbezogener Daten, sowohl im Rahmen der
Erbringung unserer Leistungen als auch insbesondere auf unseren Webseiten, in
mobilen Applikationen sowie innerhalb externer Onlinepräsenzen, wie z.B.
unserer Social-Media-Profile (nachfolgend zusammenfassend bezeichnet als
&quot;Onlineangebot“).</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Die verwendeten Begriffe sind nicht
geschlechtsspezifisch.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Stand: 24. Juni 2022</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Inhaltsübersicht</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><a href="#m14"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Einleitung</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m3"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Verantwortlicher</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#mOverview"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Übersicht der Verarbeitungen</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m13"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Maßgebliche Rechtsgrundlagen</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m27"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Sicherheitsmaßnahmen</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m25"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Übermittlung von personenbezogenen Daten</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m24"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Datenverarbeitung in Drittländern</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m12"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Löschung von Daten</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m134"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Einsatz von Cookies</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m317"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Geschäftliche Leistungen</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m225"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Bereitstellung des Onlineangebotes und Webhosting</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m367"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Registrierung, Anmeldung und Nutzerkonto</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m182"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Kontakt- und Anfragenverwaltung</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m328"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Plugins und eingebettete Funktionen sowie Inhalte</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m15"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Änderung und Aktualisierung der Datenschutzerklärung</span></a></li>
 <li class=MsoNormal style='line-height:normal'><a href="#m10"><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif;color:windowtext;
     text-decoration:none'>Rechte der betroffenen Personen</span></a></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Begriffsdefinitionen</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Verantwortlicher</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Felix Regler<br>
Egerländerstr. 19<br>
64354 Reinheim</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>E-Mail-Adresse: </span></p>

<p class=MsoNormal style='line-height:normal'><a
href="mailto:felix.regler03@gmail.com"><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>felix.regler03@gmail.com</span></a></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>Telefon: </span></p>

<p class=MsoNormal style='line-height:normal'><span lang=EN-US
style='font-size:12.0pt;font-family:"Times New Roman",serif'>01573 0957466</span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
lang=EN-US style='font-size:12.0pt;font-family:"Times New Roman",serif'>Impressum:
</span></p>

<p class=MsoNormal style='line-height:normal'><a
href="http://spink-trade.de/impress" target="_blank"><span lang=EN-US
style='font-size:12.0pt;font-family:"Times New Roman",serif'>http://spink-trade.de/impress</span></a></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Übersicht der Verarbeitungen</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Die nachfolgende Übersicht fasst die Arten
der verarbeiteten Daten und die Zwecke ihrer Verarbeitung zusammen und verweist
auf die betroffenen Personen.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:13.5pt;
font-family:"Times New Roman",serif'>Arten der verarbeiteten Daten</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Bestandsdaten.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Zahlungsdaten.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Kontaktdaten.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Inhaltsdaten.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Vertragsdaten.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Nutzungsdaten.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Meta-/Kommunikationsdaten.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:13.5pt;
font-family:"Times New Roman",serif'>Kategorien betroffener Personen</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Kunden.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Interessenten.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Kommunikationspartner.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Nutzer.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Geschäfts- und Vertragspartner.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:13.5pt;
font-family:"Times New Roman",serif'>Zwecke der Verarbeitung</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Erbringung vertraglicher Leistungen
     und Kundenservice.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Kontaktanfragen und Kommunikation.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Sicherheitsmaßnahmen.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Büro- und Organisationsverfahren.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verwaltung und Beantwortung von
     Anfragen.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Feedback.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Bereitstellung unseres
     Onlineangebotes und Nutzerfreundlichkeit.</span></li>
 <li class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Informationstechnische Infrastruktur.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:13.5pt;
font-family:"Times New Roman",serif'>Maßgebliche Rechtsgrundlagen</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Im Folgenden erhalten Sie eine Übersicht
der Rechtsgrundlagen der DSGVO, auf deren Basis wir personenbezogene Daten
verarbeiten. Bitte nehmen Sie zur Kenntnis, dass neben den Regelungen der DSGVO
nationale Datenschutzvorgaben in Ihrem bzw. unserem Wohn- oder Sitzland gelten
können. Sollten ferner im Einzelfall speziellere Rechtsgrundlagen maßgeblich
sein, teilen wir Ihnen diese in der Datenschutzerklärung mit.</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Vertragserfüllung und vorvertragliche
     Anfragen (Art. 6 Abs. 1 S. 1 lit. b. DSGVO)</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> - Die
     Verarbeitung ist für die Erfüllung eines Vertrags, dessen Vertragspartei
     die betroffene Person ist, oder zur Durchführung vorvertraglicher
     Maßnahmen erforderlich, die auf Anfrage der betroffenen Person erfolgen.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Rechtliche Verpflichtung (Art. 6 Abs.
     1 S. 1 lit. c. DSGVO)</span></b><span style='font-size:12.0pt;font-family:
     "Times New Roman",serif'> - Die Verarbeitung ist zur Erfüllung einer
     rechtlichen Verpflichtung erforderlich, der der Verantwortliche
     unterliegt.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Berechtigte Interessen (Art. 6 Abs. 1
     S. 1 lit. f. DSGVO)</span></b><span style='font-size:12.0pt;font-family:
     "Times New Roman",serif'> - Die Verarbeitung ist zur Wahrung der
     berechtigten Interessen des Verantwortlichen oder eines Dritten
     erforderlich, sofern nicht die Interessen oder Grundrechte und
     Grundfreiheiten der betroffenen Person, die den Schutz personenbezogener
     Daten erfordern, überwiegen.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Sicherheitsmaßnahmen</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Wir treffen nach Maßgabe der gesetzlichen
Vorgaben unter Berücksichtigung des Stands der Technik, der
Implementierungskosten und der Art, des Umfangs, der Umstände und der Zwecke
der Verarbeitung sowie der unterschiedlichen Eintrittswahrscheinlichkeiten und
des Ausmaßes der Bedrohung der Rechte und Freiheiten natürlicher Personen
geeignete technische und organisatorische Maßnahmen, um ein dem Risiko
angemessenes Schutzniveau zu gewährleisten.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Zu den Maßnahmen gehören insbesondere die
Sicherung der Vertraulichkeit, Integrität und Verfügbarkeit von Daten durch
Kontrolle des physischen und elektronischen Zugangs zu den Daten als auch des
sie betreffenden Zugriffs, der Eingabe, der Weitergabe, der Sicherung der
Verfügbarkeit und ihrer Trennung. Des Weiteren haben wir Verfahren
eingerichtet, die eine Wahrnehmung von Betroffenenrechten, die Löschung von
Daten und Reaktionen auf die Gefährdung der Daten gewährleisten. Ferner
berücksichtigen wir den Schutz personenbezogener Daten bereits bei der
Entwicklung bzw. Auswahl von Hardware, Software sowie Verfahren entsprechend
dem Prinzip des Datenschutzes, durch Technikgestaltung und durch
datenschutzfreundliche Voreinstellungen.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>SSL-Verschlüsselung (https): Um Ihre via
unserem Online-Angebot übermittelten Daten zu schützen, nutzen wir eine
SSL-Verschlüsselung. Sie erkennen derart verschlüsselte Verbindungen an dem
Präfix https:// in der Adresszeile Ihres Browsers.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Übermittlung von personenbezogenen Daten</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Im Rahmen unserer Verarbeitung von
personenbezogenen Daten kommt es vor, dass die Daten an andere Stellen,
Unternehmen, rechtlich selbstständige Organisationseinheiten oder Personen
übermittelt oder sie ihnen gegenüber offengelegt werden. Zu den Empfängern
dieser Daten können z.B. mit IT-Aufgaben beauftragte Dienstleister oder
Anbieter von Diensten und Inhalten, die in eine Webseite eingebunden werden,
gehören. In solchen Fall beachten wir die gesetzlichen Vorgaben und schließen
insbesondere entsprechende Verträge bzw. Vereinbarungen, die dem Schutz Ihrer
Daten dienen, mit den Empfängern Ihrer Daten ab.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Datenverarbeitung in Drittländern</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Sofern wir Daten in einem Drittland (d.h.,
außerhalb der Europäischen Union (EU), des Europäischen Wirtschaftsraums (EWR))
verarbeiten oder die Verarbeitung im Rahmen der Inanspruchnahme von Diensten
Dritter oder der Offenlegung bzw. Übermittlung von Daten an andere Personen,
Stellen oder Unternehmen stattfindet, erfolgt dies nur im Einklang mit den
gesetzlichen Vorgaben. </span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Vorbehaltlich ausdrücklicher Einwilligung
oder vertraglich oder gesetzlich erforderlicher Übermittlung verarbeiten oder
lassen wir die Daten nur in Drittländern mit einem anerkannten
Datenschutzniveau, vertraglichen Verpflichtung durch sogenannte Standardschutzklauseln
der EU-Kommission, beim Vorliegen von Zertifizierungen oder verbindlicher
internen Datenschutzvorschriften verarbeiten (Art. 44 bis 49 DSGVO,
Informationsseite der EU-Kommission: </span><a
href="https://ec.europa.eu/info/law/law-topic/data-protection/international-dimension-data-protection_de"
target="_blank"><span style='font-size:12.0pt;font-family:"Times New Roman",serif'>https://ec.europa.eu/info/law/law-topic/data-protection/international-dimension-data-protection_de</span></a><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>).</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Löschung von Daten</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Die von uns verarbeiteten Daten werden
nach Maßgabe der gesetzlichen Vorgaben gelöscht, sobald deren zur Verarbeitung
erlaubten Einwilligungen widerrufen werden oder sonstige Erlaubnisse entfallen
(z.B. wenn der Zweck der Verarbeitung dieser Daten entfallen ist oder sie für
den Zweck nicht erforderlich sind). Sofern die Daten nicht gelöscht werden,
weil sie für andere und gesetzlich zulässige Zwecke erforderlich sind, wird
deren Verarbeitung auf diese Zwecke beschränkt. D.h., die Daten werden gesperrt
und nicht für andere Zwecke verarbeitet. Das gilt z.B. für Daten, die aus
handels- oder steuerrechtlichen Gründen aufbewahrt werden müssen oder deren
Speicherung zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen
oder zum Schutz der Rechte einer anderen natürlichen oder juristischen Person
erforderlich ist. </span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Unsere Datenschutzhinweise können ferner
weitere Angaben zu der Aufbewahrung und Löschung von Daten beinhalten, die für
die jeweiligen Verarbeitungen vorrangig gelten.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Einsatz von Cookies</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Cookies sind kleine Textdateien, bzw.
sonstige Speichervermerke, die Informationen auf Endgeräten speichern und
Informationen aus den Endgeräten auslesen. Z.B. um den Login-Status in einem
Nutzerkonto, einen Warenkorbinhalt in einem E-Shop, die aufgerufenen Inhalte
oder verwendete Funktionen eines Onlineangebotes speichern. Cookies können
ferner zu unterschiedlichen Zwecken eingesetzt werden, z.B. zu Zwecken der
Funktionsfähigkeit, Sicherheit und Komfort von Onlineangeboten sowie der
Erstellung von Analysen der Besucherströme. </span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Hinweise zur Einwilligung: </span></b><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>Wir setzen Cookies
im Einklang mit den gesetzlichen Vorschriften ein. Daher holen wir von den
Nutzern eine vorhergehende Einwilligung ein, außer wenn diese gesetzlich nicht
gefordert ist. Eine Einwilligung ist insbesondere nicht notwendig, wenn das
Speichern und das Auslesen der Informationen, also auch von Cookies, unbedingt
erforderlich sind, um dem den Nutzern einen von ihnen ausdrücklich gewünschten
Telemediendienst (also unser Onlineangebot) zur Verfügung zu stellen. Die
widerrufliche Einwilligung wird gegenüber den Nutzern deutlich kommuniziert und
enthält die Informationen zu der jeweiligen Cookie-Nutzung.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Hinweise zu datenschutzrechtlichen
Rechtsgrundlagen: </span></b><span style='font-size:12.0pt;font-family:"Times New Roman",serif'>Auf
welcher datenschutzrechtlichen Rechtsgrundlage wir die personenbezogenen Daten
der Nutzer mit Hilfe von Cookies verarbeiten, hängt davon ab, ob wir Nutzer um
eine Einwilligung bitten. Falls die Nutzer einwilligen, ist die Rechtsgrundlage
der Verarbeitung Ihrer Daten die erklärte Einwilligung. Andernfalls werden die
mithilfe von Cookies verarbeiteten Daten auf Grundlage unserer berechtigten
Interessen (z.B. an einem betriebswirtschaftlichen Betrieb unseres
Onlineangebotes und Verbesserung seiner Nutzbarkeit) verarbeitet oder, wenn
dies im Rahmen der Erfüllung unserer vertraglichen Pflichten erfolgt, wenn der
Einsatz von Cookies erforderlich ist, um unsere vertraglichen Verpflichtungen
zu erfüllen. Zu welchen Zwecken die Cookies von uns verarbeitet werden, darüber
klären wir im Laufe dieser Datenschutzerklärung oder im Rahmen von unseren
Einwilligungs- und Verarbeitungsprozessen auf.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Speicherdauer:&nbsp;</span></b><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>Im Hinblick auf
die Speicherdauer werden die folgenden Arten von Cookies unterschieden:</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Temporäre Cookies (auch: Session-
     oder Sitzungs-Cookies):</span></b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>&nbsp;Temporäre Cookies werden
     spätestens gelöscht, nachdem ein Nutzer ein Online-Angebot verlassen und
     sein Endgerät (z.B. Browser oder mobile Applikation) geschlossen hat.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Permanente Cookies:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Permanente
     Cookies bleiben auch nach dem Schließen des Endgerätes gespeichert. So
     können beispielsweise der Login-Status gespeichert oder bevorzugte Inhalte
     direkt angezeigt werden, wenn der Nutzer eine Website erneut besucht.
     Ebenso können die mit Hilfe von Cookies erhobenen Daten der Nutzer zur
     Reichweitenmessung verwendet werden. Sofern wir Nutzern&nbsp;keine
     expliziten Angaben zur Art und Speicherdauer von Cookies mitteilen (z. B.
     im Rahmen der Einholung der Einwilligung), sollten Nutzer davon ausgehen,
     dass Cookies permanent sind und die Speicherdauer bis zu zwei Jahre
     betragen kann.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Allgemeine Hinweise zum Widerruf und
Widerspruch (Opt-Out): </span></b><span style='font-size:12.0pt;font-family:
"Times New Roman",serif'>Nutzer können die von ihnen abgegebenen Einwilligungen
jederzeit widerrufen und zudem einen Widerspruch gegen die Verarbeitung
entsprechend&nbsp;den gesetzlichen Vorgaben im Art. 21 DSGVO
einlegen.&nbsp;Nutzer können ihren Widerspruch auch über die Einstellungen
ihres Browsers erklären, z.B. durch Deaktivierung der Verwendung von Cookies
(wobei dadurch auch die Funktionalität unserer Online-Dienste eingeschränkt
sein kann). Ein Widerspruch gegen die Verwendung von Cookies zu
Online-Marketing-Zwecken kann auch über die Websites </span><a
href="https://optout.aboutads.info/" target="_blank"><span style='font-size:
12.0pt;font-family:"Times New Roman",serif'>https://optout.aboutads.info</span></a><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'> und </span><a
href="https://www.youronlinechoices.com/" target="_blank"><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'>https://www.youronlinechoices.com/</span></a><span
style='font-size:12.0pt;font-family:"Times New Roman",serif'> erklärt werden.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Weitere Hinweise zu
Verarbeitungsprozessen, Verfahren und Diensten:</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verarbeitung von Cookie-Daten auf
     Grundlage einer Einwilligung: </span></b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Wir setzen ein Verfahren zum
     Cookie-Einwilligungs-Management ein, in dessen Rahmen die Einwilligungen
     der Nutzer in den Einsatz von Cookies, bzw. der im Rahmen des
     Cookie-Einwilligungs-Management-Verfahrens genannten Verarbeitungen und
     Anbieter eingeholt sowie von den Nutzern verwaltet und widerrufen werden
     können. Hierbei wird die Einwilligungserklärung gespeichert, um deren
     Abfrage nicht erneut wiederholen zu müssen und die Einwilligung
     entsprechend der gesetzlichen Verpflichtung nachweisen zu können. Die
     Speicherung kann serverseitig und/oder in einem Cookie (sogenanntes
     Opt-In-Cookie, bzw. mithilfe vergleichbarer Technologien) erfolgen, um die
     Einwilligung einem Nutzer, bzw. dessen Gerät zuordnen zu können.
     Vorbehaltlich individueller Angaben zu den Anbietern von
     Cookie-Management-Diensten, gelten die folgenden Hinweise: Die Dauer der
     Speicherung der Einwilligung kann bis zu zwei Jahren betragen. Hierbei
     wird ein pseudonymer Nutzer-Identifikator gebildet und mit dem Zeitpunkt
     der Einwilligung, Angaben zur Reichweite der Einwilligung (z. B. welche
     Kategorien von Cookies und/oder Diensteanbieter) sowie dem Browser, System
     und verwendeten Endgerät gespeichert.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Geschäftliche Leistungen</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Wir verarbeiten Daten unserer Vertrags-
und Geschäftspartner, z.B. Kunden und Interessenten (zusammenfassend bezeichnet
als &quot;Vertragspartner&quot;) im Rahmen von vertraglichen und vergleichbaren
Rechtsverhältnissen sowie damit verbundenen Maßnahmen und im Rahmen der
Kommunikation mit den Vertragspartnern (oder vorvertraglich), z.B., um Anfragen
zu beantworten.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Wir verarbeiten diese Daten, um unsere
vertraglichen Verpflichtungen zu erfüllen. Dazu gehören insbesondere die
Verpflichtungen zur Erbringung der vereinbarten Leistungen, etwaige
Aktualisierungspflichten und Abhilfe bei Gewährleistungs- und sonstigen
Leistungsstörungen. Darüber hinaus verarbeiten wir die Daten zur Wahrung
unserer Rechte und zum Zwecke der mit diesen Pflichten verbundenen
Verwaltungsaufgaben sowie der Unternehmensorganisation. Darüber hinaus
verarbeiten wir die Daten auf Grundlage unserer berechtigten Interessen an
einer ordnungsgemäßen und betriebswirtschaftlichen Geschäftsführung sowie an
Sicherheitsmaßnahmen zum Schutz unserer Vertragspartner und unseres
Geschäftsbetriebes vor Missbrauch, Gefährdung ihrer Daten, Geheimnisse,
Informationen und Rechte (z.B. zur Beteiligung von Telekommunikations-,
Transport- und sonstigen Hilfsdiensten sowie Subunternehmern, Banken, Steuer-
und Rechtsberatern, Zahlungsdienstleistern oder Finanzbehörden). Im Rahmen des
geltenden Rechts geben wir die Daten von Vertragspartnern nur insoweit an
Dritte weiter, als dies für die vorgenannten Zwecke oder zur Erfüllung
gesetzlicher Pflichten erforderlich ist. Über weitere Formen der Verarbeitung,
z.B. zu Marketingzwecken, werden die Vertragspartner im Rahmen dieser
Datenschutzerklärung informiert.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Welche Daten für die vorgenannten Zwecke
erforderlich sind, teilen wir den Vertragspartnern vor oder im Rahmen der
Datenerhebung, z.B. in Onlineformularen, durch besondere Kennzeichnung (z.B.
Farben) bzw. Symbole (z.B. Sternchen o.ä.), oder persönlich mit.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Wir löschen die Daten nach Ablauf
gesetzlicher Gewährleistungs- und vergleichbarer Pflichten, d.h., grundsätzlich
nach Ablauf von 4 Jahren, es sei denn, dass die Daten in einem Kundenkonto
gespeichert werden, z.B., solange sie aus gesetzlichen Gründen der Archivierung
aufbewahrt werden müssen. Die gesetzliche Aufbewahrungsfrist beträgt bei
steuerrechtlich relevanten Unterlagen sowie bei Handelsbüchern, Inventaren,
Eröffnungsbilanzen, Jahresabschlüssen, die zum Verständnis dieser Unterlagen
erforderlichen Arbeitsanweisungen und sonstigen Organisationsunterlagen und
Buchungsbelegen zehn Jahre sowie bei empfangenen Handels- und Geschäftsbriefen
und Wiedergaben der abgesandten Handels- und Geschäftsbriefe sechs Jahre. Die
Frist beginnt mit Ablauf des Kalenderjahres, in dem die letzte Eintragung in
das Buch gemacht, das Inventar, die Eröffnungsbilanz, der Jahresabschluss oder
der Lagebericht aufgestellt, der Handels- oder Geschäftsbrief empfangen oder
abgesandt worden oder der Buchungsbeleg entstanden ist, ferner die Aufzeichnung
vorgenommen worden ist oder die sonstigen Unterlagen entstanden sind.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Soweit wir zur Erbringung unserer
Leistungen Drittanbieter oder Plattformen einsetzen, gelten im Verhältnis
zwischen den Nutzern und den Anbietern die Geschäftsbedingungen und
Datenschutzhinweise der jeweiligen Drittanbieter oder Plattformen. </span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verarbeitete Datenarten:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Bestandsdaten (z.B. Namen, Adressen); Zahlungsdaten (z.B.
     Bankverbindungen, Rechnungen, Zahlungshistorie); Kontaktdaten (z.B.
     E-Mail, Telefonnummern); Vertragsdaten (z.B. Vertragsgegenstand, Laufzeit,
     Kundenkategorie); Nutzungsdaten (z.B. besuchte Webseiten, Interesse an
     Inhalten, Zugriffszeiten); Meta-/Kommunikationsdaten (z.B.
     Geräte-Informationen, IP-Adressen).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Betroffene Personen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Kunden;
     Interessenten; Geschäfts- und Vertragspartner.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Zwecke der Verarbeitung:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Erbringung
     vertraglicher Leistungen und Kundenservice; Sicherheitsmaßnahmen;
     Kontaktanfragen und Kommunikation; Büro- und Organisationsverfahren;
     Verwaltung und Beantwortung von Anfragen.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Rechtsgrundlagen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Vertragserfüllung und vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit. b.
     DSGVO); Rechtliche Verpflichtung (Art. 6 Abs. 1 S. 1 lit. c. DSGVO);
     Berechtigte Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Weitere Hinweise zu
Verarbeitungsprozessen, Verfahren und Diensten:</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Kundenkonto: </span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>Vertragspartner
     können innerhalb unseres Onlineangebotes ein Konto anlegen (z.B. Kunden-
     bzw. Nutzerkonto, kurz &quot;Kundenkonto&quot;). Falls die Registrierung
     eines Kundenkontos erforderlich ist, werden Vertragspartner hierauf ebenso
     hingewiesen wie auf die für die Registrierung erforderlichen Angaben. Die
     Kundenkonten sind nicht öffentlich und können von Suchmaschinen nicht
     indexiert werden. Im Rahmen der Registrierung sowie anschließender
     Anmeldungen und Nutzungen des Kundenkontos speichern wir die IP-Adressen
     der Kunden nebst den Zugriffszeitpunkten, um die Registrierung nachweisen
     und etwaigem Missbrauch des Kundenkontos vorbeugen zu können. Wenn Kunden
     ihr Kundenkonto gekündigt haben, werden die das Kundenkonto betreffenden
     Daten gelöscht, vorbehaltlich, deren Aufbewahrung ist aus gesetzlichen
     Gründen erforderlich. Es obliegt den Kunden, ihre Daten bei erfolgter
     Kündigung des Kundenkontos zu sichern; <b>Rechtsgrundlagen:</b>
     Vertragserfüllung und vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit. b.
     DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Bereitstellung des Onlineangebotes und
Webhosting</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Um unser Onlineangebot sicher und
effizient bereitstellen zu können, nehmen wir die Leistungen von einem oder
mehreren Webhosting-Anbietern in Anspruch, von deren Servern (bzw. von ihnen
verwalteten Servern) das Onlineangebot abgerufen werden kann. Zu diesen Zwecken
können wir Infrastruktur- und Plattformdienstleistungen, Rechenkapazität,
Speicherplatz und Datenbankdienste sowie Sicherheitsleistungen und technische
Wartungsleistungen in Anspruch nehmen.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Zu den im Rahmen der Bereitstellung des
Hostingangebotes verarbeiteten Daten können alle die Nutzer unseres
Onlineangebotes betreffenden Angaben gehören, die im Rahmen der Nutzung und der
Kommunikation anfallen. Hierzu gehören regelmäßig die IP-Adresse, die notwendig
ist, um die Inhalte von Onlineangeboten an Browser ausliefern zu können, und
alle innerhalb unseres Onlineangebotes oder von Webseiten getätigten Eingaben.</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verarbeitete Datenarten:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Inhaltsdaten
     (z.B. Eingaben in Onlineformularen); Nutzungsdaten (z.B. besuchte Webseiten,
     Interesse an Inhalten, Zugriffszeiten); Meta-/Kommunikationsdaten (z.B.
     Geräte-Informationen, IP-Adressen).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Betroffene Personen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Nutzer (z.B.
     Webseitenbesucher, Nutzer von Onlinediensten).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Zwecke der Verarbeitung:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Bereitstellung unseres Onlineangebotes und Nutzerfreundlichkeit;
     Informationstechnische Infrastruktur (Betrieb und Bereitstellung von
     Informationssystemen und technischen Geräten (Computer, Server etc.).).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Rechtsgrundlagen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Berechtigte
     Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Weitere Hinweise zu
Verarbeitungsprozessen, Verfahren und Diensten:</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Erhebung von Zugriffsdaten und
     Logfiles: </span></b><span style='font-size:12.0pt;font-family:"Times New Roman",serif'>Wir
     selbst (bzw. unser Webhostinganbieter) erheben Daten zu jedem Zugriff auf
     den Server (sogenannte Serverlogfiles). Zu den Serverlogfiles können die
     Adresse und Name der abgerufenen Webseiten und Dateien, Datum und Uhrzeit
     des Abrufs, übertragene Datenmengen, Meldung über erfolgreichen Abruf,
     Browsertyp nebst Version, das Betriebssystem des Nutzers, Referrer URL
     (die zuvor besuchte Seite) und im Regelfall IP-Adressen und der anfragende
     Provider gehören. Die Serverlogfiles können zum einen zu Zwecken der
     Sicherheit eingesetzt werden, z.B., um eine Überlastung der Server zu
     vermeiden (insbesondere im Fall von missbräuchlichen Angriffen,
     sogenannten DDoS-Attacken) und zum anderen, um die Auslastung der Server
     und ihre Stabilität sicherzustellen; <b>Rechtsgrundlagen:</b> Berechtigte
     Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO); <b>Löschung von Daten:</b>
     Logfile-Informationen werden für die Dauer von maximal 30 Tagen
     gespeichert und danach gelöscht oder anonymisiert. Daten, deren weitere
     Aufbewahrung zu Beweiszwecken erforderlich ist, sind bis zur endgültigen
     Klärung des jeweiligen Vorfalls von der Löschung ausgenommen.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Registrierung, Anmeldung und Nutzerkonto</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Nutzer können ein Nutzerkonto anlegen. Im
Rahmen der Registrierung werden den Nutzern die erforderlichen Pflichtangaben
mitgeteilt und zu Zwecken der Bereitstellung des Nutzerkontos auf Grundlage
vertraglicher Pflichterfüllung verarbeitet. Zu den verarbeiteten Daten gehören insbesondere
die Login-Informationen (Nutzername, Passwort sowie eine E-Mail-Adresse).</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Im Rahmen der Inanspruchnahme unserer
Registrierungs- und Anmeldefunktionen sowie der Nutzung des Nutzerkontos
speichern wir die IP-Adresse und den Zeitpunkt der jeweiligen Nutzerhandlung.
Die Speicherung erfolgt auf Grundlage unserer berechtigten Interessen als auch
jener der Nutzer an einem Schutz vor Missbrauch und sonstiger unbefugter
Nutzung. Eine Weitergabe dieser Daten an Dritte erfolgt grundsätzlich nicht, es
sei denn, sie ist zur Verfolgung unserer Ansprüche erforderlich oder es besteht
eine gesetzliche Verpflichtung hierzu.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Die Nutzer können über Vorgänge, die für
deren Nutzerkonto relevant sind, wie z.B. technische Änderungen, per E-Mail
informiert werden.</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verarbeitete Datenarten:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Bestandsdaten (z.B. Namen, Adressen); Kontaktdaten (z.B. E-Mail,
     Telefonnummern); Inhaltsdaten (z.B. Eingaben in Onlineformularen);
     Meta-/Kommunikationsdaten (z.B. Geräte-Informationen, IP-Adressen).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Betroffene Personen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Nutzer (z.B.
     Webseitenbesucher, Nutzer von Onlinediensten).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Zwecke der Verarbeitung:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Erbringung
     vertraglicher Leistungen und Kundenservice; Sicherheitsmaßnahmen;
     Verwaltung und Beantwortung von Anfragen; Bereitstellung unseres
     Onlineangebotes und Nutzerfreundlichkeit.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Rechtsgrundlagen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Vertragserfüllung und vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit. b.
     DSGVO); Berechtigte Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Weitere Hinweise zu
Verarbeitungsprozessen, Verfahren und Diensten:</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Registrierung mit Klarnamen: </span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>Aufgrund der
     Natur unserer Community bitten wir die Nutzer unser Angebot nur unter
     Verwendung von Klarnamen zu nutzen. D.h. die Nutzung von Pseudonymen ist
     nicht zulässig; <b>Rechtsgrundlagen:</b> Vertragserfüllung und
     vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit. b. DSGVO).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Profile der Nutzer sind öffentlich: </span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>Die Profile
     der Nutzer sind öffentlich sichtbar und zugänglich; <b>Rechtsgrundlagen:</b>
     Vertragserfüllung und vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit. b.
     DSGVO).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Löschung von Daten nach Kündigung: </span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>Wenn Nutzer
     ihr Nutzerkonto gekündigt haben, werden deren Daten im Hinblick auf das
     Nutzerkonto, vorbehaltlich einer gesetzlichen Erlaubnis, Pflicht oder
     Einwilligung der Nutzer, gelöscht; <b>Rechtsgrundlagen:</b>
     Vertragserfüllung und vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit. b.
     DSGVO).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Keine Aufbewahrungspflicht für Daten:
     </span></b><span style='font-size:12.0pt;font-family:"Times New Roman",serif'>Es
     obliegt den Nutzern, ihre Daten bei erfolgter Kündigung vor dem
     Vertragsende zu sichern. Wir sind berechtigt, sämtliche während der
     Vertragsdauer gespeicherte Daten des Nutzers unwiederbringlich zu löschen;
     <b>Rechtsgrundlagen:</b> Vertragserfüllung und vorvertragliche Anfragen
     (Art. 6 Abs. 1 S. 1 lit. b. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Kontakt- und Anfragenverwaltung</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Bei der Kontaktaufnahme mit uns (z.B. per
Kontaktformular, E-Mail, Telefon oder via soziale Medien) sowie im Rahmen
bestehender Nutzer- und Geschäftsbeziehungen werden die Angaben der anfragenden
Personen verarbeitet soweit dies zur Beantwortung der Kontaktanfragen und
etwaiger angefragter Maßnahmen erforderlich ist.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Die Beantwortung der Kontaktanfragen sowie
die Verwaltung von Kontakt- und Anfragedaten im Rahmen von vertraglichen oder
vorvertraglichen Beziehungen erfolgt zur Erfüllung unserer vertraglichen
Pflichten oder zur Beantwortung von (vor)vertraglichen Anfragen und im Übrigen
auf Grundlage der berechtigten Interessen an der Beantwortung der Anfragen und
Pflege von Nutzer- bzw. Geschäftsbeziehungen.</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verarbeitete Datenarten:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Kontaktdaten
     (z.B. E-Mail, Telefonnummern); Inhaltsdaten (z.B. Eingaben in
     Onlineformularen); Nutzungsdaten (z.B. besuchte Webseiten, Interesse an
     Inhalten, Zugriffszeiten); Meta-/Kommunikationsdaten (z.B.
     Geräte-Informationen, IP-Adressen).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Betroffene Personen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Kommunikationspartner.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Zwecke der Verarbeitung:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Erbringung
     vertraglicher Leistungen und Kundenservice; Kontaktanfragen und
     Kommunikation; Verwaltung und Beantwortung von Anfragen; Feedback (z.B.
     Sammeln von Feedback via Online-Formular); Bereitstellung unseres
     Onlineangebotes und Nutzerfreundlichkeit.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Rechtsgrundlagen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Vertragserfüllung und vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit. b.
     DSGVO); Berechtigte Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Weitere Hinweise zu
Verarbeitungsprozessen, Verfahren und Diensten:</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Kontaktformular: </span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>Wenn Nutzer
     über unser Kontaktformular, E-Mail oder andere Kommunikationswege mit uns
     in Kontakt treten, verarbeiten wir die uns in diesem Zusammenhang
     mitgeteilten Daten zur Bearbeitung des mitgeteilten Anliegens. Zu diesem
     Zweck verarbeiten wir personenbezogene Daten im Rahmen vorvertraglicher
     und vertraglicher Geschäftsbeziehungen, soweit dies zu deren Erfüllung
     erforderlich ist und im Übrigen auf Grundlage unserer berechtigten
     Interessen sowie der Interessen der Kommunikationspartner an der
     Beantwortung der Anliegen und unserer gesetzlichen Aufbewahrungspflichten;
     <b>Rechtsgrundlagen:</b> Vertragserfüllung und vorvertragliche Anfragen
     (Art. 6 Abs. 1 S. 1 lit. b. DSGVO), Berechtigte Interessen (Art. 6 Abs. 1
     S. 1 lit. f. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Plugins und eingebettete Funktionen sowie
Inhalte</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Wir binden in unser Onlineangebot
Funktions- und Inhaltselemente ein, die von den Servern ihrer jeweiligen
Anbieter (nachfolgend bezeichnet als &quot;Drittanbieter”) bezogen werden.
Dabei kann es sich zum Beispiel um Grafiken, Videos oder Stadtpläne handeln
(nachfolgend einheitlich bezeichnet als &quot;Inhalte”).</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Die Einbindung setzt immer voraus, dass
die Drittanbieter dieser Inhalte die IP-Adresse der Nutzer verarbeiten, da sie
ohne die IP-Adresse die Inhalte nicht an deren Browser senden könnten. Die
IP-Adresse ist damit für die Darstellung dieser Inhalte oder Funktionen
erforderlich. Wir bemühen uns, nur solche Inhalte zu verwenden, deren jeweilige
Anbieter die IP-Adresse lediglich zur Auslieferung der Inhalte verwenden.
Drittanbieter können ferner sogenannte Pixel-Tags (unsichtbare Grafiken, auch
als &quot;Web Beacons&quot; bezeichnet) für statistische oder Marketingzwecke
verwenden. Durch die &quot;Pixel-Tags&quot; können Informationen, wie der
Besucherverkehr auf den Seiten dieser Webseite, ausgewertet werden. Die
pseudonymen Informationen können ferner in Cookies auf dem Gerät der Nutzer
gespeichert werden und unter anderem technische Informationen zum Browser und
zum Betriebssystem, zu verweisenden Webseiten, zur Besuchszeit sowie weitere
Angaben zur Nutzung unseres Onlineangebotes enthalten als auch mit solchen
Informationen aus anderen Quellen verbunden werden.</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verarbeitete Datenarten:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Nutzungsdaten (z.B. besuchte Webseiten, Interesse an Inhalten,
     Zugriffszeiten); Meta-/Kommunikationsdaten (z.B. Geräte-Informationen,
     IP-Adressen).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Betroffene Personen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Nutzer (z.B.
     Webseitenbesucher, Nutzer von Onlinediensten).</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Zwecke der Verarbeitung:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     Bereitstellung unseres Onlineangebotes und Nutzerfreundlichkeit.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Rechtsgrundlagen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Berechtigte
     Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Weitere Hinweise zu Verarbeitungsprozessen,
Verfahren und Diensten:</span></b></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Fontshare (Bereitstellung auf
     eigenem Server): </span></b><span style='font-size:12.0pt;font-family:
     "Times New Roman",serif'>Schriftarten (&quot;Fontshare tm&quot;) zwecks
     einer nutzerfreundlichen Darstellung unseres Onlineangebotes; <b>Dienstanbieter:</b>
     Die Fontshare Fonts werden auf unserem Server gehostet, es werden keine Daten
     an Fontshare übermittelt; <b>Rechtsgrundlagen:</b> Berechtigte Interessen
     (Art. 6 Abs. 1 S. 1 lit. f. DSGVO).</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Änderung und Aktualisierung der
Datenschutzerklärung</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Wir bitten Sie, sich regelmäßig über den
Inhalt unserer Datenschutzerklärung zu informieren. Wir passen die
Datenschutzerklärung an, sobald die Änderungen der von uns durchgeführten
Datenverarbeitungen dies erforderlich machen. Wir informieren Sie, sobald durch
die Änderungen eine Mitwirkungshandlung Ihrerseits (z.B. Einwilligung) oder
eine sonstige individuelle Benachrichtigung erforderlich wird.</span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Sofern wir in dieser Datenschutzerklärung
Adressen und Kontaktinformationen von Unternehmen und Organisationen angeben,
bitten wir zu beachten, dass die Adressen sich über die Zeit ändern können und
bitten die Angaben vor Kontaktaufnahme zu prüfen.</span></p>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Rechte der betroffenen Personen</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>Ihnen stehen als Betroffene nach der DSGVO
verschiedene Rechte zu, die sich insbesondere aus Art. 15 bis 21 DSGVO ergeben:</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Widerspruchsrecht: Sie haben das
     Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben,
     jederzeit gegen die Verarbeitung der Sie betreffenden personenbezogenen
     Daten, die aufgrund von Art. 6 Abs. 1 lit. e oder f DSGVO erfolgt,
     Widerspruch einzulegen; dies gilt auch für ein auf diese Bestimmungen
     gestütztes Profiling. Werden die Sie betreffenden personenbezogenen Daten
     verarbeitet, um Direktwerbung zu betreiben, haben Sie das Recht, jederzeit
     Widerspruch gegen die Verarbeitung der Sie betreffenden personenbezogenen
     Daten zum Zwecke derartiger Werbung einzulegen; dies gilt auch für das
     Profiling, soweit es mit solcher Direktwerbung in Verbindung steht.</span></b></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Widerrufsrecht bei Einwilligungen:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Sie haben
     das Recht, erteilte Einwilligungen jederzeit zu widerrufen.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Auskunftsrecht:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Sie haben
     das Recht, eine Bestätigung darüber zu verlangen, ob betreffende Daten
     verarbeitet werden und auf Auskunft über diese Daten sowie auf weitere
     Informationen und Kopie der Daten entsprechend den gesetzlichen Vorgaben.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Recht auf Berichtigung:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Sie haben
     entsprechend den gesetzlichen Vorgaben das Recht, die Vervollständigung
     der Sie betreffenden Daten oder die Berichtigung der Sie betreffenden
     unrichtigen Daten zu verlangen.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Recht auf Löschung und Einschränkung
     der Verarbeitung:</span></b><span style='font-size:12.0pt;font-family:
     "Times New Roman",serif'> Sie haben nach Maßgabe der gesetzlichen Vorgaben
     das Recht, zu verlangen, dass Sie betreffende Daten unverzüglich gelöscht
     werden, bzw. alternativ nach Maßgabe der gesetzlichen Vorgaben eine
     Einschränkung der Verarbeitung der Daten zu verlangen.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Recht auf Datenübertragbarkeit:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Sie haben
     das Recht, Sie betreffende Daten, die Sie uns bereitgestellt haben, nach
     Maßgabe der gesetzlichen Vorgaben in einem strukturierten, gängigen und
     maschinenlesbaren Format zu erhalten oder deren Übermittlung an einen
     anderen Verantwortlichen zu fordern.</span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Beschwerde bei Aufsichtsbehörde:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Sie haben
     unbeschadet eines anderweitigen verwaltungsrechtlichen oder gerichtlichen
     Rechtsbehelfs das Recht auf Beschwerde bei einer Aufsichtsbehörde,
     insbesondere in dem Mitgliedstaat ihres gewöhnlichen Aufenthaltsorts,
     ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes, wenn Sie
     der Ansicht sind, dass die Verarbeitung der Sie betreffenden
     personenbezogenen Daten gegen die Vorgaben der DSGVO verstößt.</span></li>
</ul>

<p class=MsoNormal style='line-height:normal'><b><span style='font-size:18.0pt;
font-family:"Times New Roman",serif'>Begriffsdefinitionen</span></b></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:12.0pt;
font-family:"Times New Roman",serif'>In diesem Abschnitt erhalten Sie eine
Übersicht über die in dieser Datenschutzerklärung verwendeten
Begrifflichkeiten. Viele der Begriffe sind dem Gesetz entnommen und vor allem
im Art. 4 DSGVO definiert. Die gesetzlichen Definitionen sind verbindlich. Die
nachfolgenden Erläuterungen sollen dagegen vor allem dem Verständnis dienen.
Die Begriffe sind alphabetisch sortiert.</span></p>

<ul type=disc>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Personenbezogene Daten:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     &quot;Personenbezogene Daten“ sind alle Informationen, die sich auf eine
     identifizierte oder identifizierbare natürliche Person (im Folgenden
     &quot;betroffene Person“) beziehen; als identifizierbar wird eine
     natürliche Person angesehen, die direkt oder indirekt, insbesondere
     mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer,
     zu Standortdaten, zu einer Online-Kennung (z.B. Cookie) oder zu einem oder
     mehreren besonderen Merkmalen identifiziert werden kann, die Ausdruck der
     physischen, physiologischen, genetischen, psychischen, wirtschaftlichen,
     kulturellen oder sozialen Identität dieser natürlichen Person sind. </span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verantwortlicher:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'> Als
     &quot;Verantwortlicher“ wird die natürliche oder juristische Person,
     Behörde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit
     anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen
     Daten entscheidet, bezeichnet. </span></li>
 <li class=MsoNormal style='line-height:normal'><b><span style='font-size:12.0pt;
     font-family:"Times New Roman",serif'>Verarbeitung:</span></b><span
     style='font-size:12.0pt;font-family:"Times New Roman",serif'>
     &quot;Verarbeitung&quot; ist jeder mit oder ohne Hilfe automatisierter
     Verfahren ausgeführte Vorgang oder jede solche Vorgangsreihe im
     Zusammenhang mit personenbezogenen Daten. Der Begriff reicht weit und
     umfasst praktisch jeden Umgang mit Daten, sei es das Erheben, das
     Auswerten, das Speichern, das Übermitteln oder das Löschen. </span></li>
</ul>

<p class=MsoNormal>&nbsp;</p>

</div>
          
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
</div>
</body>

</html>
