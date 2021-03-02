<?php

namespace App;

use App\Http\Models\Article;
use App\Http\Models\Comment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const ROLE_USER = 1;
    const ROLE_MODERATOR = 5;
    const ROLE_ADMIN = 10;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role', 'updated_at', 'created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }
    public function isModerator(): bool
    {
        return $this->role === self::ROLE_MODERATOR;
    }
}
