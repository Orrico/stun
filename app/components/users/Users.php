<?php

/**
 * Users class to Estupendo/Stun application.
 *
 * This file define Users class and methods.
 *
 * @package Estupendo/Stun
 */
namespace Stun\Component;

class Users extends \Stun\Core\Database {

    public function findAll($limit=100, $order='id DESC') {
        $query = \R::findAll('users', 'ORDER BY ' . $order . ' LIMIT ' . $limit);
        foreach ($query as $user) {
            $users[] = array(
                'id'            => $user->id,
                'name'          => $user->name,
                'email'         => $user->email,
                'pass'          => $user->pass,
                'bio'           => $user->bio,
                'image'         => $user->image,
                'createdBy'     => $user->createdBy,
                'createdDate'   => $user->createdDate,
                'editedBy'      => $user->editedBy,
                'editedDate'    => $user->editedDate,
                'role'          => $user->role,
                'status'        => $user->status
            );
        }
        return $users;
    }

    public function findOne($val, $field='id') {
        $bindings[] = $val;
        $user = \R::findOne('users', $field . ' = ?', $bindings);

        $user['image_url'] = STUN_UPLOADS_PATH . '/users/' . $user->image;
        $user['url'] = STUN_URL . '/users/' . $user->slug;
        $user['url_id'] = STUN_URL . '/users/' . $user->id;

        return $user;
    }

    public function load($id) {
        return \R::load('users', $id);
    }

}
