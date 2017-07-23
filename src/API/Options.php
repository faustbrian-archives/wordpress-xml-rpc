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

class Options extends AbstractAPI
{
    public function getOptions($blog_id, $options = []): HttpResponse
    {
        return $this->client->post('wp.getOptions', compact('blog_id', 'options'));
    }

    public function setOptions($blog_id, $options): HttpResponse
    {
        return $this->client->post('wp.setOptions', compact('blog_id', 'options'));
    }
}