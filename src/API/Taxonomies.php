<?php

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

class Taxonomies extends AbstractAPI
{
    public function getTaxonomy($blog_id, $taxonomy): HttpResponse
    {
        return $this->post('wp.getTaxonomy', compact('blog_id', 'taxonomy'));
    }

    public function getTaxonomies($blog_id): HttpResponse
    {
        return $this->post('wp.getTaxonomies', compact('blog_id'));
    }

    public function getTerm($blog_id, $taxonomy, $term_id): HttpResponse
    {
        return $this->post('wp.getTerm', compact('blog_id', 'taxonomy', 'term_id'));
    }

    public function getTerms($blog_id, $taxonomy, $filter = []): HttpResponse
    {
        return $this->post('wp.getTerms', compact('blog_id', 'taxonomy', 'filter'));
    }

    public function newTerm($blog_id, $content = []): HttpResponse
    {
        return $this->post('wp.newTerm', compact('blog_id', 'fields'));
    }

    public function editTerm($blog_id, $term_id, $content): HttpResponse
    {
        return $this->post('wp.editTerm', compact('blog_id', 'term_id', 'content'));
    }

    public function deleteTerm($blog_id, $taxonomy, $term_id): HttpResponse
    {
        return $this->post('wp.deleteTerm', compact('blog_id', 'taxonomy', 'term_id'));
    }
}
