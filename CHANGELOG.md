# TimelineJS Changelog

## Version 0.0.3 (2026-07-29)

* Fix: Warning: Undefined array key "deleteConfirm" bei contao:migrate -> Lesezugriffe auf $GLOBALS['TL_LANG'] in den DCA-Dateien mit `?? null` bzw. `?? array()` abgesichert, da der DcaLoader die Sprachdateien noch nicht geladen hat

## Version 0.0.2 (2021-02-24)

* Delete: Verweise auf fremde Klassen

## Version 0.0.1 (2021-02-24)

* Initiale Version
