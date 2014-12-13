Website Manager - Updatehinweise
================================

### Version 3.0.0

* Achtung! Ein Update sollte nur durchgeführt werden wenn Sie die Features der neuen Version (wie z.B. verbesserte Updatefähigkeit) nutzen wollen. Update auf eigene Gefahr!!!
* Machen Sie ein Backup des Addons und evtl. auch der Datenbank.
* Entfernen Sie die Codezeile aus dem Setup Schritt 2 in der `master.inc.php`.
* In der `uninstall.inc.php` alles entfernen ausser `<?php $REX['ADDON']['install']['website_manager'] = 0;`.
* Bei installiertem Themes Plugin die `uninstall.sql` im Plugin Ordner entfernen.
* Das alte Addon kann jetzt deinstalliert werden.
* Entfernen Sie den alten Addon Ordner und kopieren Sie den neuen (neue Version) in das `addons` Verzeichnis von REDAXO.
* Installieren Sie und aktivieren Sie das neue Addon.
* Übernehmen Sie die alten Einstellungen in der `settings.inc.php` (aus Backup) von Hand in die neue Datei unter `/include/data/addons/website_manager/`.
* Bei mehreren Sprachen übernehmen Sie alle `fix.clang.inc.php` Dateien (aus Backup, Ordner `generated`) in den neuen Ordner `/include/data/addons/website_manager/generated/`.
* Machen Sie jetzt noch das Setup Schritt 2. Die Codezeile hat sich geändert und muss exakt rauskopiert werden an die richtige Stelle in der `master.inc.php`.
* Wenn sie das Themes Plugin im Einsatz hatten, müssen Sie es erneut in das Plugin Verzeichnis kopieren (aus dem Backup).
* Falls die Icons im Website Umschalter fehlen sollten, müssen die Websites im Website Manager einmal bearbeitet und wieder gespeichert werden.



