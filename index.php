<?php

require_once('vendor/autoload.php');

$client = new BrianFaust\WordPressXmlRpc\Client('http://wordpress.dev/xmlrpc.php', 'password', 'password');

dd($client->api('Demo')->sayHello()->body());
