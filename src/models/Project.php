<?php namespace Byznaga\Task\Models;

use Byznaga\Oregano\Models\Oregano as OreganoModel;

class Project extends OreganoModel {

    protected $table = 'projects';
    protected $softDelete = true;

}