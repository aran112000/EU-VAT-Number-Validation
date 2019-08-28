# EU VAT Number Validation (PHP)
A very simple, light weight PHP client for validating EU VAT numbers against the central europa.eu database.

**Here's a very simple example of this client in action:**
```PHP
$vat_number = '123 4567 89'; // The VAT number you wish to lookup
$country_code = 'GB';

$details = (new vatRegistration)->checkVat($vat_number, $country_code);

var_dump($details)
```
