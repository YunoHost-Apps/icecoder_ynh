<?php
// Load ICEcoders Settings class from wherever you are and set as $icSettings
require "../conf/icecoder_settings.php";
$icSettings = new \ICEcoder\Settings();

// Load the global settings
$ICEcoderSettings = $icSettings->getConfigGlobalSettings();

print_r(getConfigUsersTemplate());

// Update the loginRequired setting to false
//$icSettings->updateConfigGlobalSettings(
//    ["loginRequired" => false]
//);
?>
