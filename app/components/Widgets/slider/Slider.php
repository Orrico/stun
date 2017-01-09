<?php

/**
 * Posts Module to Estupendo/Stun application.
 *
 * This file define Posts class and methods.
 *
 * @package Estupendo/Stun
 */
namespace Stun\Modules;

class Posts extends \Stun\Core\Database {

    public function findAll($limit=100, $order='id DESC') {
        $query = \R::findAll('posts', 'ORDER BY ' . $order . ' LIMIT ' . $limit);
        foreach ($query as $post) {
            $posts[] = array(
                'id'            => $post->id,
                'title'         => $post->title,
                'slug'          => $post->slug,
                'text'          => $post->text,
                'desc'          => stunLimText($post->text, 120),
                'cat'           => $post->cat,
                'tags'          => $post->tags,
                'image'         => $post->image,
                'image_url'     => STUN_UPLOADS_PATH . '/noticias/' . $post->image,
                'createdBy'     => $post->createdBy,
                'createdDate'   => $post->createdDate,
                'editedBy'      => $post->editedBy,
                'editedDate'    => $post->editedDate,
                'highlight'     => $post->highlight,
                'status'        => $post->status,
                'accesses'      => $post->accesses,
                'post_url'      => STUN_URL . '/noticias/' . $post->slug,
                'post_url_id'   => STUN_URL . '/noticias/' . $post->id,
            );
        }
        return $posts;
    }

    public function findOne($val, $field='id') {
        $bindings[] = $val;
        $post = \R::findOne('posts', $field . ' = ?', $bindings);

        $post['image_url'] = STUN_UPLOADS_PATH . '/noticias/' . $post->image;
        $post['url'] = STUN_URL . '/noticias/' . $post->slug;
        $post['url_id'] = STUN_URL . '/noticias/' . $post->id;

        return $post;
    }

    public function load($id) {
        return \R::load('posts', $id);
    }

}
