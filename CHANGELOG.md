Website Manager - Changelog
===========================

### Version 3.1.0 DEV

* Fixed #53: Beim Abspeichern der Einstellungen gingen diese verloren (nur Einstellungen die disabled waren)
* Folgende Extension Points inkl. Beispiel-Anwwendung in der Readme wurden hinzugefügt: `WEBSITE_BEFORE_CREATED`, `WEBSITE_AFTER_CREATED`, `WEBSITE_BEFORE_DESTROYED`, `WEBSITE_AFTER_DESTROYED`

### Version 3.0.1 - 04. Februar 2015

* Unter Einstellungen können Addons und Plugins auch nachträglich noch hinzugefügt werden
* Finetuning

### Version 3.0.0 - 14. Dezember 2014

* Update: Bitte die Hinweise in der `UPDATE.md` beachten!
* Update-Hinweise (auch für alle zukünftigen Versionen) wurden in die Datei `UPDATE.md` ausgelagert und sind auch über die Hilfe im AddOn einsehbar.
* Updatefähigkeit für REDAXO 4.6 hergestellt. Bei einem Update werden die Einstellungen nicht mehr überschrieben, da diese nun im Data-Ordner von REDAXO abgelegt werden
* Einstellungen nun alle über das Backend verfügbar
* Themes Plugin entfernt wegen Updatefähigkeit. Es kann nun von Hand dazuinstalliert werden. Readme Eintrag zum Thema "Verfügbare Plugins" ergänzt.
* Markdown Addon 1.2.0 Kompatibilität verbessert
* SEO42 4.0+ Kompatibilität verbessert und Hinweis zu den Settings-Dateien von SEO42 in die Readme aufgenommen
* SEO42 Addon wird automatisch unterstützt wenn verfügbar, thx@Hirbod
* Slice Status Addon wird automatisch unterstützt wenn verfügbar
* Debug Seite erweitert
* `allow_www_non_www_domains` Option hinzugefügt. Damit kann man steuern ob WWW/Nicht-WWW Domains durchgelassen werden. Wichtig für die No Double Content Redirects in SEO42 4.0+
* `allow_uninstall` Option hinzugefügt. Addon kann nur noch deinstalliert werden wenn Option eingeschaltet ist. Sicherheitsmaßnahme da auch die ganzen Dateien im DATA Ordner von REDAXO gelöscht werden bei Deinstallation.
* "Website nicht gefunden" Meldung jetzt inkl. betreffender Domain
* Setup weiter angepasst
* Readme angepasst und verbessert

### Version 2.0.0 - 02. Februar 2014

* Mechanismus hinzugefügt um Custom Code vor und nach Website-Erstellung/Zerstörung einzuschleusen (siehe Custom-Ordner und Einstellungen-Seite). Nützlich wenn man zusätzliche VIEWS etc. für AddOns anlegen will.
* Bei eingeschaltetem One Page Mode von SEO42 wird nun der Anzeigen-Link korrekt gesetzt
* Plugin-Einbindung nicht mehr hartcodiert. Abschnitt "Entwicklung von Plugins für den Website Manager" zur Readme hinzugefügt.
* Uninstall wird nur noch erlaubt wenn zuvor von Hand alle angelegten Websites wieder gelöscht wurden
* Uninstall Messages verbessert
* Website Auswahl wird nun zurückgesetzt auf die Master Website wenn ausgeloggt
* Wenn der Benutzer keine Rechte hat für min. eine Website wird nun eine entsprechende Fehlermeldung angezeigt
* Hilfe verbessert, Debug und Log Sections hinzugefügt
* Readme erweitert um Abschnitte `AddOns mit gleichem Datenbestand` und `AddOns mit unterschiedlichem Datenbestand`
* Setup etwas verbessert
* Finetuning

### Version 1.3.0 - 24. Oktober 2013

* Hinweise in Readme.md aktualisiert
* Auf der REDAXO System-Seite werden die Felder deaktiviert die über den Website Manager befüllt werden müssen
* Automatische Breitenanpassung des Website Selectors
* Bei Deinstallation wird auf die Codezeile in der `master.inc.php` geprüft
* Bei Installation wird auf das Frontend Link Plugin geprüft
* Verbesserte Anleitung für Setup Schritt 2

### Version 1.2.2 - 01. August 2013

* Bei Installation wird auf das Colorizer/Customizer Plugin geprüft
* Fixed #33: Bug in der "Cache global löschen" Logik führte zu einem Durcheinander in den verschiedenen Generated-Ordnern
* Drag'n Drop Sortierung der Websites auch für Nicht-Admins aktiviert

### Version 1.2.1 - 21. Mai 2013

* Fixed: Generate All funktionierte nicht mehr sauber
* Neue Option: `ignore_permissions`. Siehe Hinweise in der README.md
* Fixed: Wenn Website Manager installiert und aktiviert gab es eine Endlosschleife wenn Setup erneut durchlaufen wurde
* Theme Plugin Update
* Wenn `identical_templates` auf `false` wird ein Textfeld bei Website anlegen/bearbeiten angezeigt, anstelle eines Select-Feldes
* Position des Init-Includes in der `master.inc.php` geändert. Siehe Setup im AddOn
* Wenn Domain nicht existiert wird jetzt eine 404 Page erzeugt
* Init-Methode wegen Image Manager gesäubert. Sattdessen darf man jetzt aktuell den Core patchen ;) siehe README.md
* Fixed #30: Website Select funktioniert jetzt auch wenn man sich in der Struktur und Content Ansicht befindet (thx@serbis)
* Fixed: REXSEO/SEO42 Pathlist war leer (404 Erros) wenn neue Website hinzugefügt wurde
* PHP-Methoden `websiteSwitch()` und `masterWebsiteSwitch()` zu Klasse `rex_website_manager` hinzugefügt um Websites on the fly zu switchen
* PHP-Methoden `getMasterWebsite()` und `getMasterWebsiteId()` zu Klasse `rex_website_manager` hinzugefügt

### Version 1.1.0

* Theme-Plugin erweitert: Dynamische CSS Generierung mittels PHP und SCSS
* Kleinere Cosmetics ud Fixes

### Version 1.0.0



