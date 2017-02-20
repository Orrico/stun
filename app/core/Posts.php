<?php

/**
 * Posts class to Estupendo/Stun application.
 *
 * This file define Posts class and methods.
 *
 * @package Estupendo/Stun
 */
namespace Stun\Core;

class Posts extends \Stun\Core\Entity {

    public function findAll($limit=100, $order='id DESC') {
        $query = \R::findAll('posts', 'ORDER BY ' . $order . ' LIMIT ' . $limit);
        foreach ($query as $post) {
            $posts[] = array(
                'id'            => $post->id,
                'title'         => $post->title,
                'slug'          => $post->slug,
                'content'       => $post->content,
                'type'          => $post->type,
                'typeFields'    => $post->typeFields,
                'createdBy'     => $post->createdBy,
                'createdDate'   => $post->createdDate,
                'editedBy'      => $post->editedBy,
                'editedDate'    => $post->editedDate,
                'status'        => $post->status,
                'stats'         => $post->stats
            );
        }
        return $posts;
    }

    public function findOne($val, $field='id') {
        $bindings[] = $val;
        $post = \R::findOne('posts', $field . ' = ?', $bindings);

        $post['image_url'] = STUN_UPLOADS_PATH . '/posts/' . $post->image;
        $post['url'] = STUN_URL . '/posts/' . $post->slug;
        $post['url_id'] = STUN_URL . '/posts/' . $post->id;

        return $post;
    }

    public function load($id) {
        return \R::load('posts', $id);
    }

}
