<?php
// This should be modifed as your own use warrants.

require_once('simplepie.inc');
SimplePie_Misc::display_cached_file(SimplePie_Sanitize::sanitize($_GET['i'],SIMPLEPIE_CONSTRUCT_IRI), '../../cache', 'spi');
?>