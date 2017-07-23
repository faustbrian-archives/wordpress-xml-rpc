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

class Blogger extends AbstractAPI
{
    public function getUsersBlogs(): HttpResponse
    {
        return $this->client->post('blogger.getUsersBlogs');
    }

    public function getUserInfo(): HttpResponse
    {
        return $this->client->post('blogger.getUserInfo');
    }

    public function getPost($postid): HttpResponse
    {
        return $this->client->post('blogger.getPost', compact('postid'));
    }

    public function getRecentPosts($blogId, $numberOfPosts = 10): HttpResponse
    {
        return $this->client->post('blogger.getRecentPosts', compact('blogId', 'numberOfPosts'));
    }

    public function newPost($blogid, $content, $publish): HttpResponse
    {
        return $this->client->post('blogger.newPost', compact('blogid', 'content', 'publish'));
    }

    public function editPost($postid, $content, $publish): HttpResponse
    {
        return $this->client->post('blogger.editPost', compact('postid', 'content', 'publish'));
    }

    public function deletePost($postid): HttpResponse
    {
        return $this->client->post('blogger.deletePost', compact('postid'));
    }
}
