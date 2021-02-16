<?php

namespace App\Http\Models;

use App\Http\Models\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $aliasCategories = 'showCategories';
    public $timestamps = false;
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function link()
    {
        return route($this->aliasCategories, $this);
    }
}
