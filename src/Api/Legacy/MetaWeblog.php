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

class MetaWeblog extends Base
{
    public function getPost($postid)
    {
        return $this->post('metaWeblog.getPost', compact('postid'));
    }

    public function getRecentPosts($blogid, $numberOfPosts)
    {
        return $this->post('metaWeblog.getRecentPosts', compact('blogid', 'numberOfPosts'));
    }

    public function newPost($blogid, $content, $enclosure, $publish)
    {
        return $this->post('metaWeblog.newPost', compact('blogid', 'content', 'enclosure', 'publish'));
    }

    public function editPost($postid, $content, $publish)
    {
        return $this->post('metaWeblog.editPost', compact('postid', 'content', 'publish'));
    }

    public function deletePost($postid)
    {
        return $this->post('metaWeblog.deletePost', compact('postid'));
    }

    public function getCategories($blogid)
    {
        return $this->post('metaWeblog.getCategories', compact('blogid'));
    }

    public function newMediaObject($blogid, $data)
    {
        return $this->post('metaWeblog.newMediaObject', compact('blogid', 'data'));
    }

    public function getUsersBlogs($postid)
    {
        return $this->post('metaWeblog.getUsersBlogs');
    }
}
