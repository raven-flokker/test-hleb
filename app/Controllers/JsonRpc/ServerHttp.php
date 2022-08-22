<?php


	namespace App\Controllers\JsonRpc;
	require __DIR__ . '/../../../vendor/autoload.php';
	use App\Controllers\JsonRpc\src\Api;
	use Datto\JsonRpc\Http\Server;

	$server = new Server(new Api());
//	$server = new AuthenticatedServer($server);
	$server->reply();
