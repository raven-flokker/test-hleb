<?php

	use Datto\JsonRpc\Http\Client;

	// php -S localhost:8080 ServerHttp.php

	$uri = 'http://localhost:8080/';
	$client = new Client($uri);
	$client->query('dateTime', ['Y-m-d H:i:s', true], $result); /** @var int $result */
	$client->send();

	echo "MySQL DateTime и UNIX Time в миллисекундах : {$result}";