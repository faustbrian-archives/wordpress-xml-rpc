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

class Options extends AbstractAPI
{
    public function getOptions($blog_id, $options = []): HttpResponse
    {
        return $this->post('wp.getOptions', compact('blog_id', 'options'));
    }

    public function setOptions($blog_id, $options): HttpResponse
    {
        return $this->post('wp.setOptions', compact('blog_id', 'options'));
    }
}
