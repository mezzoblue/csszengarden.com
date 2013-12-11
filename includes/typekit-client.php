<?php
/**
 * $token = 'xxxxxx';
 * $typekit = new Typekit();
 *
 * $kit = $typekit->create([
 *   "name" => "Example",
 *   "families" => [[ "id" => "gkmg" ]]
 *   "domains" => ["localhost", "*.example.com"]
 * ], $token);
 *
 */
class Typekit {
	private $timeout = 30;
	private $api = "/api/v1/json/kits/";
	private $debug = false;

	/**
	 *
	 */
	function __construct($timeout = 30, $debug = false) {
		$this->timeout = $timeout;
		$this->debug = $debug;
	}

	private function create_socket () {
		try {
			$socket = pfsockopen("ssl://typekit.com", 443, $errno, $errstr, $this->timeout);

			if ($errno != 0) {
				return false;
			}
			return $socket;
		} catch (Exception $e) {
			return false;
		}
	}

	private function make_request($socket, $request) {
		$bytes_total = strlen($request);

		if ($this->debug) {
			echo $request;
			echo "\r\n\r\n-----------------\r\n\r\n";
		}

		for ($bytes_written = 0; $bytes_written < $bytes_total; $bytes_written += $fwrite) {
			$fwrite = fwrite($socket, substr($request, $bytes_written));

			if ($fwrite === false) {
				return NULL;
			}
		}

		if ($bytes_written === $bytes_total) {
			$status = 500;
			$data = NULL;

			$buffer = "";

			while (!feof($socket)) {
				$buffer .= fread($socket, 1024);
				if (preg_match("/\r\n\r\n/", $buffer)) {
					list($headers, $body) = preg_split("/\r\n\r\n/", $buffer);

					if ($this->debug) {
						echo $headers . "\r\n\r\n";
					}

					preg_match("/HTTP\/1\.1 (\d+)/", $headers, $matches);

					$status = $matches[1];
					if (preg_match("/Content-Length: (\d+)/", $headers, $matches)) {

						$size = $matches[1];

						if (strlen($body) < $size) {
							$data = $body . fread($socket, $size - strlen($body));
						} else {
							$data = $body;
						}

						if ($this->debug) {
							echo $data;
						}
					}
					break;
				}
			}
			if ($this->debug) {
				echo "\n\r\r\n-----------------\r\n\r\n";
			}
			return array($status, $data);
		} else {
			return NULL;
		}
	}

	private function create_post_request($path, $token, $content = NULL) {
		$request =  "POST " . $path . " HTTP/1.1\r\n";
		$request .= "Host: typekit.com\r\n";
		$request .= "Accept: application/json\r\n";
		$request .= "X-Typekit-Token: " . $token . "\r\n";

		if (!is_null($content)) {
			$data = http_build_query($content);

			$request .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$request .= "Content-length: " . strlen($data) . "\r\n";
			$request .= "\r\n";
			$request .= $data;
		} else {
			$request .= "\r\n";
		}
		return $request;
	}

	private function create_get_request($path, $token = NULL) {
		$request =  "GET " . $path . " HTTP/1.1\r\n";
		$request .= "Host: typekit.com\r\n";
		$request .= "Accept: application/json\r\n";

		if (!is_null($token)) {
			$request .= "X-Typekit-Token: " . $token . "\r\n";
		}
		$request .= "\r\n";

		return $request;
	}

	private function create_delete_request($path, $token) {
		$request =  "DELETE " . $path . " HTTP/1.1\r\n";
		$request .= "Host: typekit.com\r\n";
		$request .= "X-Typekit-Token: " . $token . "\r\n";
		$request .= "\r\n";

		return $request;
	}

	/**
	 * @param {string=} id The kit identifier (optional)
	 * @param {string=} token Your Typekit API token (optional)
	 * @return NULL if retrieving the kit(s) failed, otherwise it return the data
	 */
	function get($id = NULL, $token = NULL) {
		$socket = $this->create_socket();

		if ($socket) {
			if (!is_null($id)) {
				if (!is_null($token)) {
					$request = $this->create_get_request($this->api . $id . "/", $token);
				} else {
					$request = $this->create_get_request($this->api . $id . "/published", $token);
				}
			} else {
				$request = $this->create_get_request($this->api, $token);
			}

			$result = $this->make_request($socket, $request);

			if (!is_null($result)) {
				list($status, $data) = $result;

				if ($status == "200") {
					return json_decode($data, true);
				}
			}
		}
		return NULL;
	}

	function remove($id, $token) {
		$socket = $this->create_socket();

		if ($socket) {
			$request = $this->create_delete_request($this->api . $id . "/", $token);

			$result = $this->make_request($socket, $request);

			if (!is_null($result)) {
				list($status, ) = $result;

				return $status == "200";
			}
		}
		return false;
	}

	function publish($id, $token) {
		$socket = $this->create_socket();

		if ($socket) {
			$request = $this->create_post_request($this->api . $id . "/publish", $token);

			$result = $this->make_request($socket, $request);

			if (!is_null($result)) {
				list($status, ) = $result;
				return $status == "200";
			}
		}
		return false;
	}

	function update($id, $data, $token) {
		$socket = $this->create_socket();

		if ($socket) {
			$request = $this->create_post_request($this->api . $id, $token, $data);

			$result = $this->make_request($socket, $request);

			if (!is_null($result)) {
				list($status, $data) = $result;

				if ($status == "200") {
					return json_decode($data, true);
				}
			}
		}
		return NULL;
	}

	function create($data, $token) {
		$socket = $this->create_socket();

		if ($socket) {
			$request = $this->create_post_request($this->api, $token, $data);

			$result = $this->make_request($socket, $request);

			if (!is_null($result)) {
				list($status, $data) = $result;

				if ($status == "200") {
					return json_decode($data, true);
				}
			}
		}
		return NULL;
	}
}
?>
