<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $url;

    /**
     * Create a new client instance.
     *
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\WordPressXmlRpc\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri($this->url);

        $class = "BrianFaust\\WordPressXmlRpc\\API\\{$name}";

        return new $class($client);
    }
}
