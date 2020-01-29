<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogCategory
 *
 * @package App\Models
 *
 * @property string                     $title
 * @property string                     $slug
 *
 */
class BlogCategory extends Model
{
    use SoftDeletes;

    protected $fillable
        = [
            'title',
            'slug',
            'parent_id',
            'description',
        ];
}
