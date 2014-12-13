<?php
/*
 * create_website.after.inc.php
 *
 * add custom stuff to this file when new website is created
 * this file is included AFTER all other db operations took place
 * 
 * variables you can use:
 * 
 * $sql -> sql object used to perform db operations 
 * $websiteId -> website id of new website
 * $tablePrefix -> table prefix of new website
 * $generatedDir -> generated dir of new website
 * $mediaDir -> media dir of new website
 * $log -> logfile object
 *
 * hint: use rex_website_manager_utils::logQuery($log, $sql, 'HERE SQL STATEMENT WITH ' . $tablePrefix . ' USAGE') to log stuff
 * 
*/
