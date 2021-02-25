<?php

namespace App\Http\Models;

use App\Http\Models\Article;
use Eloquent;
use Illuminate\Database\Eloquent\Model;
use App\User;
    /**
     * App\Models\CommentPost
     *
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment query()
     * @mixin Eloquent
     * @property int $id
     * @property int|null $articles_id
     * @property string $comment
     * @property int|null $user_id
     * @property Article $article
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment whereArticlesId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment whereComment($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Comment whereUserId($value)
     */

class Comment extends Model
{
    protected $fillable = ['articles_id', 'comment', 'user_id'];
    protected $table = 'comments';

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

