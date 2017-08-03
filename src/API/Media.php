<?php

declare(strict_types=1);

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

class Media extends AbstractAPI
{
    public function getMediaItem($blog_id, $attachment_id): HttpResponse
    {
        return $this->post('wp.getMediaItem', compact('blog_id', 'attachment_id'));
    }

    public function getMediaLibrary($blog_id, $filter = []): HttpResponse
    {
        return $this->post('wp.getMediaLibrary', compact('blog_id', 'filter'));
    }

    public function uploadFile($blog_id, $data): HttpResponse
    {
        return $this->post('wp.uploadFile', compact('blog_id', 'data'));
    }
}
