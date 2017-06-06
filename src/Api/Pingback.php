<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\Api;

use BrianFaust\WordPressXmlRpc\Base;

class Pingback extends Base
{
    public function ping($sourceUri, $targetUri)
    {
        return $this->post('pingback.ping', compact('sourceUri', 'targetUri'));
    }

    public function getPingbacks($url)
    {
        return $this->post('pingback.extensions.getPingbacks', compact('url'));
    }
}
