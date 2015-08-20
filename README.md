# EU VAT Number Validation (PHP)
A very simple, light weight PHP client for validating EU VAT numbers against the central europa.eu database.

**Here's a very simple example of this client in action:**
```PHP
<?php
$vat_number = '123 4567 89'; // The VAT number you wish to lookup
$country_code = 'GB';

$api = new vatRegistration();

// Perform our VAT number check
$details = $api->checkVat($vat_number, $country_code);

// Handle the response details array below...
echo '<p><pre>' . print_r($details, true) . '</pre></p>'; // Simple dump to screen of the full response
```
