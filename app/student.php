<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class student extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
}
