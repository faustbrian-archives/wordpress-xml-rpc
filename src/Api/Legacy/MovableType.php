<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\Api\Legacy;

use BrianFaust\WordPressXmlRpc\Base;

class MovableType extends Base
{
    public function publishPost($postid)
    {
        return $this->post('mt.publishPost', compact('postid'));
    }

    public function getRecentPostTitles()
    {
        return $this->post('mt.getRecentPostTitles');
    }

    public function getCategoryList($numberOfPosts = 10)
    {
        return $this->post('mt.getCategoryList', compact('numberOfPosts'));
    }

    public function getPostCategories($postid)
    {
        return $this->post('mt.getPostCategories', compact('postid'));
    }

    public function setPostCategories($postid, $categories)
    {
        return $this->post('mt.setPostCategories', compact('postid', 'categories'));
    }

    public function getTrackbackPings()
    {
        return $this->post('mt.getTrackbackPings');
    }

    public function supportedMethods()
    {
        return $this->post('mt.supportedMethods');
    }

    public function supportedTextFilters()
    {
        return $this->post('mt.supportedTextFilters');
    }
}
