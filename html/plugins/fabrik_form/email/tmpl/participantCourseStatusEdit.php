<?php
defined('_JEXEC') or die('Restricted access');
?>
<html><body><p>Sehr geehrte Eltern,</p>
<p>Ihr Kind <strong>{fab_teilnehmer___vorname} {fab_teilnehmer___nachname}</strong> ist an der Hector Kinderakademie Schwarzwald-Baar angemeldet.<br />In der Tabelle sehen Sie welche Kurswünsche Ihres Kindes berücksichtigt werden konnten.</p>
<table>
<tr><td><strong>Kurs</strong></td><td><strong>Status</strong></td></tr>
<?php
echo "<pre>"; var_dump($this->data); echo "</pre>"; exit;
$stat = array(1 => "Neu", 2 => "Bestätigt", 3 => "Ausgebucht", 4 => "Warteliste", 5 => "TN hat abgesagt", 6 => "Kurs abgesagt");
$joindata = $this->data['fab_kursteilnahme___id'];
foreach (array_keys($joindata) as $key) {
  $kursname = explode (" | ", $this->data['fab_kursteilnahme___kurs'][$key]);
  echo "<tr><td>\"". trim($kursname[0]). " - " . trim($kursname[1]) ."\"</td>";
  echo "<td>". $this->data['fab_kursteilnahme___status'][$key][0] ."</td></tr>";
}
?>
</table>
<p><span style="text-decoration: underline;">Hinweis:</span></p>
<p>Diese Anmeldebestätigung ist verbindlich. Sollte Ihr Kind nicht an einem der unten bestätigten Kursen teilnehmen können, geben Sie bitte dem Sekretariat per E-mail (simone.goettler@hka-sbk.de) sofort Bescheid, damit einem anderen Kind die Kursteilnahme zugesagt werden kann.</p>
<p>Eine weitere Einladung zu den Kursen erfolgt nicht.</p>
<p>Veranstaltungsort und -beginn entnehmen Sie bitte aus dem Kursprogramm.</p>
<p>Mit freundlichen Grüßen</p>
<p><em>Reinhard Zatschler<br />Geschäftsführer<br />Hector-Kinderakademie<br />Irmastr. 7-9<br />78166 Donaueschingen<br />www.kinderakademie-schwarzwald-baar.de<br /></em></p>
</body>
</html>