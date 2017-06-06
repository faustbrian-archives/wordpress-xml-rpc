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

class Taxonomies extends Base
{
    public function getTaxonomy($blog_id, $taxonomy)
    {
        return $this->post('wp.getTaxonomy', compact('blog_id', 'taxonomy'));
    }

    public function getTaxonomies($blog_id)
    {
        return $this->post('wp.getTaxonomies', compact('blog_id'));
    }

    public function getTerm($blog_id, $taxonomy, $term_id)
    {
        return $this->post('wp.getTerm', compact('blog_id', 'taxonomy', 'term_id'));
    }

    public function getTerms($blog_id, $taxonomy, $filter = [])
    {
        return $this->post('wp.getTerms', compact('blog_id', 'taxonomy', 'filter'));
    }

    public function newTerm($blog_id, $content = [])
    {
        return $this->post('wp.newTerm', compact('blog_id', 'fields'));
    }

    public function editTerm($blog_id, $term_id, $content)
    {
        return $this->post('wp.editTerm', compact('blog_id', 'term_id', 'content'));
    }

    public function deleteTerm($blog_id, $taxonomy, $term_id)
    {
        return $this->post('wp.deleteTerm', compact('blog_id', 'taxonomy', 'term_id'));
    }
}
