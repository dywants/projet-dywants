<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed|string slug
 * @property mixed description
 */
class Category extends Model
{
    protected $guarded = ['created_at','deleted_at','updated_at'];
}
