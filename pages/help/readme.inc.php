<?php

$search = array('(CHANGELOG.md)', '(LICENSE.md)');
$replace = array('(index.php?page=website_manager&subpage=help&chapter=changelog)', '(index.php?page=website_manager&subpage=help&chapter=license)');

echo rex_website_manager_utils::getHtmlFromMDFile('README.md', $search, $replace);

