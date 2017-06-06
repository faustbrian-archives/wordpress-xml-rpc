<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\WordPressXmlRpc\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://www.wordpress-xml-rpc.com/vtapi/v2/',
        'headers' => [
           'User-Agent' => 'WordPress-XML-RPC-PHP-Client/0.1.0',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];
}
