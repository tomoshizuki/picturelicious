<?php
require_once( '../lib/config.php' );
header('Content-Type: application/opensearchdescription+xml; charset=utf-8');
echo '<?xml version="1.0"?>'."\n";
echo '<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">'."\n";
echo '  <ShortName>'.htmlspecialchars(Config::$siteName).'</ShortName>'."\n";
echo '  <Image width="16" height="16" type="image/x-icon">'.Config::$frontendPath.'media/favicon.ico</Image>'."\n";
echo '  <Url type="text/html" template="'.Config::$frontendPath.'search/{searchTerms}" />'."\n";
echo '  <Url type="application/opensearchdescription+xml" rel="self" template="'.Config::$frontendPath.'media/opensearch.php" />'."\n";
echo '</OpenSearchDescription>'."\n";
?>
