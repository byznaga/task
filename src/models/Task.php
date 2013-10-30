<?php namespace Byznaga\Task\Models;

use Byznaga\Oregano\Models\Oregano as OreganoModel;

class Task extends OreganoModel {

    protected $table = 'tasks';
    protected $softDelete = true;

}