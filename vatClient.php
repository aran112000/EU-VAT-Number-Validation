<?php
/**
 * Class vatRegistration
 */
final class vatRegistration {

	const WSDL = 'http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl';

	private $client = null;

	/**
	 *
	 */
	public function __construct() {
		$this->client = new SoapClient('http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl');
	}

	/**
	 * @param string $vat_number
	 * @param string $country_code
	 *
	 * @return array
	 */
	public function checkVat($vat_number, $country_code = 'GB') {
		$this->cleanVatNumber($vat_number, $country_code);

		return (array) $this->client->checkVat([
			'countryCode' => strtoupper($country_code),
			'vatNumber' => $vat_number,
		]);
	}

	/**
	 * @param string $vat_number
	 * @param string $country_code
	 */
	private function cleanVatNumber(&$vat_number, $country_code) {
		$vat_number = trim(str_replace([' ', '-', '_', strtolower($country_code)], '', strtolower($vat_number)));
	}
}
