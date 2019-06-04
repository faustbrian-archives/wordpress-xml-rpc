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

namespace Plients\WordPressXmlRpc\API\Legacy;

use Plients\Http\HttpResponse;
use Plients\WordPressXmlRpc\API\AbstractAPI;

class MovableType extends AbstractAPI
{
    public function publishPost($postid): HttpResponse
    {
        return $this->post('mt.publishPost', compact('postid'));
    }

    public function getRecentPostTitles(): HttpResponse
    {
        return $this->post('mt.getRecentPostTitles');
    }

    public function getCategoryList($numberOfPosts = 10): HttpResponse
    {
        return $this->post('mt.getCategoryList', compact('numberOfPosts'));
    }

    public function getPostCategories($postid): HttpResponse
    {
        return $this->post('mt.getPostCategories', compact('postid'));
    }

    public function setPostCategories($postid, $categories): HttpResponse
    {
        return $this->post('mt.setPostCategories', compact('postid', 'categories'));
    }

    public function getTrackbackPings(): HttpResponse
    {
        return $this->post('mt.getTrackbackPings');
    }

    public function supportedMethods(): HttpResponse
    {
        return $this->post('mt.supportedMethods');
    }

    public function supportedTextFilters(): HttpResponse
    {
        return $this->post('mt.supportedTextFilters');
    }
}
