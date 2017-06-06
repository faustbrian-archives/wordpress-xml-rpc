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

class Pages extends Base
{
    public function getPage($blog_id, $page_id)
    {
        return $this->post('wp.getPage', compact('blog_id', 'page_id'));
    }

    public function getPages($blog_id, $max_pages = 10)
    {
        return $this->post('wp.getPages', compact('blog_id', 'max_pages'));
    }

    public function getPageList($blog_id)
    {
        return $this->post('wp.getPageList', compact('blog_id'));
    }

    public function newPage($blog_id, $content, $enclosure, $publish)
    {
        return $this->post('wp.newPage', compact('blog_id', 'content', 'enclosure', 'publish'));
    }

    public function editPage($blog_id, $page_id, $content, $publish)
    {
        return $this->post('wp.editPage', compact('blog_id', 'page_id', 'content', 'publish'));
    }

    public function deletePage($blog_id, $page_id)
    {
        return $this->post('wp.deletePage', compact('blog_id', 'page_id'));
    }

    public function getPageStatusList($blog_id)
    {
        return $this->post('wp.getPageStatusList', compact('blog_id'));
    }

    public function getPageTemplates($blog_id)
    {
        return $this->post('wp.getPageTemplates', compact('blog_id'));
    }
}
