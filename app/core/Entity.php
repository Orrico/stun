<?php

/**
 * Entity class to Estupendo/Stun application.
 *
 * This file define (RedBenPHP) Entity class and methods.
 *
 * @package Estupendo/Stun
 */

namespace Stun\Core;

abstract class Entity {
    protected $pdo;
    protected $bean;
    protected $type;

    public function __construct($db, $type) {
        $this->type = $type;
        $this->bean = \R::dispense($type);

        /** optional use of PDO */
        $this->pdo = $db;
    }

    public function __get($k) {
        return isset($this->bean->{$k}) ? $this->bean->{$k} : null;
    }

    public function __set($k,$v) {
        $this->bean->{$k} = $v;
    }

    public function find($query) {
        return \R::find($this->type, $query);
    }

    public function store() {
        return \R::store($this->bean);
    }

    public function delete() {
        return \R::trash($this->bean);
    }

    /** Used for development only */
    public function reset() {
        return \R::wipe($this->type);
    }
}
