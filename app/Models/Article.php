<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @property $id
 * @property $user_id
 * @property $articles
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Article extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'articles'];



}
