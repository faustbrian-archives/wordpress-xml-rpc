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

namespace Plients\WordPressXmlRpc\API;

use Plients\Http\HttpResponse;

class Posts extends AbstractAPI
{
    public function getPost($blog_id, $post_id, $fields = []): HttpResponse
    {
        return $this->post('wp.getPost', compact('blog_id', 'fields'));
    }

    public function getPosts($blog_id, $filter = [], $fields = []): HttpResponse
    {
        return $this->post('wp.getPosts', compact('blog_id', 'filter', 'fields'));
    }

    public function newPost($blog_id, $content): HttpResponse
    {
        return $this->post('wp.newPost', compact('blog_id', 'fields'));
    }

    public function editPost($blog_id, $post_id, $content): HttpResponse
    {
        return $this->post('wp.editPost', compact('blog_id', 'post_id', 'content'));
    }

    public function deletePost($blog_id, $post_id): HttpResponse
    {
        return $this->post('wp.deletePost', compact('blog_id', 'post_id'));
    }

    public function getPostType($blog_id, $post_type_name, $fields = []): HttpResponse
    {
        return $this->post('wp.getPostType', compact('blog_id', 'post_type_name', 'fields'));
    }

    public function getPostTypes($blog_id, $filter = [], $fields = []): HttpResponse
    {
        return $this->post('wp.getPostTypes', compact('blog_id', 'filter', 'fields'));
    }

    public function getPostFormats($blog_id, $filter = []): HttpResponse
    {
        return $this->post('wp.getPostFormats', compact('blog_id', 'filter'));
    }

    public function getPostStatusList($blog_id): HttpResponse
    {
        return $this->post('wp.getPostStatusList', compact('blog_id'));
    }

    public function getRevisions($blog_id, $post_id): HttpResponse
    {
        return $this->post('wp.getRevisions', compact('blog_id', 'post_id'));
    }

    public function restoreRevision($blog_id, $revision_id): HttpResponse
    {
        return $this->post('wp.restoreRevision', compact('blog_id', 'revision_id'));
    }
}
