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

class Categories extends AbstractAPI
{
    public function getCategories($blog_id): HttpResponse
    {
        return $this->post('wp.getCategories', compact('blog_id'));
    }

    public function suggestCategories($blog_id, $category, $max_results): HttpResponse
    {
        return $this->post('wp.suggestCategories', compact('blog_id', 'category', 'max_results'));
    }

    public function newCategory($blog_id, $category): HttpResponse
    {
        return $this->post('wp.newCategory', compact('blog_id', 'category'));
    }

    public function deleteCategory($blog_id, $category_id): HttpResponse
    {
        return $this->post('wp.deleteCategory', compact('blog_id', 'category_id'));
    }
}
