<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\API;

use BrianFaust\Http\HttpResponse;

class Pingback extends AbstractAPI
{
    public function ping($sourceUri, $targetUri): HttpResponse
    {
        return $this->client->post('pingback.ping', compact('sourceUri', 'targetUri'));
    }

    public function getPingbacks($url): HttpResponse
    {
        return $this->client->post('pingback.extensions.getPingbacks', compact('url'));
    }
}
