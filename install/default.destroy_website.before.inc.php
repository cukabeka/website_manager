<?php
/*
 * destroy_website.before.inc.php
 *
 * add custom stuff to this file when a website is destroyed
 * this file is included BEFORE all other db operations take place
 * 
 * variables you can use:
 * 
 * $sql -> sql object used to perform db operations
 * $websiteId -> website id of website that will be destroyed
 * $tablePrefix -> table prefix of website that will be destroyed
 * $generatedDir -> generated dir of website that will be destroyed
 * $mediaDir -> media dir of website that will be destroyed
 * $log -> logfile object
 *
 * hint: use rex_website_manager_utils::logQuery($log, $sql, 'HERE SQL STATEMENT WITH ' . $tablePrefix . ' USAGE') to log stuff
 * 
*/
