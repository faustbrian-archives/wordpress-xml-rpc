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

class Categories extends Base
{
    public function getCategories($blog_id)
    {
        return $this->post('wp.getCategories', compact('blog_id'));
    }

    public function suggestCategories($blog_id, $category, $max_results)
    {
        return $this->post('wp.suggestCategories', compact('blog_id', 'category', 'max_results'));
    }

    public function newCategory($blog_id, $category)
    {
        return $this->post('wp.newCategory', compact('blog_id', 'category'));
    }

    public function deleteCategory($blog_id, $category_id)
    {
        return $this->post('wp.deleteCategory', compact('blog_id', 'category_id'));
    }
}
