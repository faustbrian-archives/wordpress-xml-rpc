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

class User extends Base
{
    public function getUsersBlogs()
    {
        return $this->post('wp.getUsersBlogs');
    }

    public function getUser($blog_id, $user_id, $fields = [])
    {
        return $this->post('wp.getUser', compact('blog_id', 'user_id', 'fields'));
    }

    public function getUsers($blog_id, $filter = [])
    {
        return $this->post('wp.getUsers', compact('blog_id', 'filter'));
    }

    public function getProfile($blog_id, $filter = [])
    {
        return $this->post('wp.getProfile', compact('blog_id', 'filter'));
    }

    public function editProfile($blog_id, $content)
    {
        return $this->post('wp.editProfile', compact('blog_id', 'content'));
    }

    public function getAuthors($blog_id)
    {
        return $this->post('wp.getAuthors', compact('blog_id'));
    }
}
