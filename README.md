Web-App zur gleichmäßigen und zufälligen Verteilung von Klausuren an Korrekteure im Hinblick auf die nachträgliche Untersuchung der Inter-Rater-Übereinstimmung.

CI\App\Config\Database.php fehlt

Die Erstellung einer DB mit folgenden TB nötig:

-mitglieder{
  id,
  username,
  password,
  name
 }
 
-klausuren{
  id,
  name,
  datei,
  downloads
 }
 
-mitgliederklausuren{
  mitgliedID (Fremdschlüssel mitglieder.id),
  klausurID (Fremdschlüssel klausuren.id)
 }
