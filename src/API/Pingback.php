<?php

declare(strict_types=1);

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\WordPressXmlRpc\API;

use Plients\Http\HttpResponse;

class Pingback extends AbstractAPI
{
    public function ping($sourceUri, $targetUri): HttpResponse
    {
        return $this->post('pingback.ping', compact('sourceUri', 'targetUri'));
    }

    public function getPingbacks($url): HttpResponse
    {
        return $this->post('pingback.extensions.getPingbacks', compact('url'));
    }
}
