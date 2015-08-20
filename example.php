<?php
require('vatClient.php');

// The VAT number you wish to lookup
$vat_number = '123 4567 89';
$country_code = 'GB';

$api = new vatRegistration();

// Perform our VAT number check
$details = $api->checkVat($vat_number, $country_code);

// Handle the response details array below...
echo '<p><pre>' . print_r($details, true) . '</pre></p>'; // Simple dump to screen of the full response
