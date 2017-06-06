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

class Blogger extends Base
{
    public function getUsersBlogs()
    {
        return $this->post('blogger.getUsersBlogs');
    }

    public function getUserInfo()
    {
        return $this->post('blogger.getUserInfo');
    }

    public function getPost($postid)
    {
        return $this->post('blogger.getPost', compact('postid'));
    }

    public function getRecentPosts($blogId, $numberOfPosts = 10)
    {
        return $this->post('blogger.getRecentPosts', compact('blogId', 'numberOfPosts'));
    }

    public function newPost($blogid, $content, $publish)
    {
        return $this->post('blogger.newPost', compact('blogid', 'content', 'publish'));
    }

    public function editPost($postid, $content, $publish)
    {
        return $this->post('blogger.editPost', compact('postid', 'content', 'publish'));
    }

    public function deletePost($postid)
    {
        return $this->post('blogger.deletePost', compact('postid'));
    }
}
