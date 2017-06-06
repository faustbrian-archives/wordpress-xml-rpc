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

class Options extends Base
{
    public function getOptions($blog_id, $options = [])
    {
        return $this->post('wp.getOptions', compact('blog_id', 'options'));
    }

    public function setOptions($blog_id, $options)
    {
        return $this->post('wp.setOptions', compact('blog_id', 'options'));
    }
}
