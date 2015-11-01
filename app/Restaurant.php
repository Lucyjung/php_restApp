<?php

namespace App;

use Jenssegers\Mongodb\Model as Eloquent;

class Restaurant extends Eloquent {

    protected $connection = 'mongodb';
    protected $collection = 'restaurant';

}
