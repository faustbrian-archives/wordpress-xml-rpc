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

class System extends Base
{
    public function multicall()
    {
        return $this->post('system.multicall');
    }

    public function listMethods()
    {
        return $this->post('system.listMethods');
    }

    public function getCapabilities()
    {
        return $this->post('system.getCapabilities');
    }
}
