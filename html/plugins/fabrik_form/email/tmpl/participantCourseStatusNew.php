<?php
defined('_JEXEC') or die('Restricted access');
?>
<html><body><p>Sehr geehrte Eltern,</p>
<p>Ihr Kind <strong>{fab_teilnehmer___vorname} {fab_teilnehmer___nachname}</strong> wurde an der Hector Kinderakademie Schwarzwald-Baar mit den folgenden Kurswünschen angemeldet.<br />Sobald die Kurseinteilung vorgenommen wird, erhalten Sie eine erneute Benachrichtigung.</p>
<table>
<tr><td><strong>Kurs</strong></td><td><strong>Status</strong></td></tr>
<?php
$stat = array(1 => "Neu", 2 => "Bestätigt", 3 => "Ausgebucht", 4 => "Warteliste", 5 => "TN hat abgesagt", 6 => "Kurs abgesagt");
$joindata = $this->data['fab_kursteilnahme___id'];
foreach (array_keys($joindata) as $key) {
  $kursname = explode (" | ", $this->data['fab_kursteilnahme___kurs'][$key]);
  echo "<tr><td>\"". trim($kursname[0]). " - " . trim($kursname[1]) ."\"</td>";
  echo "<td>". $this->data['fab_kursteilnahme___status'][$key][0] ."</td></tr>";
}
?>
</table> 
<p>Mit freundlichen Grüßen,</p>
<p><em>Reinhard Zatschler<br />Geschäftsführer<br />Hector-Kinderakademie<br />Irmastr. 7-9<br />78166 Donaueschingen<br />www.kinderakademie-schwarzwald-baar.de<br /></em></p>
<?php
//echo "<pre>"; var_dump($this->data); echo "</pre>"; exit;
?>

</body>
</html>
