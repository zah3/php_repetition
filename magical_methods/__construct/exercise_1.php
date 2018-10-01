<?php
/*
 * void __construct ([ mixed $args = "" [, $... ]] )
 * Classes which have this method call it when we are creating new object of current class.
 * From php 7.0 old style of making construct is deprecated -> so we have to use __construct method in new projects.
 * If child class has a constructor then if we want to use parent constructor, we have to call parent::__construct().
 * Else if child class don't have constructor then is inherited from parent class.
 * <-source php.net
 *
 */

/**
 * Created by PhpStorm.
 * User: zachariasz
 * Date: 2018-09-30
 * Time: 21:55
 */
class Animal{

    protected $type = '';

    public function __construct(string $type){
        $this->type = $type;
    }
}

$ancient = new Animal("ancient");
var_dump($ancient);
die(1);




