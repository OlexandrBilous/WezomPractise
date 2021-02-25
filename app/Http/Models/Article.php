<?php

namespace App\Http\Models;

use App\Http\Models\Category;
use App\Http\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use App\User;
class Article extends Model
{
    protected $fillable = ['content', 'title', 'postdate', 'user_id', 'category_id'];
    protected $alias = 'articleOne';

    public function link()
    {
        return route($this->alias, $this);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
