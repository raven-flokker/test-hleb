<?php

	use App\Controllers\JsonRpc\src\Api;
	use Datto\JsonRpc\Client;
	use Datto\JsonRpc\Server;

	$client = new Client();
        //MySQL DateTime и UNIX Time в миллисекундах
    $message = $client->query( 1,'dateTime', array('Y-m-d H:i:s', true));
	//MySQL DateTime
    $message = $client->query( 2,'MDateTime', array('Y-m-d H:i:s', true));
    //UNIX Time в миллисекундах
    $message = $client->query( 3,'milliseconds', array('Y-m-d H:i:s', true));

    $message = $client->encode();

    $server = new Server(new Api());
    // Я не совсем понял, это именно то что просили, сделать или нужно было сделать
    $reply = $server->reply($message);
    echo " reply: {$reply}\n";

