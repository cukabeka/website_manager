<?php
/*
 * add custom stuff to this file when a website is destroyed
 * at this point all tables and views are already automatically deleted by website manager addon
 * 
 * variables you can use:
 * 
 * $sql -> sql object used to perform db operations
 * $websiteId -> website id of website that was destroyed
 * $tablePrefix -> table prefix of website that was destroyed
 * $generatedDir -> generated dir of website that was destroyed
 * $mediaDir -> media dir of website that was destroyed
 * $log -> logfile object
 *
 * hint: use rex_website_manager_utils::logQuery($log, $sql, 'HERE SQL STATEMENT WITH ' . $tablePrefix . ' USAGE') to log stuff
 * 
*/
