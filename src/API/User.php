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

class User extends AbstractAPI
{
    public function getUsersBlogs(): HttpResponse
    {
        return $this->post('wp.getUsersBlogs');
    }

    public function getUser($blog_id, $user_id, $fields = []): HttpResponse
    {
        return $this->post('wp.getUser', compact('blog_id', 'user_id', 'fields'));
    }

    public function getUsers($blog_id, $filter = []): HttpResponse
    {
        return $this->post('wp.getUsers', compact('blog_id', 'filter'));
    }

    public function getProfile($blog_id, $filter = []): HttpResponse
    {
        return $this->post('wp.getProfile', compact('blog_id', 'filter'));
    }

    public function editProfile($blog_id, $content): HttpResponse
    {
        return $this->post('wp.editProfile', compact('blog_id', 'content'));
    }

    public function getAuthors($blog_id): HttpResponse
    {
        return $this->post('wp.getAuthors', compact('blog_id'));
    }
}
