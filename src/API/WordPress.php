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

class WordPress extends AbstractAPI
{
    public function getUsersBlogs(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getUsersBlogs', $parameters);
    }

    public function newPost(array $parameters = []): HttpResponse
    {
        return $this->post('wp.newPost', $parameters);
    }

    public function editPost(array $parameters = []): HttpResponse
    {
        return $this->post('wp.editPost', $parameters);
    }

    public function deletePost(array $parameters = []): HttpResponse
    {
        return $this->post('wp.deletePost', $parameters);
    }

    public function getPost(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPost', $parameters);
    }

    public function getPosts(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPosts', $parameters);
    }

    public function newTerm(array $parameters = []): HttpResponse
    {
        return $this->post('wp.newTerm', $parameters);
    }

    public function editTerm(array $parameters = []): HttpResponse
    {
        return $this->post('wp.editTerm', $parameters);
    }

    public function deleteTerm(array $parameters = []): HttpResponse
    {
        return $this->post('wp.deleteTerm', $parameters);
    }

    public function getTerm(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getTerm', $parameters);
    }

    public function getTerms(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getTerms', $parameters);
    }

    public function getTaxonomy(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getTaxonomy', $parameters);
    }

    public function getTaxonomies(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getTaxonomies', $parameters);
    }

    public function getUser(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getUser', $parameters);
    }

    public function getUsers(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getUsers', $parameters);
    }

    public function getProfile(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getProfile', $parameters);
    }

    public function editProfile(array $parameters = []): HttpResponse
    {
        return $this->post('wp.editProfile', $parameters);
    }

    public function getPage(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPage', $parameters);
    }

    public function getPages(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPages', $parameters);
    }

    public function newPage(array $parameters = []): HttpResponse
    {
        return $this->post('wp.newPage', $parameters);
    }

    public function deletePage(array $parameters = []): HttpResponse
    {
        return $this->post('wp.deletePage', $parameters);
    }

    public function editPage(array $parameters = []): HttpResponse
    {
        return $this->post('wp.editPage', $parameters);
    }

    public function getPageList(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPageList', $parameters);
    }

    public function getAuthors(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getAuthors', $parameters);
    }

    public function getCategories(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getCategories', $parameters);
    }

    public function getTags(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getTags', $parameters);
    }

    public function newCategory(array $parameters = []): HttpResponse
    {
        return $this->post('wp.newCategory', $parameters);
    }

    public function deleteCategory(array $parameters = []): HttpResponse
    {
        return $this->post('wp.deleteCategory', $parameters);
    }

    public function suggestCategories(array $parameters = []): HttpResponse
    {
        return $this->post('wp.suggestCategories', $parameters);
    }

    public function uploadFile(array $parameters = []): HttpResponse
    {
        return $this->post('wp.uploadFile', $parameters);
    }

    public function deleteFile(array $parameters = []): HttpResponse
    {
        return $this->post('wp.deleteFile', $parameters);
    }

    public function getCommentCount(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getCommentCount', $parameters);
    }

    public function getPostStatusList(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPostStatusList', $parameters);
    }

    public function getPageStatusList(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPageStatusList', $parameters);
    }

    public function getPageTemplates(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPageTemplates', $parameters);
    }

    public function getOptions(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getOptions', $parameters);
    }

    public function setOptions(array $parameters = []): HttpResponse
    {
        return $this->post('wp.setOptions', $parameters);
    }

    public function getComment(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getComment', $parameters);
    }

    public function getComments(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getComments', $parameters);
    }

    public function deleteComment(array $parameters = []): HttpResponse
    {
        return $this->post('wp.deleteComment', $parameters);
    }

    public function editComment(array $parameters = []): HttpResponse
    {
        return $this->post('wp.editComment', $parameters);
    }

    public function newComment(array $parameters = []): HttpResponse
    {
        return $this->post('wp.newComment', $parameters);
    }

    public function getCommentStatusList(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getCommentStatusList', $parameters);
    }

    public function getMediaItem(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getMediaItem', $parameters);
    }

    public function getMediaLibrary(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getMediaLibrary', $parameters);
    }

    public function getPostFormats(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPostFormats', $parameters);
    }

    public function getPostType(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPostType', $parameters);
    }

    public function getPostTypes(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getPostTypes', $parameters);
    }

    public function getRevisions(array $parameters = []): HttpResponse
    {
        return $this->post('wp.getRevisions', $parameters);
    }

    public function restoreRevision(array $parameters = []): HttpResponse
    {
        return $this->post('wp.restoreRevision', $parameters);
    }
}
