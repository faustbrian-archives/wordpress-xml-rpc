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

class Comments extends Base
{
    public function getCommentCount($blog_id, $post_id)
    {
        return $this->post('wp.getCommentCount', compact('blog_id', 'post_id'));
    }

    public function getComment($blog_id, $comment_id)
    {
        return $this->post('wp.getComment', compact('blog_id', 'comment_id'));
    }

    public function getComments($blog_id, $filter = [])
    {
        return $this->post('wp.getComments', compact('blog_id', 'filter'));
    }

    public function newComment($blog_id, $post_id, $comment)
    {
        return $this->post('wp.newComment', compact('blog_id', 'post_id', 'comment'));
    }

    public function editComment($blog_id, $comment_id, $comment)
    {
        return $this->post('wp.editComment', compact('blog_id', 'comment_id', 'comment'));
    }

    public function deleteComment($blog_id, $comment_id)
    {
        return $this->post('wp.deleteComment', compact('blog_id', 'comment_id'));
    }

    public function getCommentStatusList($blog_id)
    {
        return $this->post('wp.getCommentStatusList', compact('blog_id'));
    }
}
