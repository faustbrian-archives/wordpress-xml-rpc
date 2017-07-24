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

class MetaWeblog extends AbstractAPI
{
    public function getPost($postid): HttpResponse
    {
        return $this->post('metaWeblog.getPost', compact('postid'));
    }

    public function getRecentPosts($blogid, $numberOfPosts): HttpResponse
    {
        return $this->post('metaWeblog.getRecentPosts', compact('blogid', 'numberOfPosts'));
    }

    public function newPost($blogid, $content, $enclosure, $publish): HttpResponse
    {
        return $this->post('metaWeblog.newPost', compact('blogid', 'content', 'enclosure', 'publish'));
    }

    public function editPost($postid, $content, $publish): HttpResponse
    {
        return $this->post('metaWeblog.editPost', compact('postid', 'content', 'publish'));
    }

    public function deletePost($postid): HttpResponse
    {
        return $this->post('metaWeblog.deletePost', compact('postid'));
    }

    public function getCategories($blogid): HttpResponse
    {
        return $this->post('metaWeblog.getCategories', compact('blogid'));
    }

    public function newMediaObject($blogid, $data): HttpResponse
    {
        return $this->post('metaWeblog.newMediaObject', compact('blogid', 'data'));
    }

    public function getUsersBlogs($postid): HttpResponse
    {
        return $this->post('metaWeblog.getUsersBlogs');
    }
}
