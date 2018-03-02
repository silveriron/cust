<?php
	class geoPlugin {
		var $host = 'http://www.geoplugin.net/php.gp?ip={IP}&base_currency={CURRENCY}';
		var $currency = 'USD';
		var $countryName = null;
		
		function locate($ip = null) {
			global $_SERVER;
			
			if ( is_null( $ip ) ) {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			
			$host = str_replace( '{IP}', $ip, $this->host );
			$host = str_replace( '{CURRENCY}', $this->currency, $host );
			
			$data = array();
			
			$response = $this->fetch($host);
			
			$data = unserialize($response);
			$this->countryName = $data['geoplugin_countryName'];
		}
		
		function fetch($host) {

			if ( function_exists('curl_init') ) {
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $host);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.0');
				$response = curl_exec($ch);
				curl_close ($ch);
				
			} else if ( ini_get('allow_url_fopen') ) {
				$response = file_get_contents($host, 'r');
			} else {
				trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
				return;
			}
			return $response;
		}
	}
?>