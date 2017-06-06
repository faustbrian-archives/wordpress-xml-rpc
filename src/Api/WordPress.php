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

class WordPress extends Base
{
    public function getUsersBlogs($parameters = [])
    {
        return $this->post('wp.getUsersBlogs', $parameters);
    }

    public function newPost($parameters = [])
    {
        return $this->post('wp.newPost', $parameters);
    }

    public function editPost($parameters = [])
    {
        return $this->post('wp.editPost', $parameters);
    }

    public function deletePost($parameters = [])
    {
        return $this->post('wp.deletePost', $parameters);
    }

    public function getPost($parameters = [])
    {
        return $this->post('wp.getPost', $parameters);
    }

    public function getPosts($parameters = [])
    {
        return $this->post('wp.getPosts', $parameters);
    }

    public function newTerm($parameters = [])
    {
        return $this->post('wp.newTerm', $parameters);
    }

    public function editTerm($parameters = [])
    {
        return $this->post('wp.editTerm', $parameters);
    }

    public function deleteTerm($parameters = [])
    {
        return $this->post('wp.deleteTerm', $parameters);
    }

    public function getTerm($parameters = [])
    {
        return $this->post('wp.getTerm', $parameters);
    }

    public function getTerms($parameters = [])
    {
        return $this->post('wp.getTerms', $parameters);
    }

    public function getTaxonomy($parameters = [])
    {
        return $this->post('wp.getTaxonomy', $parameters);
    }

    public function getTaxonomies($parameters = [])
    {
        return $this->post('wp.getTaxonomies', $parameters);
    }

    public function getUser($parameters = [])
    {
        return $this->post('wp.getUser', $parameters);
    }

    public function getUsers($parameters = [])
    {
        return $this->post('wp.getUsers', $parameters);
    }

    public function getProfile($parameters = [])
    {
        return $this->post('wp.getProfile', $parameters);
    }

    public function editProfile($parameters = [])
    {
        return $this->post('wp.editProfile', $parameters);
    }

    public function getPage($parameters = [])
    {
        return $this->post('wp.getPage', $parameters);
    }

    public function getPages($parameters = [])
    {
        return $this->post('wp.getPages', $parameters);
    }

    public function newPage($parameters = [])
    {
        return $this->post('wp.newPage', $parameters);
    }

    public function deletePage($parameters = [])
    {
        return $this->post('wp.deletePage', $parameters);
    }

    public function editPage($parameters = [])
    {
        return $this->post('wp.editPage', $parameters);
    }

    public function getPageList($parameters = [])
    {
        return $this->post('wp.getPageList', $parameters);
    }

    public function getAuthors($parameters = [])
    {
        return $this->post('wp.getAuthors', $parameters);
    }

    public function getCategories($parameters = [])
    {
        return $this->post('wp.getCategories', $parameters);
    }

    public function getTags($parameters = [])
    {
        return $this->post('wp.getTags', $parameters);
    }

    public function newCategory($parameters = [])
    {
        return $this->post('wp.newCategory', $parameters);
    }

    public function deleteCategory($parameters = [])
    {
        return $this->post('wp.deleteCategory', $parameters);
    }

    public function suggestCategories($parameters = [])
    {
        return $this->post('wp.suggestCategories', $parameters);
    }

    public function uploadFile($parameters = [])
    {
        return $this->post('wp.uploadFile', $parameters);
    }

    public function deleteFile($parameters = [])
    {
        return $this->post('wp.deleteFile', $parameters);
    }

    public function getCommentCount($parameters = [])
    {
        return $this->post('wp.getCommentCount', $parameters);
    }

    public function getPostStatusList($parameters = [])
    {
        return $this->post('wp.getPostStatusList', $parameters);
    }

    public function getPageStatusList($parameters = [])
    {
        return $this->post('wp.getPageStatusList', $parameters);
    }

    public function getPageTemplates($parameters = [])
    {
        return $this->post('wp.getPageTemplates', $parameters);
    }

    public function getOptions($parameters = [])
    {
        return $this->post('wp.getOptions', $parameters);
    }

    public function setOptions($parameters = [])
    {
        return $this->post('wp.setOptions', $parameters);
    }

    public function getComment($parameters = [])
    {
        return $this->post('wp.getComment', $parameters);
    }

    public function getComments($parameters = [])
    {
        return $this->post('wp.getComments', $parameters);
    }

    public function deleteComment($parameters = [])
    {
        return $this->post('wp.deleteComment', $parameters);
    }

    public function editComment($parameters = [])
    {
        return $this->post('wp.editComment', $parameters);
    }

    public function newComment($parameters = [])
    {
        return $this->post('wp.newComment', $parameters);
    }

    public function getCommentStatusList($parameters = [])
    {
        return $this->post('wp.getCommentStatusList', $parameters);
    }

    public function getMediaItem($parameters = [])
    {
        return $this->post('wp.getMediaItem', $parameters);
    }

    public function getMediaLibrary($parameters = [])
    {
        return $this->post('wp.getMediaLibrary', $parameters);
    }

    public function getPostFormats($parameters = [])
    {
        return $this->post('wp.getPostFormats', $parameters);
    }

    public function getPostType($parameters = [])
    {
        return $this->post('wp.getPostType', $parameters);
    }

    public function getPostTypes($parameters = [])
    {
        return $this->post('wp.getPostTypes', $parameters);
    }

    public function getRevisions($parameters = [])
    {
        return $this->post('wp.getRevisions', $parameters);
    }

    public function restoreRevision($parameters = [])
    {
        return $this->post('wp.restoreRevision', $parameters);
    }
}
