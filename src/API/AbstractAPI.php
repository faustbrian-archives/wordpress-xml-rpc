<?php

/*
 * This file is part of Wordpress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordpressXmlRpc\API;

use BrianFaust\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Http\PendingHttpRequest
     */
    protected $client;

    /**
     * @var array
     */
    protected $config;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client, array $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    protected function post(string $method, array $parameters = []): HttpResponse
    {
        return $this->client->post($this->config['url'], xmlrpc_encode_request($method, $parameters + [
            $this->config['username'], $this->config['password']
        ]));
    }
}
