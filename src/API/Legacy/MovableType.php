<?php

/*
 * This file is part of WordPress XML-RPC PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\WordPressXmlRpc\API\Legacy;

use BrianFaust\Http\HttpResponse;
use BrianFaust\WordPressXmlRpc\API\AbstractAPI;

class MovableType extends AbstractAPI
{
    public function publishPost($postid): HttpResponse
    {
        return $this->client->post('mt.publishPost', compact('postid'));
    }

    public function getRecentPostTitles(): HttpResponse
    {
        return $this->client->post('mt.getRecentPostTitles');
    }

    public function getCategoryList($numberOfPosts = 10): HttpResponse
    {
        return $this->client->post('mt.getCategoryList', compact('numberOfPosts'));
    }

    public function getPostCategories($postid): HttpResponse
    {
        return $this->client->post('mt.getPostCategories', compact('postid'));
    }

    public function setPostCategories($postid, $categories): HttpResponse
    {
        return $this->client->post('mt.setPostCategories', compact('postid', 'categories'));
    }

    public function getTrackbackPings(): HttpResponse
    {
        return $this->client->post('mt.getTrackbackPings');
    }

    public function supportedMethods(): HttpResponse
    {
        return $this->client->post('mt.supportedMethods');
    }

    public function supportedTextFilters(): HttpResponse
    {
        return $this->client->post('mt.supportedTextFilters');
    }
}
