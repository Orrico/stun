<?php

/**
 * Pages class to Estupendo/Stun application.
 *
 * This file define Pages class and methods.
 *
 * @package Estupendo/Stun
 */
namespace Stun\Component;

class Pages extends \Stun\Core\Database {

    public function findAll($limit=100, $order='id DESC') {
        $query = \R::findAll('pages', 'ORDER BY ' . $order . ' LIMIT ' . $limit);
        foreach ($query as $page) {
            $pages[] = array(
                'id'            => $page->id,
                'title'         => $page->title,
                'slug'          => $page->slug,
                'content'       => $page->content,
                'type'          => $page->type,
                'typeFields'    => $page->typeFields,
                'createdBy'     => $page->createdBy,
                'createdDate'   => $page->createdDate,
                'editedBy'      => $page->editedBy,
                'editedDate'    => $page->editedDate,
                'status'        => $page->status,
                'stats'         => $page->stats
            );
        }
        return $pages;
    }

    public function findOne($val, $field='id') {
        $bindings[] = $val;
        $page = \R::findOne('pages', $field . ' = ?', $bindings);

        $page['image_url'] = STUN_UPLOADS_PATH . '/pages/' . $page->image;
        $page['url'] = STUN_URL . '/pages/' . $page->slug;
        $page['url_id'] = STUN_URL . '/pages/' . $page->id;

        return $page;
    }

    public function load($id) {
        return \R::load('pages', $id);
    }

}
