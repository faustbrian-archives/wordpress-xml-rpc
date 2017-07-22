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

class Tags extends AbstractAPI
{
    public function getTags($blog_id): HttpResponse
    {
        return $this->client->post('wp.getTags', compact('blog_id'));
    }
}
