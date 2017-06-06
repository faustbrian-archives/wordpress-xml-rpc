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

class Media extends Base
{
    public function getMediaItem($blog_id, $attachment_id)
    {
        return $this->post('wp.getMediaItem', compact('blog_id', 'attachment_id'));
    }

    public function getMediaLibrary($blog_id, $filter = [])
    {
        return $this->post('wp.getMediaLibrary', compact('blog_id', 'filter'));
    }

    public function uploadFile($blog_id, $data)
    {
        return $this->post('wp.uploadFile', compact('blog_id', 'data'));
    }
}
