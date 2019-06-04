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

class Comments extends AbstractAPI
{
    public function getCommentCount($blog_id, $post_id): HttpResponse
    {
        return $this->post('wp.getCommentCount', compact('blog_id', 'post_id'));
    }

    public function getComment($blog_id, $comment_id): HttpResponse
    {
        return $this->post('wp.getComment', compact('blog_id', 'comment_id'));
    }

    public function getComments($blog_id, $filter = []): HttpResponse
    {
        return $this->post('wp.getComments', compact('blog_id', 'filter'));
    }

    public function newComment($blog_id, $post_id, $comment): HttpResponse
    {
        return $this->post('wp.newComment', compact('blog_id', 'post_id', 'comment'));
    }

    public function editComment($blog_id, $comment_id, $comment): HttpResponse
    {
        return $this->post('wp.editComment', compact('blog_id', 'comment_id', 'comment'));
    }

    public function deleteComment($blog_id, $comment_id): HttpResponse
    {
        return $this->post('wp.deleteComment', compact('blog_id', 'comment_id'));
    }

    public function getCommentStatusList($blog_id): HttpResponse
    {
        return $this->post('wp.getCommentStatusList', compact('blog_id'));
    }
}
